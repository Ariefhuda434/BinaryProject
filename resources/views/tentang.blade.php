@extends('components.layout')

@section('title', 'tentang')

@section('content')

<x-header />

<div class="mx-auto mt-20">
  <!-- Judul dan Deskripsi -->
  <div class="text-center mb-5 px-4">
    <h1 class="font-black text-3xl md:text-6xl font-sans leading-tight">
      Sekilas Tentang <span class="text-[#5e6f52]">Binary Waste</span>
    </h1>
    <p class="mt-4 text-gray-500 text-base md:text-lg max-w-2xl mx-auto">
      Solusi digital untuk pengelolaan sampah berkelanjutan dan aksi lingkungan nyata.
    </p>
  </div>

  <!-- Seksi Penjelasan + Gambar -->
  <section class="mt-5 px-6 md:px-20">
    <div class="flex flex-col md:flex-row items-center justify-center gap-10">
      <!-- Gambar Ilustrasi -->
      <div class="md:w-1/2 text-center">
        <img src="{{ asset('build/images/tentangimages.png') }}" alt="Ilustrasi Binary Waste" class="w-full max-w-md mx-auto md:h-[300px] object-contain">
      </div>

      <!-- Teks Penjelasan -->
      <div class="md:w-10/11">
        <p class="md:text-xl font-sans font-normal text-gray-700 leading-relaxed text-center md:text-left">
          Binary Waste adalah sebuah platform digital berbasis web yang dikembangkan sebagai solusi inovatif dalam pengelolaan sampah secara berkelanjutan. Platform ini lahir dari kepedulian terhadap isu lingkungan serta rendahnya kesadaran masyarakat akan pentingnya pengelolaan sampah yang efektif. Binary Waste hadir untuk memfasilitasi partisipasi aktif masyarakat dalam pelaporan pembuangan sampah ilegal dan kolaborasi aksi lingkungan secara langsung, melalui sistem yang mudah diakses dan berdampak nyata.
        </p>

        <!-- Tombol -->
        <div class="text-center md:text-left mt-6">
          <button id="btnScroll" class="bg-[#5e6f52] rounded-full px-6 py-3 text-white text-sm md:text-base shadow-md hover:bg-[#4a5a40] transition-all">
            Selengkapnya
          </button>
        </div>
      </div>


    </div>
  </section>
</div>



<!-- Visi Misi Section -->
<div id="visi-misi" class="py-20 mt-10 hidden opacity-0 transition-opacity duration-700" data-aos="fade-up" data-aos-duration="3000">
  <div class="max-w-5xl mx-auto">
    <img src="{{ asset('build/images/fotoarief.jpg') }}" alt="Arief Huda" class="rounded-xl shadow-lg mx-auto" />
  </div>
</div>

<div class="mt-16 md:px-0 flex justify-center">
  <div class="flex space-x-0">
    <!-- Item 1 -->
    <div class="w-16 h-40 bg-black rounded-md overflow-hidden transform hover:scale-x-125 transition-transform duration-300 origin-center">
      <img src="{{ asset('build/images/awn.jpg') }}" alt="" class="w-full h-full object-cover" />
    </div>
    
    <!-- Item 2 -->
    <div class="w-16 h-40 bg-black rounded-md transform hover:scale-x-125 transition-transform duration-300 origin-center"></div>

    <!-- Item 3 -->
    <div class="w-16 h-40 bg-black rounded-md transform hover:scale-x-125 transition-transform duration-300 origin-center"></div>

    <!-- Item 4 -->
    <div class="w-16 h-40 bg-black rounded-md transform hover:scale-x-125 transition-transform duration-300 origin-center"></div>

    <!-- Item 5 -->
    <div class="w-16 h-40 bg-black rounded-md transform hover:scale-x-125 transition-transform duration-300 origin-center"></div>
  </div>
</div>



<!-- YouTube Embed -->
<div class="mt-16 px-6 md:px-0 flex justify-center">
  <iframe class="w-full max-w-6xl rounded-xl aspect-video shadow-xl"
    src="https://www.youtube.com/embed/KOi90t6zIyU?si=KkFswtu6_w2O0n3j"
    title="YouTube video player"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin"
    allowfullscreen>
  </iframe>
</div>

<!-- Footer -->
<footer class="bg-[#5e6f52] w-full text-center text-white py-10 mt-20">
  <p class="border-t border-white pt-4">© 2025 BinaryWaste. All rights reserved.</p>
</footer>

<!-- Script -->
<script>
  AOS.init();

  document.getElementById('btnScroll').addEventListener('click', () => {
    const visiMisi = document.getElementById('visi-misi');
    visiMisi.classList.remove('hidden');
    setTimeout(() => {
      visiMisi.classList.add('opacity-100');
      visiMisi.classList.remove('opacity-0');
      AOS.refresh();
      visiMisi.scrollIntoView({ behavior: 'smooth' });
    }, 5);
  });
</script>

@endsection
