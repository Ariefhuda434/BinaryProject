@extends('components.layout')  
@section('title', 'Beranda')  
@section('content')

{{-- Tambahkan padding-top untuk menghindari navbar fixed --}}

<div class="pt-24 px-14 font-sans"> 

   {{-- Header section --}}
   <div class="flex items-start">
      {{-- Kiri: Logo dan Judul --}}
      <div class="w-1/2">
         <div class="flex items-center mb-4">
            <img class="h-24 mr-4" src="{{ asset('build/images/logo.png') }}" alt="Logo">
            <div>
               <h1 class="text-6xl font-black">BINARY WASTE</h1>
               <p class="text-2xl font-bold mt-1">Digital Solution for a Zero-Waste World!</p>
            </div>
         </div>
         <h2 class="font-bold text-2xl mb-4">Hai, Binarians!</h2>
         <p class="text-xl tracking-wide mb-6 text-first">
            Saatnya kelola sampah dengan cara yang lebih cerdas dan berdampak.<br>
            Setor sampah, kumpulkan poin, dan bantu selamatkan bumi bareng kita di Binary Waste!
         </p>
         <div class="flex space-x-4">
            <button class="bg-[#5e6f52] rounded-full px-6 py-2 text-white">Selengkapnya</button>
            <details> 
               <summary>
               Lihat spesifikasi   
               </summary>
               borup mobil keren mantul nich
            </details>
            <a href="{{ route('register') }}"
               class="bg-[#5e6f52] rounded-full px-6 py-2 text-white transition-all duration-300 ease-in-out 
               hover:scale-105 hover:bg-[#4a5a40] active:scale-95 
               focus:ring-2 focus:ring-[#5e6f52] focus:ring-opacity-50">
               Daftar Sekarang
            </a>
         </div>
      </div>

      {{-- Kanan: Gambar --}}
      <div class="w-1/2 flex justify-end">
         <img src="{{ asset('build/images/contentberanda.png') }}" alt="Foto Beranda" class="h-[28rem] object-contain">
      </div>
   </div>
</div>

<footer class="mt-70 p-30 bg-[#5e6f52] flex items-center justify-center py-20">
   <p class="text-white border-t border-white pt-4 px-6">© 2025 BinaryWaste. All rights reserved.</p>
</footer>

{{-- <audio src="{{ asset('build/audios/djterbaru.mp3') }}" autoplay></audio> --}}

@endsection
