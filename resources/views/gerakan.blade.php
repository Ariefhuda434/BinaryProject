@extends('components.layout')

@section('title', 'Gerakan Peduli Lingkungan')

@section('content')

<div class="flex flex-col items-center w- mx-auto min-h-screen px-6 md:px-20 py-16 bg-white">

    {{-- Judul utama --}}
    <h1 class="text-5xl md:text-6xl font-extrabold font-sans text-gray-900 mb-6 text-center">
        Get Involved with Binary Waste
    </h1>

    {{-- Deskripsi singkat --}}
    <p class="max-w-3xl text-center text-gray-600 text-lg md:text-xl mb-12 leading-relaxed">
        Ikuti berbagai aksi nyata demi lingkungan yang lebih baik.
    </p>

    {{-- Grid event --}}
   <div class="max-w-7xl  mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
    <article class="bg-white rounded-lg p-4 shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:scale-105">
    
    <img 
        src="{{ asset('build/images/awn.jpg') }}" 
        alt="Event Image" 
        class="w-full h-40 object-cover rounded-md mb-3 transition-transform duration-300 hover:scale-105"
    >

    <h3 class="text-xl font-semibold mb-2 text-gray-900">Judul Event</h3>

    <div class="flex items-center mb-2">
        <img src="{{ asset('build/images/icondate.png')}}" alt="Tanggal Icon" class="h-5 mr-2">
        <p class="text-gray-700 leading-relaxed font-medium text-sm">13 April 2025</p>
    </div>

    <div class="flex items-center mb-2">
        <img src="{{ asset('build/images/icontime.png')}}" alt="Waktu Icon" class="h-5 mr-2"> 
        <p class="text-gray-700 leading-relaxed font-medium text-sm">12:00 - 16:00</p>
    </div>

    <div class="flex items-center mb-4">
        <img src="{{ asset('build/images/iconlocation.png')}}" alt="Lokasi Icon" class="h-5 mr-2">
        <p class="text-gray-700 leading-relaxed font-medium text-sm">Jl. Dr. Mansyut No.2A, Kota Gotham</p>
    </div>

    <div class="flex items-center justify-between">
        <a href="">
            <button class="bg-green-600 text-white px-6 py-2 rounded font-semibold hover:bg-green-700 transition text-sm">
                Ikut
            </button>
        </a>

        <a href="#" class="cursor-pointer" aria-label="Share event">
            <img src="{{ asset('build/images/iconshare.png') }}" alt="Share Icon" class="h-5">
        </a>
    </div>

</article>

    </div>
</div>

</div>

<footer class="mt-20 bg-gray-100 w-full flex items-center justify-center py-8">
    <p class="text-gray-600 border-t border-gray-300 pt-4 px-6 text-center text-sm md:text-base">
        © 2025 BinaryWaste. All rights reserved.
    </p>
</footer>

@endsection
