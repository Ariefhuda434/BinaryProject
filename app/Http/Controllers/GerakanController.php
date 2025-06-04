<?php

namespace App\Http\Controllers;

use id;
use App\Models\Mitra;
use App\Models\Gerakan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function show(Gerakan $gerakan)
    {
        $userId = Auth::id();

        $terdaftaruser = DB::table('pivot_users')
            ->where('id_user', $userId)
            ->where('id_gerakan', $gerakan->id)
            ->exists();

        $terdaftarmitra = DB::table('pivot_mitras')
            ->where('id_mitra', $userId)
            ->where('id_gerakan', $gerakan->id)
            ->exists();

        return view('gerakan', compact('gerakan', 'terdaftaruser', 'terdaftarmitra'));
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




    public function pivotUser(Gerakan $gerakan, Request $request)
    {
        $userId = Auth::id();

        if (!$gerakan->users()->where('id_user', $userId)->exists()) {
            $gerakan->users()->attach($userId);
        }

        return redirect()->route('gerakan.show', ['gerakan' => $gerakan->slug])
            ->with('success', 'Berhasil bergabung sebagai Relawan!');
    }

    public function pivotMitra(Gerakan $gerakan, Request $request)
    {
        $userId = Auth::id();

        if (!$gerakan->mitras()->where('id_mitra', $userId)->exists()) {
            $gerakan->mitras()->attach($userId);
        }

        return redirect()->route('gerakan.show', ['gerakan' => $gerakan->slug])
            ->with('success', 'Berhasil bergabung sebagai Mitra!');
    }
}