<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class ReportController extends Controller
{
    public function create()
    {
        $report = Report::get();
        $blogs = Blogs::all();

        return view('report', [
            'report' => $report,
            'blogs' => $blogs
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
            'lokasi' => 'required|string|max:255',
            'foto' => 'required|file|image|max:2048',
        ]);
        $path = $request->file('foto')->store('report', 'public');
        $validated['foto'] = $path;

        Report::create([
            'judul'=> $request->judul,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'foto' => $path
        ]);

        return redirect()->route('report')
            ->with('successReport', 'Laporan berhasil dikirim!')->withFragment('formlapor');
    }

    public function show($id)
    {
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
        $report = Report::findOrFail($id);
        $report->delete();
        return redirect()->back()->with('success', "Laporan berhasil dihapus");
    }
}
