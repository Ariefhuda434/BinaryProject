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
      <div class="md:w-1/2 text-center -mb-10 ">
        <img src="{{ asset('build/images/Video.gif') }}" alt="Ilustrasi Binary Waste" class="md:w-full w-60 max-w-md mx-auto md:h-[300px] object-contain">
      </div>
      <div class="md:w-500">
        <p class="md:text-xl indent-8 text-justify font-sans font-normal text-gray-700 leading-relaxed text-center ">
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
        <img src="{{ asset('build/images/test1.jpg') }}" alt="" srcset="" class="md:m-5 m-2 h-26 md:h-50 md:w-1/2 bg-white object-cover object-bottom">
        <img src="{{ asset('build/images/fotokerjasama.jpg') }}" alt="" srcset="" class="h-full w-40 md:w-120 bg-white">
        <div class="md:h-30 md:mt-30 md:w-30 bg-[#fefadf]"></div>
        <div class="md:h-full  md:w-30 bg-[#ccc14e]"></div>
    </div>
  </div>
  
<div id="visi-misi" class="mt-10  min-w-full transition-opacity duration-700">
 <div class="flex flex-col md:flex-row w-full md:w-3/4 mx-auto rounded-lg shadow-lg overflow-hidden relative">  
  <div class="w-full md:w-3/4 bg-[#5e6f52] md:rounded-l-lg md:rounded-br-[7rem] relative z-0 p-5">
    <p class="text-white font-sans leading-tight text-2xl md:text-4xl font-black text-center pt-3 md:pt-1">
      Visi & Misi
    </p>
    
    <p class="px-4 md:px-10 mt-6 md:mt-5 text-justify text-base md:text-xl text-white font-sans font-light">
      Binary Waste hadir sebagai jembatan antara masyarakat dan lingkungan yang lebih baik sebuah platform sebagai solusi digital dalam pengelolaan dan pemantauan sampah ilegal yang berbasis kolaborasi masyarakat, dengan mengintegrasikan teknologi, edukasi, dan aksi nyata untuk menciptakan lingkungan yang bersih, sehat, serta mendukung tercapainya kota berkelanjutan dan kehidupan masyarakat yang lebih peduli terhadap lingkungan menuju Indonesia Emas 2045.
    </p>
  </div>

  <!-- Bagian gambar -->
  <div class="w-full md:w-1/2 md:h-64 h-65 md:h-auto  bg-right bg-no-repeat bg-left md:bg-cover relative" style="background-image: url('{{ asset('build/images/trashberanda.jpg') }}')">
    <!-- Logo di kanan bawah -->
    <div class="absolute bottom-2 right-2 md:bottom-4 md:right-4 flex items-center space-x-2 z-20">
      <img src="{{ asset('build/images/logoputih.png') }}" alt="Logo" class="h-8 bg-cover md:h-10">
      <div class="text-white">
        <p class="font-bold text-xs md:text-sm">BINARY WASTE</p>
        <p class="text-[0.35rem] md:text-[0.42rem]">Digital Solution for a Zero-Waste World!</p>
      </div>
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
<div class="mt-6 flex rounded-lg h-100 w-3/4 mx-auto bg-white overflow-visible">
@php
$profiles = [
  ['name' => 'Arief Huda','role' => 'Full Stack Developer','desc' => 'Bolivia, Bocah Liar Helvetia','img'  => asset('build/images/ariefganteng.png'),],
  ['name' => 'Markocop','role' => 'Full Stack Developer','desc' => 'Kembaran Arief dari Multiverse','img'  => asset('build/images/ariefganteng.png'),],
  ['name' => 'Bedul','role' => 'Full Stack Developer','desc' => 'Kembaran Arief dari Multiverse','img'  => asset('build/images/ariefganteng.png'),],
  ['name' => 'Irfan','role' => 'Full Stack Developer','desc' => 'Kembaran Arief dari Multiverse',  'img'  => asset('build/images/ariefganteng.png'),],
  ['name' => 'Usman','role' => 'Full Stack Developer','desc' => 'Kembaran Arief dari Multiverse','img'  => asset('build/images/ariefganteng.png'),],
];
@endphp

