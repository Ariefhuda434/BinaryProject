@extends('components.layout')

@section('title', 'Gerakan')

@section('content')

<x-header />

<div class="mx-auto mt-20 px-6 md:px-20">

    <div class="text-center mb-12">
        <h1 class="text-3xl md:text-5xl font-bold text-[#5e6f52]">Gerakan Peduli Sampah</h1>
        <p class="text-gray-600 mt-4">Ikuti berbagai aksi nyata demi lingkungan yang lebih baik.</p>
    </div>

    {{-- Grid Utama: Artikel + Form --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- Bagian Artikel (2 kolom) --}}
        <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6 pr-2">
            @foreach ($blogs as $blog)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <img src="{{ asset('storage/' . $blog['foto']) }}" alt="Event" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h2 class="text-xl font-semibold mb-2 text-[#5e6f52]">{{ $blog['judul'] }}</h2>
                        <p class="text-gray-600 text-sm mb-5">{{ $blog['deskripsi'] }}</p>
                        <a href="/blogs/{{ $blog['slug'] }}">
                            <button class="mt-4 bg-[#5e6f52] text-white px-4 py-2 rounded-full text-sm hover:bg-[#4a5a40] transition">
                                Selengkapnya
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Form Admin (1 kolom) --}}
        
    </div>

</div>

@if (auth()->check() && auth()->user()->role == 'admin')
    <div class="bg-white rounded-lg shadow-md p-6 border-2 w-200 mx-auto mt-10 border-dashed border-gray-300 h-fit lg:h-full ">
        <h2 class="text-2xl font-semibold mb-4 text-gray-700">Tambah Artikel Baru</h2>

         @if(session('success'))
                <div class="bg-green-100 text-green-700 p-2 rounded mb-3">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 text-red-700 p-2 rounded mb-3">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div class="flex flex-col lg:flex-row gap-4">
                {{-- Kolom Kiri --}}
                <div class="w-full lg:w-1/3 space-y-4">
                    <div>
                        <label for="judul" class="block text-gray-600 font-medium mb-1">Judul</label>
                        <input type="text" id="judul" name="judul" placeholder="Masukkan judul artikel"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required />
                    </div>

                    <div>
                        <label for="slug" class="block text-gray-600 font-medium mb-1">Slug</label>
                        <input type="text" id="slug" name="slug" placeholder="Masukkan slug (unik)"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required />
                    </div>

                    <div>
                        <label for="deskripsi" class="block text-gray-600 font-medium mb-1">Deskripsi</label>
                        <input type="text" id="deskripsi" name="deskripsi"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Deskripsi" required />
                    </div>

                    <div>
                        <label for="foto" class="block text-gray-600  border border-gray-300 px-3 py-2  rounded-md font-medium mb-1">Foto</label>
                        <input type="file" id="foto" name="foto" accept="image/*"
                            class="w-full text-gray-600" />
                    </div>
                </div>

                {{-- Kolom Kanan --}}
                <div class="w-full lg:w-2/3">
                    <label for="isi" class="block text-gray-600 font-medium mb-1">Isi Artikel</label>
                    <textarea id="isiBlog" name="isiBlog" rows="12" placeholder="Tulis isi artikel di sini..."
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required></textarea>
                </div>
            </div>

            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md transition duration-200">
                Submit
            </button>
        </form>
    </div>
@endif
<footer class="bg-[#5e6f52] w-full text-center text-white py-10 mt-20">
    <p class="border-t border-white pt-4">© 2025 BinaryWaste. All rights reserved.</p>
</footer>

@endsection
