<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Gerakan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GerakanController extends Controller
{
    // Tampilkan semua gerakan (opsional, tergantung kebutuhan)
    public function index()
    {
        $gerakans = Gerakan::all();
        return view('gerakan.index', compact('gerakans'));
    }

    // Menyimpan gerakan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'slug' => 'required|string|unique:gerakans',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string',
            'tanggal' => 'required|string',
            'periode' => 'required|string',
            'foto' => 'required|file|image|max:2048',
            'status' => 'string',
        ]);

        $file = $request->file('foto');
        $path = $file->store('gerakan', 'public');
        $validated['foto'] = $path;

        Gerakan::create($validated);

        return redirect()->back()->with('success', 'Event baru berhasil ditambahkan.');
    }

    // Tampilkan detail gerakan + status keikutsertaan
    public function show(Gerakan $gerakan)
    {
        $userId = Auth::id();
        $mitra = Mitra::where('id_user', $userId)->first();

        $terdaftaruser = $gerakan->users()->where('id_user', $userId)->exists();
        $terdaftarmitra = $mitra ? $gerakan->mitras()->where('id_mitra', $mitra->id)->exists() : false;
        $jumlahTerdaftarUser = $gerakan->users()->count();

        return view('gerakan', compact('gerakan', 'terdaftaruser', 'terdaftarmitra', 'jumlahTerdaftarUser'));
    }

    // Update gerakan
    public function updateStatus(Gerakan $gerakan, Request $request, $id)
    {
        $gerakan = Gerakan::findOrFail($id);

        $validated = $request->validate([
           'status' => 'string',
        ]);

        $data = [
            'status' => $request->status,
        ];

        $gerakan->update($data);

        return back()->with('success', 'status berhasil diperbarui.');
    }

    public function update(Gerakan $gerakan, Request $request, $id)
    {
        $gerakan = Gerakan::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255|unique:gerakans,slug,' . $id,
            'deskripsi' => 'nullable|string',
            'lokasi' => 'nullable|string',
            'tanggal' => 'nullable|string',
            'periode' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
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

    // Hapus gerakan dan file gambar
    public function destroy($id)
    {
        $gerakan = Gerakan::findOrFail($id);

        if ($gerakan->foto && Storage::disk('public')->exists($gerakan->foto)) {
            Storage::disk('public')->delete($gerakan->foto);
        }

        $gerakan->delete();

        return back()->with('success', 'Gerakan berhasil dihapus.');
    }

    // Hitung total gerakan
    public function jumlahgerakan()
    {
        $jumlahgerakan = Gerakan::count();

        return view('beranda', [
            'jumlahgerakan' => $jumlahgerakan
        ]);
    }

    // Hapus relawan dari pivot_users
    public function destroyuser(Gerakan $gerakan)
    {
        $userId = Auth::id();

        if ($gerakan->users()->where('id_user', $userId)->exists()) {
            $gerakan->users()->detach($userId);
        }

        return redirect()->route('gerakan.show', ['gerakan' => $gerakan->slug])
                         ->with('success', 'Berhasil batal bergabung sebagai Relawan!');
    }

    // Hapus mitra dari pivot_mitras
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

    // Tambah relawan ke pivot_users
    public function pivotUser(Gerakan $gerakan, Request $request)
    {
        $userId = Auth::id();

        if (!$gerakan->users()->where('id_user', $userId)->exists()) {
            $gerakan->users()->attach($userId);
        }

        return redirect()->route('gerakan.show', ['gerakan' => $gerakan->slug])
            ->with('success', 'Berhasil bergabung sebagai Relawan!');
    }

    // Tambah mitra ke pivot_mitras
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
