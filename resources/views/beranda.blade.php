@extends('components.layout')  
@section('title', 'Beranda')  
@section('content')
<section class="relative w-full h-auto pb-2  -mt-40 mb-8 bg-[#5e6f52]">
  <div class="absolute inset-0 md:h-screen h-[50rem] bg-cover opacity-90" style="background-videos: url('{{ asset('build/images/trashBeranda.jpg') }}')">
    <video class="md:absolute inset-0 h-full w-full object-cover" autoplay muted loop playsinline>
      <source src="{{ asset('build/videos/vidio kelompok terbaik.mp4') }}" type="video/mp4" />
      Browser Anda tidak mendukung video.
    </video>  
    <div class="absolute pb-2 inset-0 bg-gradient-to-r  from-black/80 via-black/60 to-transparent"></div>
   </div>

   <div class="relative z-10 max-w-screen-xl mx-auto px-6 pt-60">
      <div class="flex flex-col lg:flex-row items-start">
         
         
         <div class="w-full lg:w-250 space-y-6">
         <p class="mb:text-4xl text-3xl font-black font-sans md:mb-20 mb-15 text-white">Digital Solution for a Zero-Waste World!</p>

         <h2 class="font-bold font-monospace text-2xl text-white">Hai, Binarians!</h2>
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
    
    <div class="flex justify-center mt-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <a href="/blogs">
          <article class="flex flex-col items-center justify-center h-60 w-80 text-center bg-white text-black rounded-xl shadow-lg drop-shadow-lg drop-shadow-black/40 p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-gray-100">
            <div class="bg-[#ccc14e] p-4 rounded-full mb-4">
              <img src="{{ asset('build/images/suaraWarga.png') }}" alt="suara warga" class="w-10 h-10">
            </div>
            <h2 class="text-xl font-bold text-gray-800 mb-2">Suara Warga</h2>
            <p class="text-sm text-gray-600 leading-snug">
              Tempat bagi masyarakat untuk menyuarakan aspirasi dan keluhan demi lingkungan yang lebih baik.
            </p>
          </article>
        </a>
        
        <article class="flex flex-col items-center justify-center h-60 w-80 text-center bg-white text-black rounded-xl shadow-lg drop-shadow-lg drop-shadow-black/40 p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-gray-100">
          <div class="bg-[#ccc14e] p-4 rounded-full mb-4">
            <img src="{{ asset('build/images/gerakan.png') }}" alt="sampah" class="w-10 h-10">
          </div>
          <h2 class="text-xl font-bold text-gray-800 mb-2">Gerakan Peduli Sampah</h2>
          <p class="text-sm text-gray-600 leading-snug">
            Ajak masyarakat untuk bersama menjaga kebersihan lewat aksi nyata dan kolaborasi.
          </p>
        </article>

        <button id="tombolDitekan">
          <article class="flex flex-col items-center justify-center h-60 w-80 text-center bg-white text-black rounded-xl shadow-lg drop-shadow-lg drop-shadow-black/40 p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-gray-100">
            <div class="bg-[#ccc14e] p-4 rounded-full mb-4">
              <img src="{{ asset('build/images/hero.png') }}" alt="hero" class="hover:rotate-20 transform-all duration-300 hover:h-11 hover:w-11 ease-in-out w-10 h-10">
            </div>
            <h2 class="text-xl font-bold text-gray-800 mb-2">Sahabat Bumi</h2>
            <p class="text-sm text-gray-600 leading-snug">
              Sahabat setia bumi yang selalu hadir menjaga kebersihan dan kelestarian lingkungan bersama Binary Waste.
            </p>
          </article>
        </button>
      </div>
    </div>
  </div>

  <section class="mt-12 px-4 font-inter">
    <div class="max-w-[73.5rem]  mx-auto p-8 rounded-2xl shadow-xl bg-white">
      <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
        <div class="flex flex-col items-center">
          <p id="numberCount" data-max="300" class="text-4xl md:text-5xl font-extrabold text-gray-900">300</p>
          <p class="text-base md:text-lg text-gray-500 mt-2">Mitra Terafiliasi</p>
        </div>
        
        <div class="flex flex-col items-center">
          <p id="numberCount1" data-max="280" class="text-4xl md:text-5xl font-extrabold text-gray-900">280</p>
          <p class="text-base md:text-lg text-gray-500 mt-2">Binarians Terdaftar</p>
        </div>
        
        <div class="flex flex-col items-center">
          <p id="numberCount2" data-max="350" class="text-4xl md:text-5xl font-extrabold text-gray-900">350</p>
          <p class="text-base md:text-lg text-gray-500 mt-2">Laporan Diterima</p>
        </div>
        
        <div class="flex flex-col items-center">
          <p id="numberCount3" data-max="120" class="text-4xl md:text-5xl font-extrabold text-gray-900">120</p>
          <p class="text-base md:text-lg text-gray-500 mt-2">Gerakan Terealisasi</p>
        </div>
      </div>
    </div>
  </section>

