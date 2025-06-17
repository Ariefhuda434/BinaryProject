<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Dokumentasi;
use App\Models\Gerakan;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
public function uploadGaleri(Request $request, $slug)
{
    $gerakan = Gerakan::where('slug', $slug)->firstOrFail();

    $jumlahFoto = Dokumentasi::where('id_gerakan', $gerakan->id)->count();
    if ($jumlahFoto >= 5) {
        return back()->with('error', 'Foto gagal diunggah Udah Penuh Galeri');
    }

    $validated = $request->validate([
        'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'deskripsi' => 'required|string|max:255',
    ]);

    $path = $request->file('foto')->store('galeri', 'public');

    Dokumentasi::create([
        'id_gerakan' => $gerakan->id,
        'deskripsi' => $validated['deskripsi'],
        'foto' => $path
    ]);

    return back()->with('success', 'Foto berhasil diunggah');
}

}
