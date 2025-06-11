<?php

namespace App\Http\Controllers;

use id;
use App\Models\Mitra;
use App\Models\Gerakan;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        'foto' => 'required|file|max:2048',
    ]);

    // Cuma satu kali akses file
    $file = $request->file('foto');
    $path = $file->store('gerakan', 'public'); 
    $validated['foto'] = $path;

    Gerakan::create($validated);

    return redirect()->back()->with('success', 'Event baru berhasil ditambahkan.');
}


    /**
     * Store a newly created resource in storage.
     */
    public function show(Gerakan $gerakan)
    {
        $userId = Auth::id();
        $idmitra = Mitra::find($userId);
        $terdaftaruser = DB::table('pivot_users')
            ->where('id_user', $userId)
            ->where('id_gerakan', $gerakan->id)
            ->exists();

        $terdaftarmitra = DB::table('pivot_mitras')
            ->where('id_mitra', $idmitra)
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
    public function edit(Gerakan $gerakan,Request $request,$id)
    {
    $gerakan = Gerakan::findOrFail($id);

         $validated = $request->validate([
        'judul' => 'nullable|string|max:255',
        'slug' => 'nullable|string|max:255|unique:blogs,slug,' . $id,
        'deskripsi' => 'nullable|string',
        'lokasi' => 'nullable|string',
        'tanggal' => 'nullable|string',
        'periode' => 'nullable|string',
    ]);

    $data =[
        'judul' => $request->judul,
        'slug' => Str::slug($request->slug),
        'deskripsi' => $request->deskripsi,
        'lokasi' => $request->lokasi,
        'tanggal' => $request->tanggal,
        'periode' => $request->periode,
    ];
        $gerakan->update($data);
    return back()->with('success', 'Gerakan berhasil diperbarui.');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gerakan $gerakan)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gerakan $gerakan, $id)
    {
       $gerakan = Gerakan::findOrFail($id);
       
       if($gerakan->foto && Storage::disk('public')->exists($gerakan->foto)){
        Storage::disk('public')->delete($gerakan->foto);
       }
       $gerakan->delete();
       
       return back()->with('success', 'Blog berhasil dihapus.');
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