<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'slug' => 'required|string|unique:blogs',
        'deskripsi' => 'required|string',
        'foto' => 'nullable|image|max:2048',
        'isiBlog'=>'required|string' 
    ]);

    if ($request->hasFile('foto')) {
        $validated['foto'] = $request->file('foto')->store('fotos', 'public');
    }

    Blogs::create($validated);

    return redirect()->back()->with('success', 'Blog baru berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     */
    public function show($id) {
    $blog = Blogs::findOrFail($id);
    return view('blog.show', compact('blogs'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blogs $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blogs $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blogs $blog)
    {
        //
    }
}
