@extends('components.layout')

@section('title', 'Event')

@section('content')
    <div class="min-h-screen bg-black bg-cover px-6 md:px-12 lg:px-20"
        style="background-image: url('{{ asset('build/images/WaveLine.svg') }}')">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center max-w-7xl mx-auto min-h-screen gap-10">

            <div class="max-w-lg w-full mx-auto">
                @if ($terdaftaruser || $terdaftarmitra)
                    <div id="terdaftar" class="bg-[#899d7b] rounded-xl p-10 shadow-xl text-white space-y-4">
                        <h1 class="text-3xl font-bold text-center">Terima Kasih Telah Mendaftar</h1>
                        <p class="text-center">Anda terdaftar sebagai mitra</p>
                        <p>Sampai jumpa di hari kegiatan. Mari bersama menciptakan lingkungan yang lebih bersih dan sehat.
                        </p>

                        <button onclick="notif()"
                            class="w-full bg-[#5e6f52] hover:scale-95 transition duration-300 py-3 rounded-full font-semibold text-white">
                            Cancel
                        </button>
                    </div>
                @else
                    <form id="joinForm" action="{{ route('pivot.user', ['gerakan' => $gerakan->slug]) }}" method="POST"
                        class="bg-[#899d7b] rounded-xl shadow-xl p-10 space-y-8">
                        @csrf
                        <div id="peran" class="space-y-6 opacity-100 text-white">
                            <h1 class="text-3xl font-extrabold text-center">Pilih Peran Anda</h1>
                            <p class="text-center">Bagaimana Anda ingin bergabung?</p>

                            <div class="flex justify-center gap-6">

                                <input type="radio" name="tipe" id="role-relawan" value="user"
                                    class="hidden peer/relawan" required>
                                <label for="role-relawan"
                                    class="peer-checked/relawan:border-[#ccc14e] cursor-pointer w-40 p-5 rounded-2xl bg-white text-gray-800 border-4 border-transparent shadow hover:shadow-lg flex flex-col items-center text-center gap-2 transition-all">
                                    <div class="bg-[#ccc14e] p-3 rounded-full">
                                        <img src="{{ asset('build/images/hero.png') }}" alt="Relawan" class="w-8 h-8">
                                    </div>
                                    <h2 class="text-lg font-semibold">Relawan</h2>
                                </label>

                                <input type="radio" name="tipe" id="role-mitra" value="mitra"
                                    class="hidden peer/mitra" required>
                                <label for="role-mitra"
                                    class="peer-checked/mitra:border-[#ccc14e] cursor-pointer w-40 p-5 rounded-2xl bg-white text-gray-800 border-4 border-transparent shadow hover:shadow-lg flex flex-col items-center text-center gap-2 transition-all">
                                    <div class="bg-[#ccc14e] p-3 rounded-full">
                                        <img src="{{ asset('build/images/hero.png') }}" alt="Mitra" class="w-8 h-8">
                                    </div>
                                    <h2 class="text-lg font-semibold">Mitra</h2>
                                </label>
                            </div>

                            <button type="button" onclick="show()"
                                class="w-full bg-[#5e6f52] hover:scale-95 transition duration-300 py-3 rounded-full font-semibold text-white">
                                Bergabung
                            </button>
                        </div>
                        <div id="notif"
                            class="max-w-lg w-full mx-auto bg-[#5e6f52] hidden rounded-xl shadow-md p-6 flex flex-col items-center justify-center space-y-4">
                            <div id="loading" class="opacity-100">
                                <h2 class="text-white text-3xl font-semibold tracking-wide flex items-center">
                                    Mendaftar<span id="dots" class=" text-white font-bold"></span>
                                </h2>
                                <p class="text-gray-100 text-center text-lg font-medium">
                                    Sabar yahhh, lagi didaftarin niii
                                </p>
                            </div>
                            <div id="konfirmasi"
                                class="max-w-lg w-full mx-auto bg-[#5e6f52] hidden opacity-0 rounded-xl shadow-md p-6 flex flex-col items-center justify-center space-y-6">
                                <h2 class="text-white text-2xl font-semibold tracking-wide text-center">
                                    Pendaftaran berhasil! Tekan tombol konfirmasi untuk melanjutkan.
                                </h2>
                                <button type="button"
                                    class="bg-white hover:scale-98 text-black font-semibold py-3 px-8 rounded-lg transition-colors duration-300">
                                    Konfirmasi
                                </button>
                            </div>


                        </div>

                    </form>
                @endif
            </div>

            <section class="bg-white rounded-xl shadow-lg p-10 space-y-8 max-w-2xl mx-auto w-full">
                <h2 class="text-3xl font-bold text-gray-900">Bersih-Bersih Sungai Bersama</h2>
                <p class="text-gray-700">Sebuah gerakan kolaboratif untuk membersihkan sungai kota kita.</p>

                <div class="grid grid-cols-2 gap-6 text-center">
                    <div>
                        <p class="text-sm text-gray-500">Jumlah Peserta</p>
                        <p class="text-xl font-semibold text-gray-900">125 orang</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Tanggal & Waktu</p>
                        <p class="text-xl font-semibold text-gray-900">Sabtu, 15 Juni 2025 - 08:00 WIB</p>
                    </div>
                </div>

                <div>
                    <p class="text-sm text-gray-500 mb-2">Mitra yang Terlibat</p>
                    <div class="flex gap-4 flex-wrap justify-center md:justify-start">
                        @for ($i = 0; $i < 4; $i++)
                            <img src="{{ asset('build/images/usu.png') }}" alt="Logo Mitra" class="h-10 object-contain">
                        @endfor
                    </div>
                </div>

                <div>
                    <p class="text-sm text-gray-500 mb-1">Deskripsi Acara</p>
                    <p class="text-gray-700 leading-relaxed">
                        Acara ini bertujuan untuk membersihkan aliran sungai di daerah RT 03 hingga RT 07. Semua peserta
                        akan mendapatkan alat kebersihan dan konsumsi gratis. Ayo ikut berkontribusi untuk lingkungan yang
                        lebih bersih!
                    </p>
                </div>
            </section>
        </div>
    </div>

    <script>
        show(){
            const peran = document.getElementById('peran');
            peran.classlist.add('hidden');
        }



        const titik = document.getElementById('dots');
        let dotcount = 0;
        setInterval(() => {
            dotcount = (dotcount + 1) % 4;
            titik.textContent = ".".repeat(dotcount);
        }, 500);


        const form = document.getElementById('joinForm');
        const tipeRadios = document.querySelectorAll('input[name="tipe"]');

        tipeRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                const selected = document.querySelector('input[name="tipe"]:checked').value;
                const slug = @json($gerakan->slug);
                if (selected === 'mitra') {
                    form.action = `/gerakans/${slug}/pivot/mitra`;
                } else {
                    form.action = `/gerakans/${slug}/pivot/user`;
                }
            });
        });

        function notif() {
            alert("Pendaftaran Anda dibatalkan.");
        }
    </script>
@endsection