<div class="relative w-3/4 mx-auto mt-6 overflow-hidden bg-white rounded-lg flex flex-nowrap overflow-x-auto scrollbar-hide snap-x snap-mandatory" id="slider-container" style="scroll-behavior: smooth;">
  @foreach ($profiles as $index => $profile)
    <div class="inline-block flex-shrink-0 w-full snap-center text-center px-4">
      <p class="text-xl font-bold text-gray-700 mb-3 mt-5">Binary Buddies</p>
      <img src="{{ $profile['img'] }}" alt="Foto {{ $profile['name'] }}" class="h-100 ml-18 drop-shadow-lg -mt-16 -mb-25" style="filter: drop-shadow(0 4px 6px rgba(204,193,78,1));">
      <p class="text-lg font-semibold text-gray-800">{{ $profile['name'] }}</p>
      <p class="text-sm text-gray-600">{{ $profile['role'] }}</p>
      <p class="mt-3 text-sm italic text-gray-500 max-w-xs mx-auto">{{ $profile['desc'] }}</p>
    </div>
  @endforeach
</div>




  <div class="h-full w-2/3 bg-[#5e6f52] rounded-r-lg ml-auto overflow-visible">
    <div class="flex overflow-visible">
      <div class="flex">
        <div class="flex mt-5 flex-col">
          <article class="ml-9 w-80 h-45 bg-gradient-to-br from-white to-green-800  transition-transform duration-300 ease-in-out hover:scale-105 hover:drop-shadow-lg hover:drop-shadow-cyan-500/50 hover:z-10"
                   style="clip-path: polygon(0% 0, 50% 0, 80% 100%, 0% 100%)">
                   <img src="{{ asset('build/images/bill.png') }}" alt="" srcset="" class="h-80 -mt-27 -ml-5">
                  </article>
                  <article class="ml-9 w-166 mt-5 h-40 bg-green-500 transition-transform duration-300 ease-in-out hover:scale-105 drop-shadow-lg drop-shadow-cyan-500/50 hover:z-10"
                  style="clip-path: polygon(0% 0, 40% 0, 53% 100%, 0% 100%)">
                  <img src="{{ asset('build/images/ipeh.png') }}" alt="" srcset="" class="h-80 -mt-30 ml-10">
                </article>
                </div>
                <div class="flex flex-col">
          <div class="flex">
            <article class="mt-5 -ml-120 w-80 h-45 bg-green-500 transition-transform duration-300 ease-in-out hover:scale-105 hover:drop-shadow-lg hover:drop-shadow-cyan-500/50 hover:z-10"
                     style="clip-path: polygon(0% 0, 60% 0, 30% 100%, 30% 100%)">
                    </article>
                    <article class="-ml-50 h-45 w-81 bg-red-100 mt-5 transition-transform duration-300 ease-in-out hover:scale-105 hover:drop-shadow-lg hover:drop-shadow-cyan-500/50 hover:z-10"
                    style="clip-path: polygon(30% 0, 100% 0, 100% 100%, 0% 100%)">
                    <img src="{{ asset('build/images/nahya.png') }}" alt="" srcset="" class="h-80 -mt-30 ml-20">
                  
                  </article>
                  </div>
                  <article class="-ml-94 mt-5 mb-5 w-85 h-40 bg-gradient-to-tl from-white to-green-900 transition-transform duration-300 ease-in-out hover:scale-105 hover:drop-shadow-lg hover:drop-shadow-cyan-500/50 hover:z-10"
                  style="clip-path: polygon(0% 0, 100% 0, 100% 100%, 26% 100%)">
                  <img src="{{ asset('build/images/ariefganteng2.png') }}" alt="" srcset="" class="h-70 -mt-20 ml-25">
                  </article>
        </div>
      </div>
      <div class="h-100 w-30 bg-[#ccc14e] rounded-r-lg ml-auto text-white flex items-center justify-center"></div>
    </div>
  </div>
</div>





<!-- Visi Misi Section -->

