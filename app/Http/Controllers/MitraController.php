<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MitraController extends Controller
{
    public function mitraGanteng(Request $request){
   
        if (!Auth::check()) {
        return redirect()->route('login')
               ->with('error', 'Anda harus login terlebih dahulu untuk menjadi mitra');
    }
    $udhJadiMitra = Mitra::where('id_user', Auth::id())->first();
    if ($udhJadiMitra) {
        return redirect()->route('beranda')->with('error', 'Anda sudah terdaftar sebagai mitra.');
    }
    
    $validatedData = $request->validate([
        'namaMitra'     => 'required|max:30|unique:mitra,namaMitra',
        'tujuan'        => 'required',
        'kategoriMitra' => 'required',
        'alamatMitra'   => 'required',
        'emailMitra'    => 'required|email|unique:mitra,emailMitra',
        'medsos'        => 'required',
    ]);

    Mitra::create([
        'id_user'       => Auth::id(),
        'namaMitra'     => $validatedData['namaMitra'],
        'tujuan'        => $validatedData['tujuan'],
        'kategoriMitra' => $validatedData['kategoriMitra'],
        'alamatMitra'   => $validatedData['alamatMitra'],
        'emailMitra'    => $validatedData['emailMitra'],
        'medsos'        => $validatedData['medsos'],
    ]);

    return redirect()->route('beranda')->with('success', 'Pendaftaran mitra berhasil!');
}

}
