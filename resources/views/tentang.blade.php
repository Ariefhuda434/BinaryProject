@extends('components.layout')

@section('title', 'tentang')

@section('content')

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
                    <img src="{{ asset('build/images/Video.gif') }}" alt="Ilustrasi Binary Waste"
                        class="md:w-full w-60 max-w-md mx-auto md:h-[300px] object-contain">
                </div>
                <div class="md:w-500">
                    <p
                        class="md:text-xl indent-8 text-justify font-sans font-normal text-gray-700 leading-relaxed text-center ">
                        Binary Waste adalah sebuah platform digital berbasis web yang dikembangkan sebagai solusi inovatif
                        dalam pengelolaan sampah secara berkelanjutan. Platform ini lahir dari kepedulian terhadap isu
                        lingkungan serta rendahnya kesadaran masyarakat akan pentingnya pengelolaan sampah yang efektif.
                        Binary Waste hadir untuk memfasilitasi partisipasi aktif masyarakat dalam pelaporan pembuangan
                        sampah ilegal dan kolaborasi aksi lingkungan secara langsung, melalui sistem yang mudah diakses dan
                        berdampak nyata.
                    </p>

                    <div class="text-center ro md:text-left mt-6">
                        <button id="btnScroll"
                            class="bg-[#5e6f52] rounded-full px-6 py-3 text-white text-sm md:text-base shadow-md hover:bg-[#4a5a40] transition-all">
                            Selengkapnya
                        </button>
                    </div>
                </div>


            </div>
        </section>
        <div class="bg-[#a9b388]">

            <div class="bg-[#a8b387]">
                <div class="mt-4 min-w-full">
                    <div class=" bg-[#5e6f52] h-30 md:h-60 flex">
                        <img src="{{ asset('build/images/test1.jpg') }}" alt="" srcset=""
                            class="md:m-5 m-2 h-26 md:h-50 lg:h-50 lg:w-1/2  md:w-1/3 bg-white object-cover object-bottom">
                        <img src="{{ asset('build/images/fotokerjasama.jpg') }}" alt="" srcset=""
                            class="lg:h-full lg:w-[30rem] md:h-60 w-40 md:w-2/3 bg-white">
                        <div class="md:h-30 md:mt-30 md:w-30 h-1/2 w-15 bg-[#fefadf]"></div>
                        <div class="md:h-full md:w-30 w-15 h-1/2 bg-[#ccc14e]"></div>
                    </div>

                </div>
            </div>

            <div id="visi-misi" class="mt-10 p-5  min-w-full transition-opacity duration-700">
                <div class="relative w-full lg:w-[71rem] md:w-3/4 mx-auto pb-10 h-150 md:h-85 bg-center rounded-xl shadow-lg overflow-hidden"
                    data-aos="fade-up" data-aos-duration="1000">
                    <div class="absolute inset-0 bg-cover bg-top  bg-no-repeat lg:bg-right  md:flex md:justify-end"
                        style="background-image: url('{{ asset('build/images/trashberanda.jpg') }}')">
                        <div class="absolute bottom-2 right-2 md:bottom-4 md:right-4 flex items-center space-x-2 z-10">
                            <img src="{{ asset('build/images/logoputih.png') }}" alt="Logo"
                                class="h-8 md:h-10 bg-cover">
                            <div class="text-white">
                                <p class="font-bold text-xs md:text-sm">BINARY WASTE</p>
                                <p class="text-[0.35rem] md:text-[0.42rem]">Digital Solution for a Zero-Waste World!</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative z-20 w-full md:w-3/4 h-auto lg:h-85 bg-[#5e6f52] md:rounded-l-lg md:rounded-br-[7rem] shadow-xl overflow-hidden">
                        <div class="flex h-full">
                            <div class="lg:w-15 md:w-15 bg-[#ccc14e]"></div>

                            <div class="flex-1 p-6 md:p-10">
                                <p
                                    class="text-black font-sans leading-tight text-3xl md:text-5xl text-white font-extrabold text-center relative z-10 tracking-tight">
                                    Visi & Misi
                                </p>

                                <p
                                    class="px-4 md:px-10 mt-6 md:mt-5 lg:mt-0 text-justify text-sm md:text-lg text-gray-100 font-sans font-light relative z-10 indent-8 leading-relaxed">
                                    <span class="block mb-4">
                                        Binary Waste hadir sebagai jembatan antara masyarakat dan lingkungan yang lebih baik
                                        sebuah platform digital yang menjadi solusi dalam pengelolaan dan pemantauan sampah
                                        ilegal berbasis kolaborasi masyarakat.
                                        Dengan mengintegrasikan <span class="font-medium text-green-600">teknologi, edukasi,
                                            dan aksi nyata</span>, kami menciptakan lingkungan yang bersih, sehat, dan
                                        mendukung tercapainya <span class="italic text-green-500">kota berkelanjutan</span>,
                                        serta kehidupan masyarakat yang lebih peduli terhadap lingkungan menuju <span
                                            class="font-semibold text-white">Indonesia Emas 2045</span>.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="lg:w-[71rem] md:w-full w-full max-w-6xl mx-auto mt-5 bg-white shadow-xl rounded-xl p-6 lg:p-5 md:p-8 flex flex-col md:flex-row items-center gap-6 md:gap-8"
                    data-aos="fade-up" data-aos-duration="1000">

                    <div class="flex-1 text-center md:text-left">
                        <p class="text-2xl md:text-3xl font-extrabold text-[#5e6f52] font-sans leading-snug">
                            Dukungan Kami terhadap SDGs
                        </p>
                        <p class="mt-3 text-gray-700 text-sm md:text-base leading-relaxed font-sans">
                            Kami percaya bahwa masa depan yang bersih dan berkelanjutan<br class="hidden md:block">
                            dimulai dari <span class="font-semibold text-[#5e6f52]">aksi nyata</span> dan
                            <span class="font-semibold text-[#5e6f52]">teknologi yang tepat</span>.
                        </p>
                    </div>

                    <div class="flex flex-wrap justify-center gap-4">
                        <img src="{{ asset('build/images/sdg11.png') }}" alt="SDG 11"
                            class="h-20 w-20 md:h-30 md:w-30 rounded-lg object-cover hover:scale-110 hover:shadow-xl transition duration-300 ease-in-out">
                        <img src="{{ asset('build/images/sdg12.png') }}" alt="SDG 12"
                            class="h-20 w-20 md:h-30 md:w-30 rounded-lg object-cover hover:scale-110 hover:shadow-xl transition duration-300 ease-in-out">
                        <img src="{{ asset('build/images/sdg13.png') }}" alt="SDG 13"
                            class="h-20 w-20 md:h-30 md:w-30 rounded-lg object-cover hover:scale-110 hover:shadow-xl transition duration-300 ease-in-out">
                        <img src="{{ asset('build/images/sdg17.png') }}" alt="SDG 17"
                            class="h-20 w-20 md:h-30 md:w-30 rounded-lg object-cover hover:scale-110 hover:shadow-xl transition duration-300 ease-in-out">
                    </div>

                </div>

            </div>
            <div class="mt-6 flex rounded-xl h-100 md:w-full w-[24.5rem]   lg:w-3/4 mx-auto bg-white  overflow-visible"
                data-aos="fade-up" data-aos-duration="1000">
                @php
                    $profiles = [
                        [
                            'target' => '1',
                            'name' => 'Winson Pardede',
                            'role' => 'Full Stack Developer',
                            'desc' => 'Bolivia, Bocah Liar Helvetia',
                            'img' => asset('build/images/ariefganteng.png'),
                        ],
                        [
                            'target' => '2',
                            'name' => 'Nahya Syahkira Ketaren',
                            'role' => 'Full Stack Developer',
                            'desc' => 'Kembaran Arief dari Multiverse',
                            'img' => asset('build/images/ariefganteng.png'),
                        ],
                        [
                            'target' => '3',
                            'name' => 'Bill Randa Silangit',
                            'role' => 'Full Stack Developer',
                            'desc' => 'Kembaran Arief dari Multiverse',
                            'img' => asset('build/images/ariefganteng.png'),
                        ],
                        [
                            'target' => '4',
                            'name' => 'Syarifah Khadijah',
                            'role' => 'Full Stack Developer',
                            'desc' => 'Kembaran Arief dari Multiverse',
                            'img' => asset('build/images/ariefganteng.png'),
                        ],
                        [
                            'target' => '5',
                            'name' => 'King Arief',
                            'role' => 'Full Stack Developer',
                            'desc' => 'Kembaran Arief dari Multiverse',
                            'img' => asset('build/images/ariefganteng.png'),
                        ],
                    ];
                @endphp

                <div class="relative w-full  mx-auto mt-6 overflow-hidden  bg-white rounded-lg flex flex-nowrap overflow-x-auto snap-x snap-mandatory"
                    id="slider" style="scroll-behavior: smooth;  scrollbar-width: none;  ">
                    @foreach ($profiles as $index => $profile)
                        <div id="target{{ $profile['target'] }}"
                         class="inline-block flex-shrink-0 w-full snap-center text-center px-4">
                            <div class="text-center mb-6">
                                <h2 class="text-2xl md:text-3xl font-extrabold text-[#5e6f52]">Binary Buddies</h2>
                                <p class="text-sm text-gray-500">Temui mereka yang berdedikasi untuk perubahan</p>
                            </div>
                            <img src="{{ $profile['img'] }}" alt="Foto {{ $profile['name'] }}"
                                class="h-100 ml-18 drop-shadow-lg -mt-16 -mb-25"
                                style="filter: drop-shadow(0 4px 6px rgba(204,193,78,1));">
                            <p class="text-lg font-semibold text-gray-800">{{ $profile['name'] }}</p>
                            <p class="text-sm text-gray-600">{{ $profile['role'] }}</p>
                            <p class="mt-3 text-sm italic text-gray-500 max-w-xs mx-auto">{{ $profile['desc'] }}</p>
                        </div>
                    @endforeach
                    {{-- <svg viewBox="0 0 1440 320" class="absolute bottom-0 left-0 w-full h-10" preserveAspectRatio="none">
       <path fill="#5e6f52" fill-opacity="0.2" d="M0,288L48,272C96,256,192,224,288,202.7C384,181,480,171,576,192C672,213,768,267,864,266.7C960,267,1056,213,1152,176C1248,139,1344,117,1392,106.7L1440,96V320H0Z"></path>
     </svg> --}}
                </div>




                <div class="h-full hidden md:block w-2/3 bg-[#5e6f52] relative rounded-r-lg ml-auto ">
                    <div class="flex ">
                        <div class="flex">
                            <div class="flex mt-5 flex-col">
                                <div id="babangwinson" onclick="aguslaparbuk('babangwinson','target1')" class="relative ml-9 lg:w-80 md:w-60 h-45 hover:scale-105 transform-all duration-700 ease-in-out">
                                    <article
                                        class="bg-[#fefae0] overflow-hidden w-full h-full"
                                        style="clip-path: polygon(0% 0, 50% 0, 80% 100%, 0% 100%)">
                                    </article>
                                    <img src="{{ asset('build/images/winson.png') }}" alt=""
                                        class="h-80 absolute top-[-140px] left-[-30px] z-10">
                                </div>

                                <div class="relative ml-9 w-166 mt-5 h-40 overflow-visible"
                                id="kakaknahya" onclick="aguslaparbuk('kakaknahya','target2')"
                                >
                                    <article
                                        class="bg-[#fefae0] transition-transform duration-300 ease-in-out hover:scale-105  drop-shadow-lg drop-shadow-cyan-500/50  w-full h-full"
                                        style="clip-path: polygon(0% 0, 40% 0, 53% 100%, 0% 100%)">
                                    </article>
                                    <img src="{{ asset('build/images/nahya.png') }}" alt=""
                                        class="h-60 absolute  top-[-80px] left-[70px] z-21">
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex">
                                    <div class="mt-5 -ml-120 w-80 h-45"
                                       id="babangbill" onclick="aguslaparbuk('babangbill','target3')"
                                    >
                                        <article
                                            class="bg-[#fefae0] bg-cover transition-transform duration-300 ease-in-out w-full h-full"
                                            style="clip-path: polygon(0% 0, 60% 0, 30% 100%, 30% 100%)">
                                        </article>
                                        <img src="{{ asset('build/images/bill.png') }}" alt="" srcset=""
                                            class="h-80 absolute top-[-120px] left-[190px] z-10">
                                    </div>
                                    <div class="relative -ml-50 mt-5 w-81 h-45"
                                       id="kakros" onclick="aguslaparbuk('kakros','target4')"
                                    >
                                        <article
                                            class="bg-[#fefae0] transition-transform duration-300 ease-in-out hover:scale-105 hover:drop-shadow-lg hover:drop-shadow-cyan-500/50 h w-full h-full"
                                            style="clip-path: polygon(30% 0, 100% 0, 100% 100%, 0% 100%)">
                                        </article>
                                        <img src="{{ asset('build/images/ipeh.png') }}" alt=""
                                            class="h-90 absolute  top-[-180px] left-[30px] z-10">
                                    </div>
                                </div>
                                <div class="relative -ml-[23.5rem] mt-5 mb-5 w-[21.25rem] h-40"
                                id="maharajakingariefhudadragonball" onclick="aguslaparbuk('maharajakingariefhudadragonball','target5')"
                                >
                                    <article
                                        class="bg-[#fefae0] from-white to-green-900 transition-transform duration-300 ease-in-out hover:scale-105 hover:drop-shadow-lg hover:drop-shadow-cyan-500/50 hover:z-10 w-full h-full"
                                        style="clip-path: polygon(0% 0, 100% 0, 100% 100%, 26% 100%)">
                                        <img src="{{ asset('build/images/Rect.svg') }}" alt="" class=" h-60">
                                      </article>
                                    <img src="{{ asset('build/images/ariefhuda.png') }}" alt=""
                                        class="h-[21rem] absolute top-[-176px] left-[40px] z-21">
                                    <div class="absolute -bottom-5 left-0 w-full h-[20px] bg-[#5e6f52] z-20"></div>
                                </div>
                            </div>
                            <img src="{{ asset('build/images/NEW PRODUCT.png') }}" alt="" srcset=""
                                class="absolute h-80 left-25 top-10 z-20">
                            <img src="{{ asset('build/images/binarytext2.png') }}" alt="" srcset=""
                                class="absolute h-70 left-35 top-40 z-22">
                        </div>
                        <div
                            class="h-100 w-30 bg-[#ccc14e] rounded-r-lg ml-auto text-white flex items-center justify-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class=" lg:hidden h-120 md:h-120  rounded-b-xl space-y-2 w-[24.5rem] bg-[#5e6f52] mx-auto p-5 ">
                <article
                    class="w-88 h-40 bg-white flex items-end overflow-hidden 
  transition-transform duration-300 ease-in-out hover:scale-105 hover:drop-shadow-lg hover:drop-shadow-cyan-500/50 hover:z-10"
                    style="clip-path: polygon(0% 0, 100% 0, 0% 100%, 0% 100%)">
                    <img src="{{ asset('build/images/ariefhuda.png') }}" alt="Arief Huda"
                        class="h-60 object-left -mb-5" />
                </article>
                <article
                    class="w-88 h-40 bg-white flex items-start overflow-hidden -mt-40  
  transition-transform duration-300 ease-in-out relative hover:scale-105 hover:drop-shadow-lg hover:drop-shadow-cyan-500/50 hover:z-10"
                    style="clip-path: polygon(100% 0, 100% 0, 100% 100%, 0% 100%)">
                    <img src="{{ asset('build/images/ariefhuda.png') }}" alt="Arief Huda"
                        class="h-60 object-left absolute right-40 -top-18" />
                </article>
                <article
                    class="w-88 h-20 bg-white transition-transform duration-300 ease-in-out hover:scale-105 hover:drop-shadow-lg hover:drop-white  hover:z-10">
                </article>
                <article
                    class="w-88 h-40 bg-white flex items-end overflow-hidden 
  transition-transform duration-300 ease-in-out hover:scale-105 hover:drop-shadow-lg hover:drop-shadow-black hover:z-10"
                    style="clip-path: polygon(0% 0, 100% 0, 0% 100%, 0% 100%)">
                    <img src="{{ asset('build/images/ariefhuda.png') }}" alt="Arief Huda"
                        class="h-60 object-left -mb-5" />
                </article>
                <article
                    class="w-88 h-40 bg-white flex items-start overflow-hidden -mt-40  
  transition-transform duration-300 ease-in-out relative hover:scale-105 hover:drop-shadow-lg hover:drop-black-500/50 hover:z-10"
                    style="clip-path: polygon(100% 0, 100% 0, 100% 100%, 0% 100%)">
                    <img src="{{ asset('build/images/ariefhuda.png') }}" alt="Arief Huda"
                        class="h-60 object-left absolute right-40 -top-18" />
                </article>
            </div>

        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#a8b387" fill-opacity="1"
                d="M0,192L8,165.3C16,139,32,85,48,90.7C64,96,80,160,96,202.7C112,245,128,267,144,250.7C160,235,176,181,192,165.3C208,149,224,171,240,170.7C256,171,272,149,288,154.7C304,160,320,192,336,197.3C352,203,368,181,384,192C400,203,416,245,432,229.3C448,213,464,139,480,101.3C496,64,512,64,528,58.7C544,53,560,43,576,64C592,85,608,139,624,170.7C640,203,656,213,672,229.3C688,245,704,267,720,266.7C736,267,752,245,768,213.3C784,181,800,139,816,117.3C832,96,848,96,864,128C880,160,896,224,912,213.3C928,203,944,117,960,106.7C976,96,992,160,1008,176C1024,192,1040,160,1056,170.7C1072,181,1088,235,1104,256C1120,277,1136,267,1152,224C1168,181,1184,107,1200,80C1216,53,1232,75,1248,101.3C1264,128,1280,160,1296,181.3C1312,203,1328,213,1344,202.7C1360,192,1376,160,1392,160C1408,160,1424,192,1432,208L1440,224L1440,0L1432,0C1424,0,1408,0,1392,0C1376,0,1360,0,1344,0C1328,0,1312,0,1296,0C1280,0,1264,0,1248,0C1232,0,1216,0,1200,0C1184,0,1168,0,1152,0C1136,0,1120,0,1104,0C1088,0,1072,0,1056,0C1040,0,1024,0,1008,0C992,0,976,0,960,0C944,0,928,0,912,0C896,0,880,0,864,0C848,0,832,0,816,0C800,0,784,0,768,0C752,0,736,0,720,0C704,0,688,0,672,0C656,0,640,0,624,0C608,0,592,0,576,0C560,0,544,0,528,0C512,0,496,0,480,0C464,0,448,0,432,0C416,0,400,0,384,0C368,0,352,0,336,0C320,0,304,0,288,0C272,0,256,0,240,0C224,0,208,0,192,0C176,0,160,0,144,0C128,0,112,0,96,0C80,0,64,0,48,0C32,0,16,0,8,0L0,0Z">
            </path>
        </svg>



        <p class="text-3xl md:text-4xl lg:text-5xl  text-center  font-bold text-[#5e6f52]" data-aos="fade-up"
            data-aos-duration="1000">
            ♻️ Sampah itu nggak hilang begitu aja!<br>
            <span class="text-[#3e4936 ] text-2xl">Dukung gerakan ini dengan like, subscribe, dan bagikan ke orang-orang
                terdekatmu.</span>
        </p>
        <div
            class="-mt-28 bg-white px-4 md:px-0 flex  flex-col items-center justify-center shadow-2xl mt-10 rounded-lg w-full md:w-3/4 mx-auto">
            <div class="w-full rounded-t-xl shadow-xl overflow-hidden">
                <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/KOi90t6zIyU?si=KkFswtu6_w2O0n3j"
                    title="Perjalanan Sampah dan Kebersihan Lingkungan" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>

            <h2 class="mt-10 text-2xl md:text-3xl font-bold text-[#5e6f52] mb-6 text-center px-4">
                Perjalanan Sampah & Pentingnya Kebersihan Lingkungan
            </h2>

            <div class="mx-auto max-w-4xl px-4 md:px-6 text-gray-600 text-justify leading-relaxed text-sm md:text-base">
                <p class="indent-8 mb-6">
                    Menjaga kebersihan lingkungan memiliki peran penting dalam kehidupan sehari-hari. Sampah yang tidak
                    dikelola dengan baik dapat mencemari tanah, air, dan udara. Hal ini tidak hanya merusak ekosistem,
                    tetapi juga berpotensi menjadi sumber penyakit bagi manusia dan hewan yang hidup di sekitarnya.
                </p>

                <p class="indent-8 mb-6">
                    Pengelolaan sampah yang benar, seperti pemilahan antara sampah organik dan anorganik, daur ulang, serta
                    pengurangan penggunaan plastik sekali pakai, sangat membantu dalam mengurangi dampak negatif terhadap
                    lingkungan. Langkah-langkah ini juga dapat mengurangi beban tempat pembuangan akhir dan meningkatkan
                    efisiensi pengelolaan limbah secara keseluruhan.
                </p>

                <p class="indent-8 mb-6">
                    Selain manfaat lingkungan, menjaga kebersihan juga berkontribusi pada keberlanjutan hidup di masa depan.
                    Lingkungan yang bersih dan sehat mendukung kelangsungan ekosistem, menjaga keanekaragaman hayati, serta
                    menciptakan tempat tinggal yang nyaman. Setiap tindakan kecil seperti membuang sampah pada tempatnya dan
                    menghemat sumber daya bisa memberikan perubahan besar jika dilakukan bersama-sama.
                </p>

                <p class="indent-8">
                    Kesadaran kolektif dan partisipasi aktif dari seluruh lapisan masyarakat sangat dibutuhkan untuk
                    menciptakan lingkungan yang bersih dan sehat. Dengan memulai dari diri sendiri dan lingkungan sekitar,
                    kita dapat membangun kebiasaan yang berkelanjutan serta meninggalkan warisan bumi yang lebih baik bagi
                    generasi mendatang.
                </p>
            </div>

            <div class="flex flex-col md:flex-row items-center justify-center mt-10 mb-10 gap-3">
                <img src="{{ asset('build/images/logo.png') }}" alt="Logo" class="h-12 md:h-14">
                <div class="text-center md:text-left text-black">
                    <p class="font-bold text-xl md:text-2xl">BINARY WASTE</p>
                    <p class="text-xs md:text-sm">Digital Solution for a Zero-Waste World!</p>
                </div>
            </div>
        </div>

    </div>

    <script>
        AOS.init();

        document.getElementById('btnScroll').addEventListener('click', () => {
            const visiMisi = document.getElementById('visi-misi');
            visiMisi.classList.remove('hidden');
            setTimeout(() => {
                visiMisi.classList.add('opacity-100');
                visiMisi.classList.remove('opacity-0');
                AOS.refresh();
                visiMisi.scrollIntoView({
                    behavior: 'smooth'
                });
            }, 5);
        });

        function aguslaparbuk(passing, target) {
    const kesini = document.getElementById(passing);
    const slider = document.getElementById('slider');
    const targetElem = document.getElementById(target);

        kesini.addEventListener('click', (e) => {
            AOS.refresh();
            slider.scrollTo({
                left: targetElem.offsetLeft,
                behavior: 'smooth'
            });
        });
    }



        document.getElementById('btnScroll').addEventListener('click', () => {
            const visiMisi = document.getElementById('visi-misi');
            visiMisi.classList.remove('hidden');
            setTimeout(() => {
                visiMisi.classList.add('opacity-100');
                visiMisi.classList.remove('opacity-0');
                AOS.refresh();
                visiMisi.scrollIntoView({
                    behavior: 'smooth'
                });
            }, 5);
        });
    </script>

@endsection
