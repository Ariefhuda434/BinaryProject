@extends('components.layout')

@section('title', 'Gerakan')

@section('content')

<x-header />

<div class="mx-auto mt-20 px-6 md:px-20">
    <div class="text-center mb-12">
        <h1 class="text-3xl md:text-5xl font-bold text-[#5e6f52]">Gerakan Peduli Sampah</h1>
        <p class="text-gray-600 mt-4">Ikuti berbagai aksi nyata demi lingkungan yang lebih baik.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($blogs as $blog)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="{{ asset('build/images/awn.jpg') }}" alt="Event" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h2 class="text-xl font-semibold mb-2">{{ $blog['judul'] }}</h2>
                    <p class="text-gray-600 text-sm mb-5">{{ $blog['deskripsi'] }}</p>

                    <div class="flex items-center mb-2">
                        <img src="{{ asset('build/images/icondate.png') }}" class="h-6 mr-2" alt="Date Icon">
                        <p class="text-gray-500 text-sm mr-1 font-medium">Tanggal:</p>
                        <p class="text-gray-600 text-sm">{{ $blog['tanggal'] }}</p>
                    </div>

                    <div class="flex items-center mb-2">
                        <img src="{{ asset('build/images/icontime.png') }}" class="h-6 mr-2" alt="Time Icon">
                        <p class="text-gray-500 text-sm mr-1 font-medium">Waktu:</p>
                        <p class="text-gray-600 text-sm">{{ $blog['waktu'] }}</p>
                    </div>

                    <div class="flex items-center mb-4">
                        <img src="{{ asset('build/images/iconlocation.png') }}" class="h-6 mr-2" alt="Location Icon">
                        <p class="text-gray-500 text-sm mr-1 font-medium">Lokasi:</p>
                        <p class="text-gray-600 text-sm">{{ $blog['lokasi'] }}</p>
                    </div>

                    <a href="/blogs/{{ $blog['slug'] }}">
                        <button class="mt-4 bg-[#5e6f52] text-white px-4 py-2 rounded-full text-sm hover:bg-[#4a5a40] transition">
                            Gabung
                        </button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<footer class="bg-[#5e6f52] w-full text-center text-white py-10 mt-20">
    <p class="border-t border-white pt-4">© 2025 BinaryWaste. All rights reserved.</p>
</footer>

@endsection
