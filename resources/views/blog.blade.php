@extends('components.layout')

@section('title', 'Gerakan')

@section('content')

<x-header />

<div class="mx-auto mt-20 px-6 md:px-20">
    <div class="text-center mb-5">
        <h1 class="text-3xl md:text-5xl font-bold text-[#5e6f52]">{{$blog['judul']}}</h1>
        <p class="text-gray-600 mt-4">{{$blog['deskripsi']}}</p>
        <p class="text-gray-400"><p class="text-gray-400">{{ $blog->created_at->format('d M Y') }}</p></p>
    </div>    
</div>
<div class="w-250 mx-auto md:h-80 h-50 flex flex-col ">
    <img src="{{ asset('storage/' . $blog['foto']) }}" alt="" class="object-cover object-center overflow-hidden">
</div>
<div class="max-w-5xl mx-auto px-4 py-8">
    <div class="prose prose-lg prose-neutral text-justify text-l justify-center max-w-none">
        {!! $blog['isiBlog'] !!}
    </div>
</div>

<footer class="bg-[#5e6f52] w-full text-center text-white py-10 mt-50">
    <p class="border-t border-white pt-4">© 2025 BinaryWaste. All rights reserved.</p>
</footer>

@endsection
