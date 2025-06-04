@extends('components.layout')

@section('title', 'Event')

@section('content')
    <div class="mt-5 max-w-full min-w-screen bg-black px-6 md:px-12 lg:px-20 min-h-screen bg-cover"
        style="background-image: url('{{ asset('build/images/WaveLine.svg') }}')">

        <div class="grid grid-cols-1 md:grid-cols-2  min-h-screen items-center -ml-20 max-w-9xl mx-auto">
            @if ($terdaftaruser || $terdaftarmitra){
                <div id="terdaftar" class="max-w-md mx-auto h-97 p-8">
                    <h1 class="text-4xl font-extrabold text-gray-100 mb-3 text-center">Terima Kasih Telah Mendaftar</h1>
                    <p>Anda terdaftar sebagai mitra</p>
                    <p>tanggal : nvjanjna</p>
                    <p>rules : gaboleh berantam</p>
                    <button type="button" onclick="notif()"
                        class="w-full bg-[#5e6f52] hover:scale-99 text-white py-4 rounded-full font-semibold text-lg shadow-lg
                         transition-colors duration-300 ease-in-out flex justify-center items-center gap-3">
                        cancel
                    </button>
                </div>
                }
            @else{
     <form id="joinForm" action="{{ route('pivot.user', ['gerakan' => $gerakan->slug]) }}" method="POST"
                class="bg-[#899d7b]  rounded-xl shadow-lg p-10 max-w-lg mx-auto space-y-8">

                @csrf
                <div id="daftar" class="max-w-md mx-auto h-97 p-8 opacity-100">
                    <h1 class="text-4xl font-extrabold text-gray-100 mb-3 text-center">Pilih Peran Anda</h1>
                    <p class="text-gray-100 text-center mb-8">Bagaimana Anda ingin bergabung?</p>

                    <div class="flex justify-center gap-8 mb-8">
                        <input type="radio" name="tipe" id="role-relawan" value="user" class="hidden peer/relawan"
                            required>

                        <label for="role-relawan"
                            class="peer-checked/relawan:border-[#ccc14e] peer-checked/relawan:shadow-xl 
         cursor-pointer w-44 p-6 rounded-3xl border-10 border-transparent bg-white 
         flex flex-col items-center text-center gap-2 
         transition-all duration-500 ease-in-out 
         hover:shadow-lg hover: -translate-y-1 active:scale-95 select-none">

                            <div class="bg-[#ccc14e] p-4 rounded-full">
                                <img src="{{ asset('build/images/hero.png') }}" alt="Relawan Icon"
                                    class="w-10 h-10 transition-transform duration-300 ease-in-out hover:rotate-12">
                            </div>

                            <h2 class="text-2xl font-bold text-gray-900">Relawan</h2>
                        </label>


                        <input type="radio" name="tipe" id="role-mitra" value="mitra" class="hidden peer/mitra"
                            required>

                        <label for="role-mitra"
                            class="peer-checked/mitra:border-[#ccc14e] peer-checked/mitra:shadow-xl 
         cursor-pointer w-44 p-6 rounded-3xl border-10 border-transparent bg-white 
         flex flex-col items-center text-center gap-2 
         transition-all duration-500 ease-in-out 
         hover:shadow-lg hover:-translate-y-1 active:scale-95 select-none">

                            <div class="bg-[#ccc14e] p-4 rounded-full">
                                <img src="{{ asset('build/images/hero.png') }}" alt="Mitra Icon"
                                    class="w-10 h-10 transition-transform duration-300 ease-in-out hover:rotate-12">
                            </div>

                            <h2 class="text-2xl font-bold text-gray-900 mb-2">Mitra</h2>
                        </label>
                    </div>

                    <button type="submit" onsubmit="terdaftar()";
                        class="w-full bg-[#5e6f52] hover:scale-99 text-white py-4 rounded-full font-semibold text-lg shadow-lg
           transition-colors duration-300 ease-in-out flex justify-center items-center gap-3">
                        Bergabung
                    </button>
                </div>
            </form>
                }
            @endif
       


            <section
                class="bg-[#899d7b] rounded-xl shadow-lg p-10 flex flex-col space-y-10 mx-auto
                   w-100 max-w-[700px] md:max-w-none md:w-auto"
                style="min-height: 500px;">
                <h2 class="text-3xl font-extrabold text-gray-900">Bersih-Bersih Sungai Bersama</h2>
                <p class="text-gray-600 leading-relaxed">Sebuah gerakan kolaboratif untuk membersihkan sungai kota kita.</p>

                <div class="grid grid-cols-2 gap-8 text-center">
                    <div>
                        <p class="text-sm text-gray-500">Jumlah Peserta</p>
                        <p class="text-lg font-semibold text-gray-900">125 orang</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Tanggal & Waktu</p>
                        <p class="text-lg font-semibold text-gray-900">Sabtu, 15 Juni 2025 - 08:00 WIB</p>
                    </div>
                </div>

                <div>
                    <p class="text-sm text-gray-500 mb-2">Mitra yang Terlibat</p>
                    <div class="flex gap-6 flex-wrap justify-center md:justify-start">
                        @for ($i = 0; $i < 4; $i++)
                            <img src="{{ asset('build/images/usu.png') }}" alt="Logo Mitra" class="h-12 object-contain">
                        @endfor
                    </div>
                </div>

                <div class="-mt-8">
                    <p class="text-sm text-gray-500 mb-1">Deskripsi Acara</p>
                    <p class="text-gray-700 leading-relaxed">
                        Acara ini bertujuan untuk membersihkan aliran sungai di daerah RT 03 hingga RT 07.
                        Semua peserta akan mendapatkan alat kebersihan dan konsumsi gratis.
                        Ayo ikut berkontribusi untuk lingkungan yang lebih bersih!
                    </p>
                </div>
            </section>
        </div>
    </div>

    <script>
        const form = document.getElementById('joinForm');
        const tipeRadios = document.querySelectorAll('input[name="tipe"]');

        tipeRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                const selected = document.querySelector('input[name="tipe"]:checked').value;
                const slug = @json($gerakan->slug);

                if (selected === 'mitra') {
                    form.action = /gerakans/${slug}/pivot/mitra;
                } else {
                    form.action = /gerakans/${slug}/pivot/user;
                }
            });
        });
        terdaftar() {
            const daftar = document.getElementById('daftar');
            const terdaftar = document.getElementById('terdaftar');
            daftar.classList.add('hidden');
            daftar.classList.add('opacity-0');
            terdaftar.classList.remove('opacity-0');
            terdaftar.classList.remove('hidden');
            terdaftar.classList.add('opacity-100');
        }
        const daftarBtn = document.getElementById('daftarBtn');
        const loadingIcon = document.getElementById('loadingIcon');
        const btnText = document.getElementById('btnText');

        daftarBtn.addEventListener('click', () => {
            daftarBtn.disabled = true;
            loadingIcon.classList.remove('hidden');
            btnText.textContent = "Memproses...";

            gsap.to(daftarBtn, {
                scale: 0.95,
                duration: 0.2,
                ease: "power1.out"
            });

            setTimeout(() => {
                window.location.href = '/daftar';
            }, 2000);
        });
    </script>
@endsection