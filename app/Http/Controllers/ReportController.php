<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
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
            'laporan' => 'required|string|max:255',
            'images' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        // Upload gambar
        $imagePath = $request->file('images')->store('public/reports');

        // Simpan ke database
        Report::create([
            'id_user' => Auth::id(),
            'laporan' => $validatedData['laporan'],
            'images' => str_replace('public/', '', $imagePath),
            'description' => $validatedData['description'],
            'location' => $validatedData['location'],
            'date' => $validatedData['date'],
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('report.create')
               ->with('success', 'Laporan berhasil dikirim!');
    }
}