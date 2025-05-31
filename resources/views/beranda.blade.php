@extends('components.layout')
@section('title', 'Beranda')
@section('content')
    <section class="relative w-full h-auto pb-2  -mt-40 mb-8 bg-[#5e6f52]">
        <div class="absolute inset-0 md:h-screen h-[50rem] bg-cover opacity-90"
            style="background-videos: url('{{ asset('build/images/trashBeranda.jpg') }}')">
            <video class="md:absolute inset-0 h-full w-full object-cover" autoplay muted loop playsinline>
                <source src="{{ asset('build/videos/vidio kelompok terbaik.mp4') }}" type="video/mp4" />
                Browser Anda tidak mendukung video.
            </video>
            <div class="absolute pb-2 inset-0 bg-gradient-to-r  from-black/80 via-black/60 to-transparent"></div>
        </div>


        <div class="relative z-10 max-w-screen-xl mx-auto px-6 pt-60">
            <div class="flex flex-col lg:flex-row items-start">


                <div class="w-full lg:w-250 space-y-6">
                    <p
                        class="text-4xl md:text-4xl lg:text-4xl mt-20 font-bold font-black font-sans md:mb-20 mb-15 text-white">
                        Digital Solution for a Zero-Waste World!</p>

                    <h2 class="font-bold font-monospace text-2xl text-white">Hai, Binarians!</h2>
                    <p class="text-xl text-center md:text-start tracking-wide text-white">
                        Saatnya ambil peran dan jadi bagian dari perubahan untuk lingkungan yang lebih bersih dan sehat
                        bersama Binary Waste.
                        Gabung sekarang, karena bumi kita butuh suara dan tindakanmu!
                    </p>

                    <div class="w-full sm:w-auto text-center sm:text-left mt-4">
                        <a href="{{ route('register') }}"
                            class="bg-white text-[#5e6f52] font-semibold px-6 py-3 rounded-full shadow-md hover:bg-gray-200 transition">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>


            </div>

            <div class="flex justify-center mt-8 px-4">
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-1 lg:grid-cols-3">

                    <a href="/blogs" class="flex justify-center">
                        <article
                            class="flex flex-col items-center justify-center w-full max-w-xs text-center bg-white text-black rounded-xl shadow-lg p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-gray-100">
                            <div class="bg-[#ccc14e] p-4 rounded-full mb-4">
                                <img src="{{ asset('build/images/suaraWarga.png') }}" alt="suara warga"
                                    class="w-10 h-10 hover:rotate-20 transform-all duration-300 hover:h-11 hover:w-11">
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 mb-2">Suara Warga</h2>
                            <p class="text-sm text-gray-600 leading-snug">
                                Tempat bagi masyarakat untuk menyuarakan aspirasi dan keluhan demi lingkungan yang lebih
                                baik.
                            </p>
                        </article>
                    </a>

                    <a href="gerakans" class="flex justify-center">
                        <article
                            class="flex flex-col items-center justify-center w-full max-w-xs text-center bg-white text-black rounded-xl shadow-lg p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-gray-100">
                            <div class="bg-[#ccc14e] p-4 rounded-full mb-4">
                                <img src="{{ asset('build/images/gerakan.png') }}" alt="sampah"
                                    class="w-10 h-10 hover:rotate-20 transform-all duration-300 hover:h-11 hover:w-11">
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 mb-2">Gerakan Peduli Sampah</h2>
                            <p class="text-sm text-gray-600 leading-snug">
                                Ajak masyarakat untuk bersama menjaga kebersihan lewat aksi nyata dan kolaborasi.
                            </p>
                        </article>

                    </a>

                    <a href="report" class="flex justify-center">
                        <button id="tombolDitekan" class="w-full max-w-xs">
                            <article
                                class="flex flex-col items-center justify-center text-center bg-white text-black rounded-xl shadow-lg p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-gray-100">
                                <div class="bg-[#ccc14e] p-4 rounded-full mb-4">
                                    <img src="{{ asset('build/images/hero.png') }}" alt="hero"
                                        class="hover:rotate-20 transform-all duration-300 hover:h-11 hover:w-11 ease-in-out w-10 h-10">
                                </div>
                                <h2 class="text-xl font-bold text-gray-800 mb-2">Sahabat Bumi</h2>
                                <p class="text-sm text-gray-600 leading-snug">
                                    Sahabat setia bumi yang selalu hadir menjaga kebersihan dan kelestarian lingkungan
                                    bersama Binary Waste.
                                </p>
                            </article>
                        </button>
                    </a>

                </div>
            </div>

        </div>

        <section class="mt-12 px-4 font-inter">
            <div class="max-w-[73.5rem]  mx-auto p-8 rounded-2xl shadow-xl bg-white">
                <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                    <div class="flex flex-col items-center">
                        <p id="numberCount" data-max="{{ $jumlahmitra }}"
                            class="text-4xl md:text-5xl font-extrabold text-gray-900"></p>
                        <p class="text-base md:text-lg text-gray-500 mt-2">Mitra Terafiliasi</p>
                    </div>

                    <div class="flex flex-col items-center">
                        <p id="numberCount1" data-max="{{ $jumlahuser }}"
                            class="text-4xl md:text-5xl font-extrabold text-gray-900"></p>
                        <p class="text-base md:text-lg text-gray-500 mt-2">Binarians Terdaftar</p>
                    </div>

                    <div class="flex flex-col items-center">
                        <p id="numberCount2" data-max="{{ $jumlahlaporan }}"
                            class="text-4xl md:text-5xl font-extrabold text-gray-900"></p>
                        <p class="text-base md:text-lg text-gray-500 mt-2">Laporan Diterima</p>
                    </div>

                    <div class="flex flex-col items-center">
                        <p id="numberCount3" data-max="{{ $jumlahgerakan }}"
                            class="text-4xl md:text-5xl font-extrabold text-gray-900"></p>
                        <p class="text-base md:text-lg text-gray-500 mt-2">Gerakan Terealisasi</p>
                    </div>
                </div>
            </div>
        </section>

    </section>
    <svg class="-mt-10 md:-mt-8 lg:-mt-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5e6f52" fill-opacity="1"
            d="M0,96L48,96C96,96,192,96,288,90.7C384,85,480,75,576,101.3C672,128,768,192,864,186.7C960,181,1056,107,1152,74.7C1248,43,1344,53,1392,58.7L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z" />
    </svg>

    <section class="bg-white px-6 pb-40 lg:pb-0 -mt-20 lg:-mt-60 md:px-20">
        <div class="flex flex-col lg:flex-row items-center gap-10" data-aos="zoom-out-up">

            <div class="w-full lg:w-1/2 md:-mt-30 flex justify-center">
                <img src="{{ asset('build/images/Desain tanpa judul.gif') }}" alt="Binary Waste" class="w-full max-w-2xl">
            </div>

            <div class="w-full lg:w-1/2 text-center lg:text-left md:-mt-40 -mt-30 lg:mt-0">
                <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-4 leading-tight">
                    Bersama Kita Bisa<br><span class="text-green-500">Mengubah Lingkungan</span>
                </h2>
                <p class="text-gray-700 text-lg mb-6">
                    "Kami percaya bahwa perubahan besar dimulai dari langkah kecil.
                    <br class="hidden md:block">
                    <span class="text-green-600 font-semibold">Binary Waste</span> hadir untuk menghubungkan
                    <span class="text-green-600 font-semibold">teknologi</span>, <span
                        class="text-green-600 font-semibold">komunitas</span>, dan
                    <span class="text-green-600 font-semibold">kesadaran lingkungan</span> demi masa depan Indonesia yang
                    lebih baik."
                </p>

                <button id="btnMitra"
                    class="block bg-[#57674c] text-white px-6 py-3 rounded-full mt-5 shadow-md hover:bg-[#ccc14e] transition mx-auto lg:mx-0">
                    Gabung Sebagai Mitra
                </button>

                <div class="mt-8 flex justify-center lg:justify-start gap-6 flex-wrap ">
                    <img src="{{ asset('build/images/usu.png') }}" alt="USU"
                        class="w-12 h-12 md:w-15 md:h-15 lg:w-20 lg:h-20 object-contain">
                    <img src="{{ asset('build/images/ui.png') }}" alt="UI"
                        class="w-12 h-12 lg:w-20 lg:h-20 md:w-15 md:h-15 object-contain">
                    <img src="{{ asset('build/images/unilever.png') }}" alt="Unilever"
                        class="w-12 h-12 lg:w-20 lg:h-20 md:w-15 md:h-15 object-contain">
                </div>
            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" class="-mt-8 md:-mb-10 lg:-mt-60" viewBox="0 0 1440 320">
        <path fill="#5e6f52" fill-opacity="1"
            d="M0,96L48,96C96,96,192,96,288,90.7C384,85,480,75,576,101.3C672,128,768,192,864,186.7C960,181,1056,107,1152,74.7C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z" />
    </svg>

    <section class="bg-[#5e6f52] -mt-6  px-6 lg:-mt-20 lg:px-0 pb-20 lg:pb-80">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-6">

            <div class="rounded-2xl shadow-lg bg-white flex flex-col gap-6 p-6  lg:w-1/3" data-aos="fade-up"
                data-aos-duration="1000">
                <img src="{{ asset('build/images/tips.svg') }}" alt=""
                    class="w-80 mx-auto pt-5 object-cover rounded-xl -mt-4 hover:scale-105 transition duration-300 ease-in-out">
                <div>
                    <div class="flex items-center mb-4 -mt-15">
                        <img src="{{ asset('build/images/rose.svg') }}" class="h-10 w-10" alt="">
                        <p class="text-2xl font-black font-sans ml-2">Tips Penggunaan</p>
                    </div>
                    <ul class="list-disc pl-5 space-y-2 text-gray-700 text-sm md:text-base">
                        <li>Buat akun dulu supaya semua fitur bisa kamu akses</li>
                        <li>Laporkan sampah lengkap dengan lokasi dan foto agar cepat diterima</li>
                        <li>Rajin cek dashboard untuk pantau status laporanmu</li>
                        <li>Ikut serta dalam event dan gerakan untuk dampak yang lebih besar</li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col gap-6 lg:w-2/3">

                <div class="rounded-2xl shadow-lg bg-white p-6 flex flex-col lg:flex-row gap-4" data-aos="fade-left"
                    data-aos-duration="1000">
                    <div class="lg:w-2/3">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('build/images/list.svg') }}" class="h-8 mr-2" alt="">
                            <p class="text-2xl font-black font-sans">Fitur Binary Waste</p>
                        </div>
                        <ul class="list-decimal pl-5 space-y-2 text-gray-700 text-sm md:text-base">
                            <li>Lapor Sampah</li>
                            <li>Event dan Gerakan Komunitas</li>
                            <li>Edukasi dan Artikel Lingkungan</li>
                            <li>Pantau Status Laporan</li>
                            <li>Jadi Mitra Binary Waste</li>
                        </ul>
                    </div>
                    <div class="flex justify-center items-center lg:w-1/3">
                        <img src="{{ asset('build/images/uwow.svg') }}"
                            class="h-50 object-contain hover:scale-110 transition duration-300" alt="">
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-6">

                    <div class="rounded-2xl shadow-lg bg-white p-6 md:w-1/2" data-aos="zoom-in-up"
                        data-aos-duration="1000">
                        <p class="mb-3 text-center text-sm md:text-base font-medium text-gray-700">Yuk, Ajak Teman dan
                            Keluarga Peduli Lingkungan!</p>
                        <img src="{{ asset('build/images/teman.svg') }}" alt=""
                            class="h-40 w-full  rounded-lg object-cover hover:scale-105 transition duration-300 ease-in-out">
                    </div>

                    <div class="rounded-2xl shadow-lg bg-white p-6 flex flex-col justify-center items-center md:w-1/2 text-center"
                        data-aos="fade-up" data-aos-delay="200">
                        <p class="font-black text-5xl md:text-6xl text-green-700 animate-pulse">120</p>
                        <p class="text-sm md:text-base mt-2 text-gray-700">Bersama Binary Waste, sudah ada <span
                                class="font-semibold text-green-600">120 jiwa</span> yang tergerak untuk membuat lingkungan
                            lebih bersih dan sehat</p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" class="-mt-20 md:-mb-1  lg:-mt-80" viewBox="0 0 1440 320">
        <path fill="white" fill-opacity="1"
            d="M0,96L48,96C96,96,192,96,288,90.7C384,85,480,75,576,101.3C672,128,768,192,864,186.7C960,181,1056,107,1152,74.7C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z" />
    </svg>


    <section id="mitra">

        <div class="w-full max-w-6xl  mx-auto text-center mb-30 lg:mb-10 md:mb-10">
            <p class="text-3xl md:text-4xl lg:text-5xl  font-bold text-[#5e6f52]" data-aos="fade-up"
                data-aos-duration="1000">
                Jadilah Bagian dari <span class="text-green-800">Perubahan</span>,<br>
                <span class="text-[#3e4936]">Bergabunglah sebagai Mitra Kami!</span>
            </p>

        </div>

        <div class="min-h-screen bg-[#5e6f52]  flex items-center justify-center px-4 py-12 -mb-22 bg-cover bg-center"
            style="background-image: url('{{ asset('build/images/WaveLine.svg') }}')">
            <div class="flex flex-col lg:flex-row bg-white shadow-2xl rounded-3xl p-6 md:p-10 w-full max-w-6xl -mt-50"
                data-aos="zoom-in" data-aos-duration="800">

                <div class="w-full  lg:w-1/2">
                    @if (session('success'))
                        <div class="bg-green-100 text-green-700 p-2 rounded mb-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="bg-red-100 text-green-700 p-2 rounded mb-3">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('Mitra.kirim') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-4">
                        @csrf

                        <input type="text" name="namaMitra" placeholder="Nama Mitra"
                            class="w-full py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-4 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">

                        <input type="text" name="emailMitra" placeholder="Email Mitra"
                            class="w-full py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-4 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">

                        <input type="text" name="kontak" placeholder="Kontak Mitra"
                            class="w-full py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-4 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">

                        <select name="kategoriMitra" required
                            class="w-full py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-4 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
                            <option disabled selected value="">Pilih Kategori Mitra</option>
                            <option value="Komunitas Lingkungan">Komunitas Lingkungan</option>
                            <option value="Lingkungan Hidup">Lingkungan Hidup</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Keagamaan">Keagamaan</option>
                            <option value="Kesehatan">Kesehatan</option>
                            <option value="Lainya">Lainya</option>
                        </select>

                        <input type="text" name="alamatMitra" placeholder="Alamat Mitra"
                            class="w-full py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-4 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">

                        <input type="text" name="medsos" placeholder="Instagram/Facebook/LinkedIn"
                            class="w-full py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-4 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">

                        <input type="file" name="logo"
                            class="w-full py-2.5 px-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-4 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">

                        @guest
                            <button type="button" id="mitraClick"
                                class="w-full p-2 md:p-3 bg-[#687161] text-white rounded-lg hover:bg-[#7b8374] transition">
                                Kirim (Login Diperlukan)
                            </button>
                        @else
                            <button type="submit"
                                class="w-full bg-[#5e6f52] text-white font-semibold py-3 rounded-full shadow-md hover:bg-[#4e5f42] transition duration-300 ease-in-out transform hover:scale-105">
                                Kirim
                            </button>
                        @endguest

                    </form>
                </div>

                <div class="w-full lg:w-1/2 flex flex-col items-center justify-center mt-10 lg:mt-0">
                    <img src="{{ asset('build/images/join.svg') }}" alt="" class="max-h-60 w-auto mb-6">
                    <div class="text-center">
                        <p class="text-xl md:text-2xl font-semibold text-gray-800">Let's go, <span
                                class="text-green-600">Mitra!</span></p>
                        <p class="text-sm text-gray-500 mt-1">Satu klik lagi untuk mulai beraksi 🚀</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div id="mitrabtn"
        class="fixed top-1/3 left-1/2 -translate-x-1/2 bg-white p-4 md:p-8 rounded-xl shadow-lg hidden opacity-0 transform-all transition-opacity duration-700 ease-in-out z-50 max-w-xs md:max-w-md w-full">
        <button type="button" id="btnMitraClose"
            class="absolute top-4 left-4 hover:scale-105 hover:rotate-180 transform-all duration-700 ease-in-out ">
            <img src="{{ asset('build/images/no1.png') }}" alt="" srcset="" class="h-5">
        </button>
        <img src="{{ asset('build/images/sorry.png') }}" alt="" class="h-10 mx-auto ">
        <p class="text-lg md:text-xl font-semibold text-center text-gray-700">Silakan login terlebih dahulu yaa!</p>
        <a href="{{ route('login') }}"
            class="block mt-4 md:mt-6 px-4 py-2 md:px-6 md:py-3 bg-[#687161] text-white rounded-full text-center hover:bg-[#7b8374] transition">
            Masuk
        </a>
    </div>



    <script>
        AOS.init();
        let bogem = true;
        const scrollDulu = window.scrollY;

        function kiyomasa(idnya) {
            window.addEventListener('scroll', () => {
                const scrollSekarang = window.scrollY;

                if (bogem && (scrollSekarang - scrollDulu > 100)) {
                    let a = 0;
                    const b = document.getElementById(idnya);
                    const max = parseInt(b.dataset.max);

                    const interval = setInterval(() => {
                        a++;
                        b.innerHTML = String(a).padStart(3, '0');

                        if (a >= max) {
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

        // document.getElementById('mitraClick').addEventListener('click', () => {
        //     const reportPopup = document.getElementById('mitrabtn');
        //     reportPopup.classList.remove('hidden');
        //     setTimeout(() => {
        //         reportPopup.classList.add('opacity-100');
        //         reportPopup.classList.remove('opacity-0');
        //         AOS.refresh();
        //         reportPopup.scrollIntoView({ behavior: 'smooth' });
        //     }, 10);
        // });

        //   document.getElementById('btnMitraClose').addEventListener('click', () => {
        //     const reportPopup = document.getElementById('mitratbtn');
        //     reportPopup.classList.add('hidden');
        //     setTimeout(() => {
        //         reportPopup.classList.add('opacity-0');
        //         reportPopup.classList.remove('opacity-100');
        //         AOS.refresh();
        //         reportPopup.scrollIntoView({ behavior: 'smooth' });
        //     }, 10);
        // });

        let isActive = true;
        document.getElementById('btnMitra').addEventListener('click', () => {
            const mitra = document.getElementById('mitra');
            mitra.classList.remove('hidden');
            setTimeout(() => {
                mitra.classList.add('opacity-100');
                mitra.classList.remove('opacity-0');
                AOS.refresh();
                mitra.scrollIntoView({
                    behavior: 'smooth'
                });
                isActive = false;
            }, 50);
        });
    </script>
@endsection
