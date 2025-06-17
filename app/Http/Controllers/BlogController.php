<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Blogs;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blogs::latest()->get();
        return view('gerakan', compact('blogs'));
    }

    // Simpan artikel baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug',
            'deskripsi' => 'required|string',
            'isi_blog' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('foto')->store('blogs', 'public');

        Blogs::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->slug),
            'deskripsi' => $request->deskripsi,
            'isi_blog' => $request->isi_blog  ,
            'foto' => $imagePath,
        ]);

        return back()->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function show($slug)
    {
        $blog = Blogs::where('slug', $slug)->firstOrFail();
        return view('blogdetail', compact('blog'));
    }

    // Update artikel
  public function update(Request $request, $id)
{
    $blog = Blogs::findOrFail($id);

    $request->validate([
        'judul' => 'nullable|string|max:255',
        'slug' => 'nullable|string|max:255|unique:blogs,slug,' . $id,
        'deskripsi' => 'nullable|string',
        'isi_blog' => 'nullable|string',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = [
        'judul' => $request->judul,
        'slug' => Str::slug($request->slug),
        'deskripsi' => $request->deskripsi,
        'isi_blog' => $request->isi_blog,
    ];

    if ($request->hasFile('foto')) {
        $imagePath = $request->file('foto')->store('blogs', 'public');
        $data['foto'] = $imagePath;
    }

    $blog->update($data);

    return back()->with('success', 'Artikel berhasil diperbarui.');
}

    public function destroy($id)
    {
        $blog = Blogs::findOrFail($id);

        if ($blog->foto && Storage::disk('public')->exists($blog->foto)) {
            Storage::disk('public')->delete($blog->foto);
        }

        $blog->delete();

        return back()->with('success', 'Artikel berhasil dihapus.');
    }
}
