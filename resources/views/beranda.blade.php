@extends('components.layout')  
@section('title', 'Beranda')  
@section('content')
<div class="h-30 ml-11 mt-8 w-150 flex font-sans ">
   <img class="h-30 mr-6" src="{{ asset('build/images/logo.png') }}" alt="Logo">
   <div class="-ml-5">
       <div class="text-6xl font-black mt-5">
           BINARY WASTE
       </div>
       <div class="text-2xl -mt-1 font-bold">
           Digital Solution for a Zero-Waste World!
       </div>
   </div>
</div>
<div class="w-200 ml-14 mt-4">
   <h2 class="font-bold text-2xl mb-4">Hai, Binarians!</h2>
   <div class="font-sans text-xl tracking-wide">
      <p>Saatnya kelola sampah dengan cara yang lebih cerdas
         dan <br>berdampak.Setor sampah,kumpulkan poin dan bantu <br>
         selamatkan bumi bareng kita di binary waste!
      </p>
      <button class="bg-[#5e6f52] rounded-full m-2 mt-4 px-5 py-2 text-white">
         Selengkapnya
      </button>
   </div>
   <div class="tracking-wide mt-8">
      <p class="font-bold text-xl">Mari bergabung dan jadi pahlawan #HijauinBumi <button class="bg-[#5e6f52] rounded-full m-2 px-5 py-2 text-white">Daftar sekarang</button></p>
   </div>
</div>
<div
class="h-screen">
</div>
<footer class="h-100 bg-[#5e6f52] flex items-center justify-center pt-50" >
   <p class="border-t-1 pt-5 px-100 border-white text-white">© 2025 BinaryWaste. All rights reserved.</p>
</footer>
@endsection
