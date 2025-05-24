   @extends('components.layout')  
   @section('title', 'Beranda')  
   @section('content')
   <section class="relative w-full h-auto pb-20 -mt-40 mb-20 bg-[#57674c]">
     <div class="absolute inset-0 h-screen bg-cover  opacity-90 " style="background-videos: url('{{ asset('build/images/trashBeranda.jpg') }}')">
      <video class="md:absolute inset-0 h-full w-full object-cover" autoplay muted loop playsinline>
        <source src="{{ asset('build/videos/vidio kelompok terbaik.mp4') }}" type="video/mp4" />
        Browser Anda tidak mendukung video.
      </video>  
      <div class="absolute pb-2 inset-0 bg-gradient-to-r  from-black/80 via-black/60 to-transparent"></div>
    </div>
    
    <div class="relative z-10 max-w-screen-xl mx-auto px-6 pt-60">
      <div class="flex flex-col lg:flex-row items-start">
        
        
        <div class="w-full lg:w-250 space-y-6">
          <p class="mb:text-4xl text-3xl mt-15 font-black font-sans md:mb-20 mb-15 text-white">Digital Solution for a Zero-Waste World!</p>
          
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
          </p>
        </article>

<button id="tombolDitekan">
  
  <article class="flex flex-col items-center justify-center h-60 w-80 text-center bg-white text-black rounded-xl  shadow-lg drop-shadow-lg drop-shadow-black/40 p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-gray-100">
    <div class="bg-[#ccc14e] p-4 rounded-full mb-4">
      <img src="{{ asset('build/images/hero.png') }}" alt="hero" class="hover:rotate-20 transform-all duration-300 hover:h-11 hover:w-11  ease-in-out w-10 h-10">
    </div>
    <h2 class="text-xl font-bold text-gray-800 mb-2">Sahabat Bumi</h2>
    <p class="text-sm text-gray-600 leading-snug">
      Sahabat setia bumi yang selalu hadir menjaga kebersihan dan kelestarian lingkungan bersama Binary Waste.
    </p>  
  </p>
</article>

</button>
</div>
</div>

</div>

<section class="mt-23 px-4 font-inter">
  <div class="max-w-6xl mx-auto p-8 rounded-2xl shadow-xl bg-white ">
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
<section class="bg-white md:-mt-80 -mt-50 -mb-20  py-20 px-6 md:px-20">
  <div class="flex flex-col md:flex-row items-center gap-10" data-aos="zoom-out-up">
    
    <div class="md:w-1/2">
      <img src="{{ asset('build/images/Desain tanpa judul.gif') }}" alt="Arief Huda" class="w-300 mx-auto md:mx-0">
    </div>
    
    <div class="md:w-1/2 text-center md:-mt-10  -mt-30 md:text-left">
      <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-4 leading-tight">
        Bersama Kita Bisa<br><span class="text-green-500">Mengubah Lingkungan</span>
      </h2>
      <p class="text-gray-700 text-lg mb-6">
        “Kami percaya bahwa perubahan besar dimulai dari langkah kecil. <br class="hidden md:block">
        <span class="text-green-600 font-semibold">Binary Waste</span> hadir untuk menghubungkan <span class="text-green-600 font-semibold">teknologi</span>, <span class="text-green-600 font-semibold">komunitas</span>, dan <span class="text-green-600 font-semibold">kesadaran lingkungan</span> demi masa depan Indonesia yang lebih baik.”
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
  
  
  <section id="mitra" class="hidden">
    <div class="min-h-screen bg-gradient-to-br from-white via-white to-green-100 flex flex-col justify-center items-center px-4 py-12">
      <div class="bg-white shadow-2xl rounded-3xl p-8 w-full max-w-xl" data-aos="zoom-in" data-aos-duration="800">
        <h2 class="text-2xl md:text-3xl font-bold text-center text-green-700 mb-6">
          Daftarkan 
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
        
        <form action="{{ route('jadiMitra') }}" method="POST" class="space-y-4">
          @csrf
          
          <input type="text" name="namaMitra" placeholder="Nama Mitra"
          class="w-full py-2.5 px-4  rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out"
          >
          
          <input type="text" name="tujuan" placeholder="Tujuan Menjadi Mitra"
          class="w-full py-2.5 px-4  rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out"
          >
          
          <select name="kategoriMitra" required
          class="w-full bg-gray-50 py-2.5 px-4  rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out"
          >
          <option disabled selected value="">Pilih Kategori Mitra</option>
          <option value="Komunitas Lingkungan">Komunitas Lingkungan</option>
          <option value="Lingkungan Hidup">Lingkungan Hidup</option>
          <option value="Pendidikan">Pendidikan</option>
          <option value="Keagamaan">Keagamaan</option>
          <option value="Kesehatan">Kesehatan</option>
          <option value="Lainya">Lainya</option>
        </select>
        
        <input type="text" name="alamatMitra" placeholder="Alamat Mitra"
        class="w-full py-2.5 px-4  rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out"
        >
        
        <input type="email" name="emailMitra" placeholder="Email Mitra"
        class="w-full py-2.5 px-4  rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out"
        >
        
        <input type="text" name="medsos" placeholder="Instagram/Facebook/LinkedIn"
        class="w-full py-2.5 px-4  rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out"
        >
        
        <button type="submit"
        class="w-full bg-[#5e6f52] text-white font-semibold py-3 rounded-full shadow-md transition duration-300 ease-in-out transform hover:scale-105"
        >
        Kirim
      </button>
    </form>
  </div>
</div>
</section>






<footer class="bg-[#5e6f52] pt-30 w-screen text-white">
  <div class="container mx-auto flex justify-center gap-12">
    <div class="flex items-center space-x-3">
      <img src="{{ asset('build/images/youtube.png') }}" alt="YouTube" class="md:h-10 h-5">
      <p class="">Binary Waste Official</p>
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
  
  let isActive = true;
  document.getElementById('btnMitra').addEventListener('click',() =>{
    const mitra = document.getElementById('mitra');
    mitra.classList.remove('hidden');
    setTimeout(() => {
      mitra.classList.add('opacity-100');
      mitra.classList.remove('opacity-0');   
      AOS.refresh();
      mitra.scrollIntoView({ behavior: 'smooth' });
      isActive = false;
    }, 50); 
  })
  </script>
    @endsection
    