<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MitraController extends Controller
{
    public function mitraGanteng(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with(['error' => 'Anda harus login terlebih dahulu untuk menjadi mitra'])->withFragment('mitra');;
        }

        $udhJadiMitra = Mitra::where('id_user', Auth::id())->first();
        if ($udhJadiMitra) {
            return redirect()->route('beranda')->with(['error' => 'Anda sudah terdaftar sebagai mitra.'])->withFragment('mitra');
        }

        $validatedData = $request->validate([
            'namaMitra'     => 'required|max:30|unique:mitras,namaMitra',
            'emailMitra'    => 'required|email|unique:mitras,emailMitra',
            'kontak'        => 'required',
            'kategoriMitra' => 'required',
            'alamatMitra'   => 'required',
            'medsos'        => 'required',
            'logo'          => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('logo')) {
            $imagePath = $request->file('logo')->store('public/mitra');
        }

        Mitra::create([
            'id_user'       => Auth::id(),
            'namaMitra'     => $validatedData['namaMitra'],
            'kontak'        => $validatedData['kontak'],
            'kategoriMitra' => $validatedData['kategoriMitra'],
            'alamatMitra'   => $validatedData['alamatMitra'],
            'emailMitra'    => $validatedData['emailMitra'],
            'medsos'        => $validatedData['medsos'],
            'logo'          => $imagePath ? str_replace('public/', '', $imagePath) : null,
        ]);

        return redirect()->route('beranda')->with(['success' => 'Pendaftaran mitra berhasil!'])->withFragment('mitra');;
    }

    public function jumlahmitra(){
        $mitra = Mitra::get();
        $jumlahmitra = Mitra::count();
        
        return view('beranda', [
            'jumlahmitra' => $jumlahmitra
        ]);
        

}

}
