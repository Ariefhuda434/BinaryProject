<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Gerakan;
use App\Models\Dokumentasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GerakanController extends Controller
{
    /**************************************************
     *                 INDEX & CREATE
     **************************************************/

    public function index()
    {
        $gerakans = Gerakan::all();
        return view('gerakan.index', compact('gerakans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'     => 'required|string|max:255',
            'slug'      => 'required|string|unique:gerakans',
            'deskripsi' => 'required|string',
            'lokasi'    => 'required|string',
            'tanggal'   => 'required|string',
            'periode'   => 'required|string',
            'foto'      => 'required|file|image|max:2048',
            'status'    => 'string',
        ]);

        $path = $request->file('foto')->store('gerakan', 'public');
        $validated['foto'] = $path;

        Gerakan::create($validated);

        return redirect()->back()->with('success', 'Event baru berhasil ditambahkan.');
    }

    /**************************************************
     *                SHOW (DETAIL)
     **************************************************/

    public function show(Gerakan $gerakan)
    {
        $userId = Auth::id();
        $mitra = Mitra::where('id_user', $userId)->first();

        $dokumentasi = Dokumentasi::where('id_gerakan', $gerakan->id)->get();
        $mitras = Mitra::all();

        $terdaftaruser = $gerakan->users()->where('id_user', $userId)->exists();
        $terdaftarmitra = $mitra ? $gerakan->mitras()->where('id_mitra', $mitra->id)->exists() : false;
        $jumlahTerdaftarUser = $gerakan->users()->count();
    

        return view('gerakan', compact(
            'gerakan',
            'terdaftaruser',
            'terdaftarmitra',
            'jumlahTerdaftarUser',
            'dokumentasi',
            'mitras',
         
        ));
    }
    
    public function history()
{
    $userId = Auth::id();

    $historyGerakans = Gerakan::whereHas('users', function ($query) use ($userId) {
        $query->where('id_user', $userId);
    })->where('status', 'selesai')->get();

    return view('beranda', compact('historyGerakans'));
}

    /**************************************************
     *               UPDATE STATUS & DATA
     **************************************************/

    public function updateStatus(Gerakan $gerakan, Request $request, $id)
    {
        $gerakan = Gerakan::findOrFail($id);

        $request->validate([
            'status' => 'string',
        ]);

        $gerakan->update([
            'status' => $request->status,
        ]);

        return back()->with('success', 'Status berhasil diperbarui.');
    }

    public function update(Gerakan $gerakan, Request $request, $id)
    {
        $gerakan = Gerakan::findOrFail($id);

        $validated = $request->validate([
            'judul'     => 'nullable|string|max:255',
            'slug'      => 'nullable|string|max:255|unique:gerakans,slug,' . $id,
            'deskripsi' => 'nullable|string',
            'lokasi'    => 'nullable|string',
            'tanggal'   => 'nullable|string',
            'periode'   => 'nullable|string',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'judul'     => $request->judul,
            'slug'      => Str::slug($request->slug),
            'deskripsi' => $request->deskripsi,
            'lokasi'    => $request->lokasi,
            'tanggal'   => $request->tanggal,
            'periode'   => $request->periode,
        ];

        $gerakan->update($data);

        return back()->with('success', 'Gerakan berhasil diperbarui.');
    }

    /**************************************************
     *                    DELETE
     **************************************************/

    public function destroy($id)
    {
        $gerakan = Gerakan::findOrFail($id);

        if ($gerakan->foto && Storage::disk('public')->exists($gerakan->foto)) {
            Storage::disk('public')->delete($gerakan->foto);
        }

        $gerakan->delete();

        return back()->with('success', 'Gerakan berhasil dihapus.');
    }

    /**************************************************
     *         JOIN / CANCEL RELAWAN & MITRA
     **************************************************/

    public function destroyuser(Gerakan $gerakan)
    {
        $userId = Auth::id();

        if ($gerakan->users()->where('id_user', $userId)->exists()) {
            $gerakan->users()->detach($userId);
        }

        return redirect()->route('gerakan.show', ['gerakan' => $gerakan->slug])
                         ->with('success', 'Berhasil batal bergabung sebagai Relawan!');
    }

    public function destroymitra(Gerakan $gerakan)
    {
        $userId = Auth::id();
        $mitra = Mitra::where('id_user', $userId)->first();

        if ($mitra && $gerakan->mitras()->where('id_mitra', $mitra->id)->exists()) {
            $gerakan->mitras()->detach($mitra->id);
        }

        return redirect()->route('gerakan.show', ['gerakan' => $gerakan->slug])
                         ->with('success', 'Berhasil batal bergabung sebagai Mitra!');
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userId = Auth::id();
        $mitra = Mitra::where('id_user', $userId)->first();

        if (!$mitra) {
            return redirect()->back()->with('error', 'Anda belum memiliki akun Mitra. Silakan daftar sebagai Mitra terlebih dahulu.');
        }

        if (!$gerakan->mitras()->where('id_mitra', $mitra->id)->exists()) {
            $gerakan->mitras()->attach($mitra->id);
        }

        return redirect()->route('gerakan.show', ['gerakan' => $gerakan->slug])
                         ->with('success', 'Berhasil bergabung sebagai Mitra!');
    }
}
