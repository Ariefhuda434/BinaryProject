@extends('components.layout')

@section('title', 'tentang')

@section('content')
 <x-header></x-header> <div class="mx-auto mt-43"> <div class="text-center mb-10"> <h1 class="font-black text-4xl text-6xl font-sans">Sekilas Tentang Binary Waste</h1> </div>

    <div class="flex lg:flex-row items-center ">
        <div class="mr-10">
            <img src="{{ asset('build/images/tentangimages.png') }}" 
                 alt="tentang binary waste" 
                 class="ml-20 h-80">
        </div>

        <div class=" w-3/5 ">
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

    <div id="visi-misi" class="py-20 mt-10 h-screen hidden opacity-0 opacity-100 transition-opacity duration-700 " data-aos="fade-up" data-aos-duration="3000">
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

<div id="binary-buddies" class="py-20 mt-10 hidden" data-aos="fade-up" data-aos-duration="3000">
    <div class="max-w-8xl mx-auto p-10 rounded-lg">
        <p class="text-4xl font-black mb-12 text-center">Meet The Binary Buddies!</p>  
        <div class="relative w-full flex justify-center items-center">
            <div id="imagesGanteng" class="flex gap-6">
                <img id="imagesGanteng" class="flex gap-6 transition-transform duration-500 ease-in-out">
            </div>
            <!-- Tombol Geser -->
            <button onclick="slebew('left')" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-[#5e6f52] text-white p-4 rounded-full">
                &#8249;
            </button>
            <button onclick="slebew('right')" class="absolute right-0 top-1/2 transform -translate-y-1/2  bg-[#5e6f52] text-white p-4 rounded-full">
                &#8250;
            </button>
        </div>
    </div>
</div>
</div>
<footer class="mt-70 p-30 bg-[#5e6f52] w-screen flex items-center justify-center py-20">
    <p class="text-white border-t border-white pt-4 px-6">© 2025 BinaryWaste. All rights reserved.</p>
 </footer>
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
window.addEventListener('scroll', () => {
    if (!isActive) {
        const binary = document.getElementById('binary-buddies');
        const visiMisi = document.getElementById('visi-misi');
        const rect = visiMisi.getBoundingClientRect();

        
            binary.classList.remove('hidden');
            setTimeout(() => {
                binary.classList.add('opacity-100');
                binary.classList.remove('opacity-0');
                AOS.refresh();
            }, 10);
            isActive = true; 
        }
    });


    const images = document.getElementById('imagesGanteng');
    const DataFoto = [
        "{{ asset('build/images/tokoh1.jpg') }}",
        "{{ asset('build/images/fotoarief.jpg') }}",
        "{{ asset('build/images/fotoarief.jpg') }}",
        "{{ asset('build/images/fotoarief.jpg') }}",
        "{{ asset('build/images/fotoarief.jpg') }}",
    ];

    let startIndex = 0;

    function wadidaw() {
        images.innerHTML = '';  
        for (let i = 0; i < 3; i++) {
            const index = (startIndex + i) % DataFoto.length;
            const img = document.createElement('img');
            img.src = DataFoto[index];
            img.className = 'rounded-full h-64 w-64 border-4 border-white shadow-md transition-all duration-500 ease-in-out';
            images.appendChild(img);
            if (i === 1) {
                img.classList.add('scale-110', 'ring-4', 'ring-[#5e6f52]');
            } else {
                img.classList.add('opacity-80');
            }
        }
    }

    function slebew(direction) {
        const step = 280;
        if (direction === 'left') {
            startIndex = (startIndex - 1 + DataFoto.length) % DataFoto.length;
        } else if (direction === 'right') {
            startIndex = (startIndex + 1) % DataFoto.length;
        }
        wadidaw();

        const imgs = images.querySelectorAll('img');

        imgs.forEach((img, index) => {
            img.style.transition = 'transform 0.5s ease-in-out';
            if (index === 0) {
                img.style.transform = 'translateX(-20px)';
            } else if (index === 1) {
                img.style.transform = 'translateX(0)';
            } else if (index === 2) {
                img.style.transform = 'translateX(20px)';
            }
        });

        setTimeout(() => {
            imgs.forEach((img) => {
                img.style.transition = 'transform 0s';
                img.style.transform = 'translateX(0)';
            });
        }, 500); // Waktu setelah animasi selesai
    }

    wadidaw();  
</script>


@endsection
