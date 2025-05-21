<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    /**
     * Menampilkan form laporan (GET /report)
     */
    public function create()
    {
        return view('report');
    }

    /**
     * Menyimpan laporan baru (POST /report)
     * Menggunakan passingData sebagai pengganti store
     */
    public function passingData(Request $request)
    {
        
        if (!Auth::check()) {
            return redirect()->route('login')
                   ->with('error', 'Anda harus login terlebih dahulu untuk mengirim laporan');
        }
    
        // Validasi input
        $validatedData = $request->validate([  
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'location' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload gambar
        $imagePath = $request->file('foto')->store('public/reports');

        // Simpan ke database
        Report::create([
            'id_user' => Auth::id(),
            'judul' => $validatedData['judul'],
            'deskripsi' => $validatedData['deskripsi'],
            'location' => $validatedData['location'],
            'foto' => str_replace('public/', '', $imagePath),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('report')
               ->with('succesReport', 'Laporan berhasil dikirim!');
    }
}