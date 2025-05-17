@extends('components.layout')

@section('title', 'tentang')

@section('content')

<x-header />

<div class="mx-auto  mt-20">
  <div class="text-center mb-5 px-4">
    <h1 class="font-black text-3xl md:text-6xl font-sans leading-tight">
      Sekilas Tentang <span class="text-[#5e6f52]">Binary Waste</span>
    </h1>
    <p class="mt-4 text-gray-500 text-base md:text-lg max-w-2xl mx-auto">
      Solusi digital untuk pengelolaan sampah berkelanjutan dan aksi lingkungan nyata.
    </p>
  </div>

  <section class="mt-5 px-6 md:px-20">
    <div class="flex flex-col md:flex-row items-center justify-center gap-10">
      <div class="md:w-1/2 text-center">
        <img src="{{ asset('build/images/tentangimages.png') }}" alt="Ilustrasi Binary Waste" class="w-full max-w-md mx-auto md:h-[300px] object-contain">
      </div>

      <div class="md:w-10/11">
        <p class="md:text-xl font-sans font-normal text-gray-700 leading-relaxed text-center md:text-left">
          Binary Waste adalah sebuah platform digital berbasis web yang dikembangkan sebagai solusi inovatif dalam pengelolaan sampah secara berkelanjutan. Platform ini lahir dari kepedulian terhadap isu lingkungan serta rendahnya kesadaran masyarakat akan pentingnya pengelolaan sampah yang efektif. Binary Waste hadir untuk memfasilitasi partisipasi aktif masyarakat dalam pelaporan pembuangan sampah ilegal dan kolaborasi aksi lingkungan secara langsung, melalui sistem yang mudah diakses dan berdampak nyata.
        </p>

        <div class="text-center ro md:text-left mt-6">
          <button id="btnScroll" class="bg-[#5e6f52] rounded-full px-6 py-3 text-white text-sm md:text-base shadow-md hover:bg-[#4a5a40] transition-all">
            Selengkapnya
          </button>
        </div>
      </div>


</div>
  </section>
  <div class="bg-[#a8b387]">

    <div  class="mt-4 min-w-full">
      <div class=" bg-[#5e6f52] h-30 md:h-60 flex">
        <img src="{{ asset('build/images/test1.jpg') }}" alt="" srcset="" class="md:m-5 m-5 h-21 md:h-50 md:w-1/2 bg-white object-cover object-bottom">
        <img src="{{ asset('build/images/fotokerjasama.jpg') }}" alt="" srcset="" class="h-full w-40 md:w-120 bg-white">
        <div class="md:h-30 md:mt-30 md:w-30 bg-[#fefadf]"></div>
        <div class="md:h-full  md:w-30 bg-[#ccc14e]"></div>
    </div>
  </div>
  
  
<div id="visi-misi" class="mt-10 min-w-full transition-opacity duration-700">
  <div class="w-3/4 mx-auto rounded-lg shadow-lg h-100 bg-contain bg-right relative" style="background-image: url('{{ asset('build/images/trashberanda.jpg') }}')">
    
    <div class="h-full w-3/4 bg-[#5e6f52] rounded-l-lg rounded-br-[7rem] relative z-10 p-5">
      <p class="text-white font-sans leading-tight text-4xl font-black text-center pt-5">Visi & Misi</p>
      
      <p class="px-10 mt-10 text-justify text-xl text-white font-sans font-light">
        Binary Waste hadir sebagai jembatan antara masyarakat dan lingkungan yang lebih baik—sebuah platform sebagai solusi digital dalam pengelolaan dan pemantauan sampah ilegal yang berbasis kolaborasi masyarakat, dengan mengintegrasikan teknologi, edukasi, dan aksi nyata untuk menciptakan lingkungan yang bersih, sehat, serta mendukung tercapainya kota berkelanjutan dan kehidupan masyarakat yang lebih peduli terhadap lingkungan menuju Indonesia Emas 2045
      </p>
    </div>
    
    <div class="absolute bottom-4 right-4 flex items-center space-x-2 z-20">
      <img src="{{ asset('build/images/logoputih.png') }}" alt="Logo" class="h-10">
      <div class="text-white">
        <p class="font-bold text-sm">BINARY WASTE</p>
        <p class="text-[0.42rem]">Digital Solution for a Zero-Waste World!</p>
      </div>
    </div>
    
  </div>  
  <div class="w-3/4 mx-auto h-40 mt-5 shadow-lg rounded-lg gap-5 bg-white flex">
    <div class="flex my-auto flex-col ml-13 mr-8">
  <p class="text-2xl md:text-3xl font-black leading-tight font-sans text-[#5e6f52]">
    Dukungan Kami terhadap SDGs
  </p>
  <p class="mt-2 text-gray-700 text-base leading-relaxed font-sans">
    Kami percaya bahwa masa depan yang bersih dan berkelanjutan<br>
    dimulai dari <span class="font-semibold text-[#5e6f52]">aksi nyata</span> dan <span class="font-semibold text-[#5e6f52]">teknologi yang tepat</span>.
  </p>
</div>
<img src="{{ asset('build/images/sdg11.png') }}" alt="" class="mt-5 w-30 h-30 rounded-lg hover:scale-110 hover:shadow-lg transition-transform duration-300">
<img src="{{ asset('build/images/sdg12.png') }}" alt="" class="mt-5 w-30 h-30 rounded-lg hover:scale-110 hover:shadow-lg transition-transform duration-300">
<img src="{{ asset('build/images/sdg13.png') }}" alt="" class="mt-5 w-30 h-30 rounded-lg hover:scale-110 hover:shadow-lg transition-transform duration-300">
<img src="{{ asset('build/images/sdg17.png') }}" alt="" class="mt-5 w-30 h-30 rounded-lg hover:scale-110 hover:shadow-lg transition-transform duration-300">

  </div>
</div>






<!-- Visi Misi Section -->

<!-- YouTube Embed -->
<div class="hidden mt-16 px-6 md:px-0 flex  justify-center">
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
</div>

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
