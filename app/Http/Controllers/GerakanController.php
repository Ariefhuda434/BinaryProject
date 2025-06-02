<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Gerakan;
use App\Models\PivotUser;
use App\Models\PivotMitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GerakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string',
            'tanggal' => 'required|string',
            'periode' => 'required|string',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('fotos', 'public');
        }

        Gerakan::create($validated);

        return redirect()->back()->with('success', 'event baru berhasil ditambahkan.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function show($id)
    {
        $gerakan = Gerakan::findOrFail($id);
        return view('gerakan.show', compact('gerakan'));
    }


    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gerakan $gerakan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gerakan $gerakan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gerakan $gerakan)
    {
        //
    }

    public function jumlahgerakan()
    {
        $jumlahgerakan = Gerakan::count();

        return view('beranda', [
            'jumlahgerakan' => $jumlahgerakan
        ]);
    }
}
