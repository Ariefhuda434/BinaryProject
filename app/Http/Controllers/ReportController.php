<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function create() {
        $report = Report::get(); 
        return view('report', [
            'report' => $report
        ]);
    }

    public function passingData(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')
                   ->with('error', 'Anda harus login terlebih dahulu untuk mengirim laporan');
        }

        $validatedData = $request->validate([  
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'location' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('foto')->store('public/reports');

        Report::create([
            'id_user' => Auth::id(),
            'judul' => $validatedData['judul'],
            'description' => $validatedData['deskripsi'],
            'location' => $validatedData['location'],
            'foto' => str_replace('public/', '', $imagePath),
        ]);

        return redirect()->route('report')
               ->with('successReport', 'Laporan berhasil dikirim!');
    }

    public function show($id) {
        $data = Report::findOrFail($id);

        return view('report', [
            'report' => $data
        ]);
    }
}
