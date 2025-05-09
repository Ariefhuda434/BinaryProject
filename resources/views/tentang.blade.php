@extends('components.layout')

@section('title', 'tentang')

@section('content')
<x-header></x-header>
<div class="ml-15 mx-auto mt-20">
    <div class="text-center mb-10">
        <h1 class="font-black text-4xl text-6xl font-sans">Sekilas Tentang Binary Waste</h1>
    </div>

    <div class="flex lg:flex-row items-center ">
        <div class="mr-10">
            <img src="{{ asset('build/images/tentangimages.png') }}" 
                 alt="tentang binary waste" 
                 class="h-80">
        </div>

        <div class=" w-2/3 ">
            <p class="font-bold text-2xl font-sans  ">Digital Solutions For a Zero-Waste World!</p>
            <p class="text-2xl font-sans tracking-wide my-10 text-justify">
                Binary Waste adalah sebuah platform digital berbasis web yang 
                dikembangkan sebagai solusi inovatif dalam pengelolaan sampah
                secara berkelanjutan. Lahir dari kepedulian terhadap isu lingkungan
                dan rendahnya kesadaran akan pengelolaan sampah yang efektif,
                Binary Waste hadir untuk menjembatani masyarakat dengan sistem bank
                sampah digital yang mudah diakses dan berdampak nyata.
            </p>
        <button id="btnScroll" class="bg-[#5e6f52] rounded-full px-6 py-2 text-white transition-all duration-300 ease-in-out 
                     hover:scale-105 hover:bg-[#4a5a40] active:scale-95 
                      focus:ring-2 focus:ring-[#5e6f52] focus:ring-opacity-50">
                        Selengkapnya
        </button>
        </div>
    </div>
    <div id="visi-misi" class="py-20 mt-10 hidden opacity-0 opacity-100 transition-opacity duration-700 " data-aos="fade-up"">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl text-4xl font-black mb-12">Visi & Misi Binary Waste</h2>
        
        <div class="grid grid-cols-2 gap-12">
            <div class="bg-white p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105 duration-300 ease-in-out">
                <h3 class="text-2xl font-semibold mb-6 text-[#5e6f52]">Visi</h3>
                <p class="text-lg text-gray-700 text-justify">
                    Binary Waste hadir sebagai jembatan antara masyarakat dan lingkungan yang lebih baik—sebuah platform sebagai solusi digital dalam pengelolaan dan pemantauan sampah ilegal yang berbasis kolaborasi masyarakat, dengan mengintegrasikan teknologi, edukasi, dan aksi nyata untuk menciptakan lingkungan yang bersih, sehat, serta mendukung tercapainya kota berkelanjutan dan kehidupan masyarakat yang lebih peduli terhadap lingkungan menuju Indonesia Emas 2045.
                </p>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105 duration-300 ease-in-out">
                <h3 class="text-2xl font-semibold mb-6 text-[#5e6f52]">Misi</h3>
                <ul class="list-disc pl-5 space-y-4 text-lg text-gray-700 ">
                    <li class="">Membangun kesadaran masyarakat tentang pengelolaan sampah dan pentingnya kebersihan.</li>
                    <li class="justify-center">Memberikan solusi berbasis teknologi untuk mempermudah pemantauan sampah ilegal.</li>
                    <li>Melibatkan semua pihak melalui kolaborasi yang erat untuk mencapai tujuan lingkungan yang lebih baik.</li>
                    <li>Memberikan edukasi kepada masyarakat tentang daur ulang dan pengelolaan sampah yang berkelanjutan.</li>
                    <li>Menjadi platform utama dalam memimpin Indonesia menuju Indonesia Emas 2045 yang lebih bersih dan hijau.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="binary-buddies" class="py-20 mt-10">
    <div class="max-w-6xl mx-auto text-center bg-blue-100">
        <p class="text-3xl text-4xl font-black mb-12 hidden">Meet The Binary Buddies!</p>  
         
    </div>

</div>
</div>
<script>
  AOS.init();
  document.getElementById('btnScroll').addEventListener('click',()=>{
    const bagian = document.getElementById('visi-misi');
    bagian.classList.remove('hidden');
    setTimeout(() => {
            bagian.classList.add('opacity-100');
            bagian.classList.remove('opacity-0');   
            AOS.refresh();
            bagian.scrollIntoView({ behavior: 'smooth' });
    }, 10);    
  });
</script>

@endsection 