</section>
<svg class="-mt-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#5e6f52" fill-opacity="1" d="M0,96L48,96C96,96,192,96,288,90.7C384,85,480,75,576,101.3C672,128,768,192,864,186.7C960,181,1056,107,1152,74.7C1248,43,1344,53,1392,58.7L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
</svg>


<section class="bg-white md:-mt-100 -mt-50 py-20 px-6 md:px-20">
  <div class="flex flex-col md:flex-row items-center gap-10" data-aos="zoom-out-up">
    <div class="md:w-1/2">
      <img src="{{ asset('build/images/Desain tanpa judul.gif') }}" alt="Arief Huda" class="w-300 mx-auto md:mx-0">
    </div>
    
    <div class="md:w-1/2 text-center md:-mt-10 -mt-30 md:text-left">
      <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-4 leading-tight">
        Bersama Kita Bisa<br><span class="text-green-500">Mengubah Lingkungan</span>
      </h2>
      <p class="text-gray-700 text-lg mb-6">
        "Kami percaya bahwa perubahan besar dimulai dari langkah kecil. <br class="hidden md:block">
        <span class="text-green-600 font-semibold">Binary Waste</span> hadir untuk menghubungkan <span class="text-green-600 font-semibold">teknologi</span>, <span class="text-green-600 font-semibold">komunitas</span>, dan <span class="text-green-600 font-semibold">kesadaran lingkungan</span> demi masa depan Indonesia yang lebih baik."
      </p>
      <button id="btnMitra" class="block bg-[#57674c] text-white px-6 mx-auto md:mx-0 py-3 rounded-full mt-5 shadow-md hover:bg-[#ccc14e] transition">
        Gabung Sebagai Mitra
      </button>
      
      <div class="mt-6 flex gap-7">
        <img src="{{ asset('build/images/usu.png') }}" alt="Tanda Tangan Arief" class="w-20 h-20 mx-auto md:mx-0">
        <img src="{{ asset('build/images/ui.png') }}" alt="Tanda Tangan Arief" class="w-20 h-20 mx-auto md:mx-0">
        <img src="{{ asset('build/images/unilever.png') }}" alt="Tanda Tangan Arief" class="w-18 h-20 mx-auto md:mx-0">
      </div>
    </div>
  </div>
</section>

  <svg xmlns="http://www.w3.org/2000/svg" class="-mb-1 -mt-80" viewBox="0 0 1440 320">
    <path fill="#5e6f52" fill-opacity="1" d="M0,96L48,96C96,96,192,96,288,90.7C384,85,480,75,576,101.3C672,128,768,192,864,186.7C960,181,1056,107,1152,74.7C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>