<!-- YouTube Embed -->
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a8b387" fill-opacity="1" d="M0,192L8,165.3C16,139,32,85,48,90.7C64,96,80,160,96,202.7C112,245,128,267,144,250.7C160,235,176,181,192,165.3C208,149,224,171,240,170.7C256,171,272,149,288,154.7C304,160,320,192,336,197.3C352,203,368,181,384,192C400,203,416,245,432,229.3C448,213,464,139,480,101.3C496,64,512,64,528,58.7C544,53,560,43,576,64C592,85,608,139,624,170.7C640,203,656,213,672,229.3C688,245,704,267,720,266.7C736,267,752,245,768,213.3C784,181,800,139,816,117.3C832,96,848,96,864,128C880,160,896,224,912,213.3C928,203,944,117,960,106.7C976,96,992,160,1008,176C1024,192,1040,160,1056,170.7C1072,181,1088,235,1104,256C1120,277,1136,267,1152,224C1168,181,1184,107,1200,80C1216,53,1232,75,1248,101.3C1264,128,1280,160,1296,181.3C1312,203,1328,213,1344,202.7C1360,192,1376,160,1392,160C1408,160,1424,192,1432,208L1440,224L1440,0L1432,0C1424,0,1408,0,1392,0C1376,0,1360,0,1344,0C1328,0,1312,0,1296,0C1280,0,1264,0,1248,0C1232,0,1216,0,1200,0C1184,0,1168,0,1152,0C1136,0,1120,0,1104,0C1088,0,1072,0,1056,0C1040,0,1024,0,1008,0C992,0,976,0,960,0C944,0,928,0,912,0C896,0,880,0,864,0C848,0,832,0,816,0C800,0,784,0,768,0C752,0,736,0,720,0C704,0,688,0,672,0C656,0,640,0,624,0C608,0,592,0,576,0C560,0,544,0,528,0C512,0,496,0,480,0C464,0,448,0,432,0C416,0,400,0,384,0C368,0,352,0,336,0C320,0,304,0,288,0C272,0,256,0,240,0C224,0,208,0,192,0C176,0,160,0,144,0C128,0,112,0,96,0C80,0,64,0,48,0C32,0,16,0,8,0L0,0Z"></path></svg>
  <div class="-mt-78 bg-white px-6 md:px-0 flex flex-col items-center justify-center w-3/4 mx-auto">
    <!-- Judul -->
    
    <!-- Video -->
    <div class="w-full rounded-xl shadow-xl overflow-hidden">
      <iframe
      class="w-full aspect-video"
      src="https://www.youtube.com/embed/KOi90t6zIyU?si=KkFswtu6_w2O0n3j"
      title="Perjalanan Sampah dan Kebersihan Lingkungan"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin"
      allowfullscreen>
    </iframe>
    <h2 class="mt-10 text-3xl font-bold text-[#5e6f52] mb-4 text-center">
      Perjalanan Sampah & Pentingnya Kebersihan Lingkungan
    </h2>
    
    <!-- Deskripsi singkat -->
 <div class="mx-auto max-w-4xl px-4 text-gray-600 text-justify leading-relaxed">
  <p class="indent-8 mb-6">
    Menjaga kebersihan lingkungan memiliki peran penting dalam kehidupan sehari-hari. Sampah yang tidak dikelola dengan baik dapat mencemari tanah, air, dan udara. Hal ini tidak hanya merusak ekosistem, tetapi juga berpotensi menjadi sumber penyakit bagi manusia dan hewan yang hidup di sekitarnya.
  </p>

  <p class="indent-8 mb-6">
    Pengelolaan sampah yang benar, seperti pemilahan antara sampah organik dan anorganik, daur ulang, serta pengurangan penggunaan plastik sekali pakai, sangat membantu dalam mengurangi dampak negatif terhadap lingkungan. Langkah-langkah ini juga dapat mengurangi beban tempat pembuangan akhir dan meningkatkan efisiensi pengelolaan limbah secara keseluruhan.
  </p>

  <p class="indent-8 mb-6">
    Selain manfaat lingkungan, menjaga kebersihan juga berkontribusi pada keberlanjutan hidup di masa depan. Lingkungan yang bersih dan sehat mendukung kelangsungan ekosistem, menjaga keanekaragaman hayati, serta menciptakan tempat tinggal yang nyaman. Setiap tindakan kecil seperti membuang sampah pada tempatnya dan menghemat sumber daya bisa memberikan perubahan besar jika dilakukan bersama-sama.
  </p>

  <p class="indent-8">
    Kesadaran kolektif dan partisipasi aktif dari seluruh lapisan masyarakat sangat dibutuhkan untuk menciptakan lingkungan yang bersih dan sehat. Dengan memulai dari diri sendiri dan lingkungan sekitar, kita dapat membangun kebiasaan yang berkelanjutan serta meninggalkan warisan bumi yang lebih baik bagi generasi mendatang.
  </p>
   <div class="flex items-center justify-center mt-10 mb-10  space-x-2 z-20">
      <img src="{{ asset('build/images/logo.png') }}" alt="Logo" class="h-13">
      <div class="text-black">
        <p class="font-bold text-2xl">BINARY WASTE</p>
        <p class="text-[0.62rem]">Digital Solution for a Zero-Waste World!</p>
      </div>
    </div>
    
</div>

  </div>


<footer class="bg-[#5e6f52] pt-30 w-screen text-white mt-20">
  <div class="container mx-auto flex justify-center gap-12">
    <div class="flex items-center space-x-3">
      <img src="{{ asset('build/images/youtube.png') }}" alt="YouTube" class="h-10">
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
