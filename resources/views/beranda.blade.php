   @extends('components.layout')  
   @section('title', 'Beranda')  
   @section('content')

   <section class="relative w-full h-auto pb-20 -mt-40 mb-20 bg-[#5e6f52]">
   <div class="absolute inset-0 h-screen bg-cover bg-top " style="background-image: url('{{ asset('build/images/trashBeranda.jpg') }}')">
      <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent"></div>
   </div>

   <div class="relative z-10 max-w-screen-xl mx-auto px-6 pt-70">
      <div class="flex flex-col lg:flex-row items-start">
         
         
         <div class="w-full lg:w-250 space-y-6">
         <p class="text-4xl font-black font-sans mb-20 text-white">Digital Solution for a Zero-Waste World!</p>

         <h2 class="font-bold font-monospace  text-2xl text-white">Hai, Binarians!</h2>
         <p class="text-xl text-center md:text-start tracking-wide text-white">
            Saatnya kelola sampah dengan cara yang lebih cerdas dan berdampak.
            Setor sampah, kumpulkan poin, dan bantu selamatkan bumi bareng kita di Binary Waste!
         </p>

        <div class="w-full sm:w-auto text-center sm:text-left mt-4">
        <a href="{{ route('register') }}" class="rounded-full inline-block bg-[#57674c] text-white px-6 py-2 rounded hover:bg-[#a3b398] transition duration-800">
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

      <div class="flex justify-center mt-4">
   <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<article class="flex flex-col items-center justify-center h-60 w-80 text-center bg-white text-black rounded-xl shadow-lg drop-shadow-lg drop-shadow-black/50 p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-gray-100">
  <div class="bg-[#ccc14e] p-4 rounded-full mb-4">
    <img src="{{ asset('build/images/suaraWarga.png') }}" alt="suara warga" class="w-10 h-10">
  </div>
  <h2 class="text-xl font-bold text-gray-800 mb-2">Suara Warga</h2>
  <p class="text-sm text-gray-600 leading-snug">
    Tempat bagi masyarakat untuk menyuarakan aspirasi dan keluhan demi lingkungan yang lebih baik.
  </p>
</article>
<article class="flex flex-col items-center justify-center h-60 w-80 text-center bg-white text-black rounded-xl shadow-lg p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-gray-100">
  <div class="bg-[#ccc14e] p-4 rounded-full mb-4">
    <img src="{{ asset('build/images/gerakan.png') }}" alt="sampah" class="w-10 h-10">
  </div>
  <h2 class="text-xl font-bold text-gray-800 mb-2">Gerakan Peduli Sampah</h2>
  <p class="text-sm text-gray-600 leading-snug">
  Ajak masyarakat untuk bersama menjaga kebersihan lewat aksi nyata dan kolaborasi.
  </p> 
</p>
</article>

<button id="tombolDitekan">

   <article class="flex flex-col items-center justify-center h-60 w-80 text-center bg-white text-black rounded-xl shadow-lg p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-gray-100">
      <div class="bg-[#ccc14e] p-4 rounded-full mb-4">
         <img src="{{ asset('build/images/hero.png') }}" alt="hero" class="w-10 h-10">
      </div>
      <h2 class="text-xl font-bold text-gray-800 mb-2">Pahlawan Lingkungan</h2>
      <p class="text-sm text-gray-600 leading-snug">
         Apresiasi untuk individu dan komunitas yang konsisten menjaga dan melestarikan lingkungan.
      </p>  
   </p>
</article>

