<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            'foto' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $file = $request->file('foto');
        $path = $file->store('report', 'public');
        $validated['foto'] = $path;

        Report::create($validatedData);

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
        Report::find($id)->delete();
        return redirect()->back()->with('success', "Laporan berhasil dihapus");
    }
}
