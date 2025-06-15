<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Gerakan;
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
            'nama_mitra'     => 'required|max:30|unique:mitras,nama_mitra',
            'email_mitra'    => 'required|email|unique:mitras,email_mitra',
            'kontak'        => 'required',
            'kategori_mitra' => 'required',
            'alamat_mitra'   => 'required',
            'medsos'        => 'required',
            'logo'          => 'nullable|image|max:2048',
        ]);

        $file = $request->file('logo');
        $path = $file->store('mitras', 'public');
        $validated['logo'] = $path;

        Mitra::create([
            'id_user'       => Auth::id(),
            'nama_mitra'     => $validatedData['nama_mitra'],
            'kontak'        => $validatedData['kontak'],
            'kategori_mitra' => $validatedData['kategori_mitra'],
            'alamat_mitra'   => $validatedData['alamat_mitra'],
            'email_mitra'    => $validatedData['email_mitra'],
            'medsos'        => $validatedData['medsos'],
            'logo'          => $path,
        ]);

        return redirect()->route('beranda')->with(['success' => 'Pendaftaran mitra berhasil!'])->withFragment('mitra');
    }

    public function jumlahmitra(){
        $mitra = Mitra::get();
        $jumlahmitra = Mitra::count();
        
        return view('beranda', [
            'jumlahmitra' => $jumlahmitra
        ]);
        

}

}