</button>
   </div>
   </div>

   </div>
   <section>
 <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto mt-20 px-4">
    <div class="p-6 flex flex-col items-center justify-center text-center" >
        <p id="numberCount" data-max="300" class="text-4xl md:text-5xl font-extrabold text-green-600">300</p>
        <p class="text-sm md:text-lg text-white mt-2">Jumlah Mitra Aktif</p>
    </div>

    <div class="p-6 flex flex-col items-center justify-center text-center">
        <p id="numberCount1" data-max="280" class="text-4xl md:text-5xl font-extrabold text-green-600">280</p>
        <p class="text-sm md:text-lg text-white mt-2">Pengguna Terdaftar</p>
    </div>

    <div class="p-6 flex flex-col items-center justify-center text-center">
        <p id="numberCount2" data-max="920" class="text-4xl md:text-5xl font-extrabold text-green-600">920</p>
        <p class="text-sm md:text-lg text-white mt-2">Jumlah Gol Ronaldo</p>
    </div>

    <div class="p-6 flex flex-col items-center justify-center text-center">
        <p id="numberCount3" data-max="120" class="text-4xl md:text-5xl font-extrabold text-green-600">120</p>
        <p class="text-sm md:text-lg text-white mt-2">Proyek Lingkungan</p>
    </div>
</div>


   </section>
   </section>


   
<section class="bg-gradient-to-r from-gray-200 -mt-20 via-white to-gray-200 py-20 px-6 md:px-20">
  <div class="flex flex-col md:flex-row items-center gap-10" data-aos="zoom-out-up">
    
    <div class="md:w-1/2">
      <img src="{{ asset('build/images/Binary.svg') }}" alt="Arief Huda" class="w-300 mx-auto md:mx-0">
    </div>

    <div class="md:w-1/2 text-center md:text-left">
      <h2 class="text-4xl font-bold text-green-700 mb-4 leading-tight">
        Bersama Kita Bisa<br><span class="text-green-500">Mengubah Lingkungan</span>
      </h2>
      <p class="text-gray-700 text-lg mb-6">
        “Kami percaya bahwa perubahan besar dimulai dari langkah kecil. <br class="hidden md:block">
        <span class="text-green-600 font-semibold">Binary Waste</span> hadir untuk menghubungkan <span class="text-green-600 font-semibold">teknologi</span>, <span class="text-green-600 font-semibold">komunitas</span>, dan <span class="text-green-600 font-semibold">kesadaran lingkungan</span> demi masa depan Indonesia yang lebih baik.”
      </p>
      <a href="/mitra" class="inline-block bg-green-600 text-white px-6 py-3 rounded-full shadow-md hover:bg-green-700 transition">
        Gabung Sebagai Mitra
      </a>

      <div class="mt-6 flex gap-7">
        <img src="{{ asset('build/images/usu.png') }}" alt="Tanda Tangan Arief" class="w-20 h-20 mx-auto md:mx-0">
        <img src="{{ asset('build/images/kfc.png') }}" alt="Tanda Tangan Arief" class="w-20 h-20 mx-auto md:mx-0">
        <img src="{{ asset('build/images/ferrari.png') }}" alt="Tanda Tangan Arief" class="w-18 h-20 mx-auto md:mx-0">
      
      </div>
    </div>
  </div>
</section>




   <footer class="bg-blue-200 w-full  flex items-center justify-center py-20 mt-20">
   <p class="text-white border-t border-white pt-4 px-6">© 2025 BinaryWaste. All rights reserved.</p>
   </footer>

   <script>

    let bogem = true;
    const scrollDulu = window.scrollY;
   
    function kiyomasa(idnya){

      window.addEventListener('scroll',()=>{
        const scrollSekarang = window.scrollY;
        
        
          if( bogem && (scrollSekarang - scrollDulu > 100)){
            
            let a = 0;
            const b = document.getElementById(idnya);
            const max = parseInt(b.dataset.max);
            
            const interval = setInterval(() => {
              a++;
              b.innerHTML = String(a).padStart(3, '0');
              
        if(a >= max){
          clearInterval(interval);
          bogem = false;
        }
      }, 3);
      
      scrollDulu = scrollSekarang;
      }
    });
  }
  kiyomasa('numberCount');
  kiyomasa('numberCount1');
  kiyomasa('numberCount2');
  kiyomasa('numberCount3');
    </script>
    @endsection
    