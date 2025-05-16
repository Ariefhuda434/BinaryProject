@extends('components.layout')

@section('title', 'tentang')

@section('content')

<x-header />

<div class="mx-auto mt-20">
  <div class="text-center mb-10">
    <h1 class="font-black text-3xl md:text-6xl font-sans leading-tight">Sekilas Tentang <span class="text-[#5e6f52]">Binary Waste</span></h1>
    <p class="mt-4 text-gray-500 text-base md:text-lg max-w-2xl  mx-auto">Solusi digital untuk pengelolaan sampah berkelanjutan dan aksi lingkungan nyata.</p>
  </div>

  <section class="bg-white py-20 px-6 md:px-20">
    <div class="flex flex-col md:flex-row items-center gap-10">
      <div class="md:w-1/2">
        <img src="{{ asset('build/images/tentangimages.png') }}" alt="Binary Waste" class="w-90 md:ml-20" />
      </div>
      <div class="md:w-4/5">
        <p class="md:text-xl font-sans font-medium text-gray-700 md:-ml-20 leading-relaxed hidden md:block">
          Binary Waste adalah sebuah platform digital berbasis web yang dikembangkan sebagai solusi inovatif dalam pengelolaan sampah secara berkelanjutan. Platform ini lahir dari kepedulian terhadap isu lingkungan serta rendahnya kesadaran masyarakat akan pentingnya pengelolaan sampah yang efektif. Binary Waste hadir untuk memfasilitasi partisipasi aktif masyarakat dalam pelaporan pembuangan sampah ilegal dan kolaborasi aksi lingkungan secara langsung, melalui sistem yang mudah diakses dan berdampak nyata.
        </p>
        <div class="text-center md:text-left mt-6">
          <button id="btnScroll" class="bg-[#5e6f52] rounded-full px-6 py-3 md:-ml-20 text-white text-sm md:text-base shadow-md hover:bg-[#4a5a40] transition-all">
            Selengkapnya
          </button>
        </div>

    </div>
</div>

{{-- Accordion (mobile only) --}}
<div class="md:hidden mt-10">
    <details class="bg-[#f9fafb] rounded-lg p-4 shadow-md">
        <summary class="cursor-pointer text-lg font-semibold text-gray-800">Apa itu Binary Waste?</summary>
        <div class="mt-3 text-sm text-gray-600">
            Binary Waste adalah sebuah platform digital berbasis web yang dikembangkan sebagai solusi inovatif dalam pengelolaan sampah secara berkelanjutan. Platform ini lahir dari kepedulian terhadap isu lingkungan serta rendahnya kesadaran masyarakat akan pentingnya pengelolaan sampah yang efektif. Binary Waste hadir untuk memfasilitasi partisipasi aktif masyarakat dalam pelaporan pembuangan sampah ilegal dan kolaborasi aksi lingkungan secara langsung, melalui sistem yang mudah diakses dan berdampak nyata.
            
        </div>
    </details>
</div>
</section>

  {{-- Visi Misi Section --}}
  <div id="visi-misi" class="py-20 mt-10 hidden opacity-0 transition-opacity duration-700" data-aos="fade-up" data-aos-duration="3000">
    <div class="max-w-5xl mx-auto">
      <img src="{{ asset('build/images/fotoarief.jpg') }}" alt="Arief Huda" class="rounded-xl shadow-lg mx-auto" />
    </div>
  </div>

  {{-- YouTube Embed --}}
  <div class="mt-16 px-6 md:px-0 flex justify-center">
    <iframe class="w-full max-w-6xl rounded-xl aspect-video shadow-xl" src="https://www.youtube.com/embed/KOi90t6zIyU?si=KkFswtu6_w2O0n3j" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
</div>

{{-- Footer --}}
<footer class="bg-[#5e6f52] w-full text-center text-white py-10 mt-20">
  <p class="border-t border-white pt-4">© 2025 BinaryWaste. All rights reserved.</p>
</footer>

{{-- Script --}}
<script>
  AOS.init();

  let isActive = true;
  document.getElementById('btnScroll').addEventListener('click', () => {
    const visiMisi = document.getElementById('visi-misi');
    visiMisi.classList.remove('hidden');
    setTimeout(() => {
      visiMisi.classList.add('opacity-100');
      visiMisi.classList.remove('opacity-0');
      AOS.refresh();
      visiMisi.scrollIntoView({ behavior: 'smooth' });
      isActive = false;
    }, 5);
  });
</script>

@endsection
