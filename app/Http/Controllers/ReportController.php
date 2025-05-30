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
            'deskripsi' => $validatedData['deskripsi'],
            'location' => $validatedData['location'],
            'foto' => str_replace('public/', '', $imagePath),
        ]);

        return redirect()->route('report')
               ->with('successReport', 'Laporan berhasil dikirim!')->withFragment('formlapor');
    }

    public function show($id) {
        $data = Report::findOrFail($id);

        return view('report', [
            'report' => $data
        ]);
    }

    public function edit(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:Menunggu,Diterima,Diproses',
    ]);

    $report = Report::findOrFail($id);
    $report->status = $request->status;
    $report->save();

    return redirect()->back()->with('success', 'Status berhasil diperbarui!')->withFragment('formlapor');
}

public function destroy(Request $request, $id)
{
    Report::find($id)->delete();
    return redirect()->back()->with('success', "Laporan berhasil dihapus");
}

public function jumlahlaporan(){
    $report = Report::get();
    $jumlahlaporan = Report::count();
    
    return view('beranda', [
        'jumlahlaporan' => $jumlahlaporan
    ]);

}

}