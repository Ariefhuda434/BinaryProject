   @extends('components.layout')  
   @section('title', 'Beranda')  
   @section('content')

   {{-- Hero Section + 3 Kotak --}}
   <section class="relative w-full h-auto pb-20 -mt-40 mb-20">
   <div class="absolute inset-0 h-screen bg-cover bg-bottom" style="background-image: url('{{ asset('build/images/test.jpg') }}')">
      <div class="absolute inset-0 bg-gradient-to-b from-black/80 to-transparent"></div>
   </div>

   <div class="relative z-10 max-w-screen-xl mx-auto px-6 pt-70">
      <div class="flex flex-col lg:flex-row items-start">
         
         
         <div class="w-full lg:w-1/2 space-y-6">
         <div class="flex items-center">
            <img class="h-24 mr-4" src="{{ asset('build/images/logo.png') }}" alt="Logo">
            <div>
               <h1 class="text-6xl font-black text-white">BINARY WASTE</h1>
               <p class="text-2xl font-bold mt-1 text-white">Digital Solution for a Zero-Waste World!</p>
            </div>
         </div>
         <h2 class="font-bold text-2xl text-white">Hai, Binarians!</h2>
         <p class="text-xl tracking-wide text-justify text-white">
            Saatnya kelola sampah dengan cara yang lebih cerdas dan berdampak.
            Setor sampah, kumpulkan poin, dan bantu selamatkan bumi bareng kita di Binary Waste!
         </p>



         <div class="flex space-x-4">
            <a href="{{ route('register') }}"
               class="bg-[#b2a733]  rounded-lg px-6 py-2 text-white font-light transition-all duration-300 ease-in-out 
               hover:scale-105 hover:bg-[#b2a733] active:scale-95 
               focus:ring-2 focus:ring-[#b2a733] focus:ring-opacity-50">
               Daftar Sekarang
            </a>
         </div>
         </div>

         {{-- Right: Optional Image --}}
         <div class="w-full lg:w-1/2 mt-10 lg:mt-0 flex justify-center">
         {{-- Uncomment jika ingin pakai gambar di kanan --}}
         {{-- <img src="{{ asset('build/images/contentberanda.png') }}" alt="Foto Beranda" class="h-[28rem] object-contain"> --}}
         </div>
      </div>

      <div class="flex justify-center mt-10">
   <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

<article class="flex flex-col items-center justify-center h-60 w-80 text-center bg-white text-black rounded-xl shadow-lg p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-gray-200">
  <div class="bg-[#ccc14e] p-4 rounded-full mb-4">
    <img src="{{ asset('build/images/suaraWarga.png') }}" alt="suara warga" class="w-10 h-10">
  </div>
  <h2 class="text-xl font-bold text-gray-800 mb-2">Suara Warga</h2>
  <p class="text-sm text-gray-600 leading-snug">
    Tempat bagi masyarakat untuk menyuarakan aspirasi dan keluhan demi lingkungan yang lebih baik.
  </p>
</article>
<article class="flex flex-col items-center justify-center h-60 w-80 text-center bg-white text-black rounded-xl shadow-lg p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-gray-200">
  <div class="bg-[#ccc14e] p-4 rounded-full mb-4">
    <img src="{{ asset('build/images/gerakan.png') }}" alt="sampah" class="w-10 h-10">
  </div>
  <h2 class="text-xl font-bold text-gray-800 mb-2">Gerakan Peduli Sampah</h2>
  <p class="text-sm text-gray-600 leading-snug">
  Ajak masyarakat untuk bersama menjaga kebersihan lewat aksi nyata dan kolaborasi.
  </p> 
</p>
</article>

<article class="flex flex-col items-center justify-center h-60 w-80 text-center bg-white text-black rounded-xl shadow-lg p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-gray-200">
  <div class="bg-[#ccc14e] p-4 rounded-full mb-4">
    <img src="{{ asset('build/images/hero.png') }}" alt="hero" class="w-10 h-10">
  </div>
  <h2 class="text-xl font-bold text-gray-800 mb-2">Pahlawan Lingkungan</h2>
  <p class="text-sm text-gray-600 leading-snug">
 Apresiasi untuk individu dan komunitas yang konsisten menjaga dan melestarikan lingkungan.
  </p>  
</p>
</article>
   </div>
   </div>

   </div>
   </section>

   {{-- Footer --}}
   <footer class="bg-[#5e6f52] w-full  flex items-center justify-center py-20 mt-20">
   <p class="text-white border-t border-white pt-4 px-6">© 2025 BinaryWaste. All rights reserved.</p>
   </footer>

   @endsection