<section class="-mt-30 bg-[#5e6f52]  ">
  <div class="w-4/5 flex  h-[38rem] p-5 mx-auto -mt-[50px]">
    <div class="rounded-2xl shadow-lg h-full w-1/3 p-7 bg-white flex flex-col gap-6">
        <img src="{{ asset('build/images/betol.png') }}" alt="" class="h-full w-90  -mt-5  object-cover">
      <div class="-mt-8">
        <div class="flex">
          <img src="{{ asset('build/images/rose.png') }}" class="h-10 w-10" alt="">
          <p class="text-2xl font-black font-sans mb-4 ml-2">Tips Penggunaan</p>
        </div>
        <ul class="list-disc pl-5 space-y-2  text-gray-700">
          <li>Buat akun dulu supaya semua fitur bisa kamu akses</li>
          <li>Laporkan sampah lengkap dengan lokasi dan foto agar cepat diterima</li>
          <li>Rajin cek dashboard untuk pantau status laporanmu</li>
          <li>Ikut serta dalam event dan gerakan untuk dampak yang lebih besar</li>
          <li>Ajak keluarga dan teman pakai Binary Waste agar lingkungan kita makin bersih</li>
        </ul>
      </div>
    </div>

    <div class="flex flex-col w-2/3 ml-5 gap-5">

      <div class="rounded-2xl shadow-lg p-7 bg-white flex h-[50%] gap-5">
        <div class="flex flex-col w-2/3">
          <div class="flex">
            <img src="{{ asset('build/images/fitur.png') }}" alt="" srcset="" class="h-8 mr-2 ">
            <p class="text-2xl font-black font-sans mb-4">Fitur Binary Waste</p>  
          </div>
          <ul class="list-decimal pl-5 space-y-2 text-gray-700">
            <li>Lapor Sampah</li>
            <li>Event dan Gerakan Komunitas</li>
            <li>Edukasi dan Artikel Lingkungan</li>
            <li>Pantau Status Laporan</li>
            <li>Jadi Mitra Binary Waste</li>
          </ul>
        </div>
        <div class="bg-black  rounded-2xl flex">
          <img src="{{ asset('build/images/orangberanda.png') }}" class="h-55" alt="">
        </div>
      </div>
    

      <div class="flex gap-5  h-[50%]">
        <div class="rounded-2xl p-7 shadow-lg bg-white w-1/2">
          <p class="mb-3 text-center">Yuk, Ajak Teman dan Keluarga Peduli Lingkungan!</p>
          <img src="{{ asset('build/images/global.png') }}" alt="" class="bg-black h-38 w-full rounded-lg  hover:scale-105 trnsition-all duration-300 ease-in-out">
        </div>
        <div class="rounded-2xl p-7 flex shadow-lg flex-col bg-white w-1/2">
        <p class="font-black text-6xl mt-10 mx-auto mb-10">120</p>
        <p>Bersama Binary Waste, sudah ada 120 jiwa yang tergerak untuk membuat lingkungan lebih bersih dan sehat</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="mitra" class="">
  <div class="min-h-screen bg-gradient-to-br from-white via-white to-green-100 flex flex-col justify-center items-center px-4 py-12 bg-cover bg-center" style="background-image: url('{{ asset('build/images/Wave (7).svg') }}')">
    <div class=" flex bg-white shadow-2xl rounded-3xl p-8 w-full -mt-20 max-w-3/4" data-aos="zoom-in" data-aos-duration="800">
      
      <div class="w-1/2">
      <h2 class="text-2xl md:text-3xl font-bold text-center text-green-700 mb-6"> 
        Ayo Bergabung
      </h2>
      
      @if (session('succes'))
        <div class="bg-green-100 border border-green-300 text-green-800 p-3 rounded-lg text-sm mb-4">
          Berhasil berhasil hore hore 🎉
        </div>
      @elseif (session('error'))
        <div class="bg-red-100 border border-red-300 text-red-700 p-3 rounded-lg text-sm mb-4">
          What the hell omagat 😵‍💫
        </div>
      @endif

          @if(session('success'))
                <div class="bg-green-100 text-green-700 p-2 rounded mb-3">
                    {{ session('success') }}
                </div>
            @endif
      <form action="{{ route('Mitra') }}" method="POST" class="space-y-4">
        @csrf
        
        <input type="text" name="namaMitra" placeholder="Nama Mitra"
          class="w-full py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
        
        <input type="text" name="emailMitra" placeholder="Email Mitra"
          class="w-full py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
        
        <input type="kontak" name="Kontak" placeholder="Kontak Mitra"
          class="w-full py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">

        <select name="kategoriMitra" required
          class="w-full bg-gray-50 py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
          <option disabled selected value="">Pilih Kategori Mitra</option>
          <option value="Komunitas Lingkungan">Komunitas Lingkungan</option>
          <option value="Lingkungan Hidup">Lingkungan Hidup</option>
          <option value="Pendidikan">Pendidikan</option>
          <option value="Keagamaan">Keagamaan</option>
          <option value="Kesehatan">Kesehatan</option>
          <option value="Lainya">Lainya</option>
        </select>
        
        <input type="text" name="alamatMitra" placeholder="Alamat Mitra"
          class="w-full py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
        
        <input type="text" name="medsos" placeholder="Instagram/Facebook/LinkedIn"
          class="w-full py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">

        <input type="file" name="logo" placeholder="Logo Mitra"
          class="w-full py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
        
        <button type="submit"
          class="w-full bg-[#5e6f52] text-white font-semibold py-3 rounded-full shadow-md transition duration-300 ease-in-out transform hover:scale-105">
          Kirim
        </button>
      </form>
      </div>
      <div class="mx-auto my-auto">
        <img src="{{ asset('build/images/interview.png') }}" alt="" class=" h-90 w-90" srcset="">
       <div class="text-center mb-6">
        <p class="text-2xl font-semibold text-gray-800">Let's go, <span class="text-green-600">Mitra!</span></p>
        <p class="text-sm text-gray-500 mt-1">Satu klik lagi untuk mulai beraksi 🚀</p>
      </div>

      </div>
    </div>

  </div>
</section>



<footer class="bg-[#5e6f52]  pt-30 w-screen text-white">
  <div class="container mx-auto flex justify-center gap-12">
    <div class="flex items-center space-x-3">
      <img src="{{ asset('build/images/youtube.png') }}" alt="YouTube" class="md:h-10 h-5">
      <p>Binary Waste Official</p>
    </div>
    <div class="flex items-center space-x-3">
      <img src="{{ asset('build/images/email.png') }}" alt="Email" class="h-8">
      <p>binarywaste@gmail.com</p>
    </div>
    <div class="flex items-center space-x-3">
      <img src="{{ asset('build/images/contact.png') }}" alt="Contact" class="h-8">
      <p>0822-1221-2123</p>
    </div>
  </div>
  <p class="border-t border-white mb-10 w-2/3 mx-auto text-center pt-4 pb-4 mt-8 text-sm">
    © 2025 BinaryWaste. All rights reserved.
  </p>
</footer>

<script>
  AOS.init();
  let bogem = true;
  const scrollDulu = window.scrollY;
  
  function kiyomasa(idnya) {
    window.addEventListener('scroll', () => {
      const scrollSekarang = window.scrollY;
      
      if(bogem && (scrollSekarang - scrollDulu > 100)) {
        let a = 0;
        const b = document.getElementById(idnya);
        const max = parseInt(b.dataset.max);
        
        const interval = setInterval(() => {
          a++;
          b.innerHTML = String(a).padStart(3, '0');
          
          if(a >= max) {
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
  
  let isActive = true;
  document.getElementById('btnMitra').addEventListener('click', () => {
    const mitra = document.getElementById('mitra');
    mitra.classList.remove('hidden');
    setTimeout(() => {
      mitra.classList.add('opacity-100');
      mitra.classList.remove('opacity-0');   
      AOS.refresh();
      mitra.scrollIntoView({ behavior: 'smooth' });
      isActive = false;
    }, 50); 
  });
</script>
@endsection