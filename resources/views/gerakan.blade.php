@extends('components.layout')

@section('title', 'Event')

@section('content')
    <div class="min-h-screen bg-black bg-cover px-6 md:px-12 lg:px-20"
        style="background-image: url('{{ asset('build/images/WaveLine.svg') }}')">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center max-w-7xl mx-auto min-h-screen gap-10">

            <div class="max-w-lg w-full mx-auto">
    @if ($terdaftaruser || $terdaftarmitra)
    <div id="terdaftar"
        class="max-w-md mx-auto text-center text-white space-y-6 py-12 bg-[#899d7b] p-10 rounded-xl">
        <h1 class="text-4xl font-extrabold">Terima Kasih Telah Mendaftar</h1>
        
        @if ($terdaftaruser)
            <p class="text-lg font-medium">Anda terdaftar sebagai <strong>Relawan</strong></p>
        @else
            <p class="text-lg font-medium">Anda terdaftar sebagai <strong>Mitra</strong></p>
        @endif

        <p class="text-gray-200 leading-relaxed">
            Sampai jumpa di hari kegiatan. Mari bersama menciptakan lingkungan yang lebih bersih dan sehat.
        </p>

        <form id="cancelForm"
              onsubmit="return confirm('Yakin ingin batal mengikuti gerakan ini?')"
              action="{{ $terdaftaruser ? route('user.delete', $gerakan->slug) : route('mitra.delete', $gerakan->slug) }}"
              method="POST"
              class="w-full">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="w-full bg-[#5e6f52] hover:bg-[#4e5e43] transition duration-300 py-3 rounded-full font-semibold">
                Cancel
            </button>
        </form>
    </div>
@else

                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 text-center">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form id="joinForm" method="POST"
                        class="bg-[#899d7b] rounded-xl shadow-xl p-10 space-y-8">
                        @csrf
                        <div id="peran" class="space-y-6 opacity-100 text-white">
                            <h1 class="text-3xl font-extrabold text-center">Pilih Peran Anda</h1>
                            <p class="text-center">Bagaimana Anda ingin bergabung?</p>

                            <div class="flex justify-center gap-6">
                                <input  type="radio" name="tipe" id="role-relawan" value="user"
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
                                <label id="btnmitra" for="role-mitra"
                                    class="peer-checked/mitra:border-[#ccc14e] cursor-pointer w-40 p-5 rounded-2xl bg-white text-gray-800 border-4 border-transparent shadow hover:shadow-lg flex flex-col items-center text-center gap-2 transition-all">
                                    <div class="bg-[#ccc14e] p-3 rounded-full">
                                        <img src="{{ asset('build/images/hero.png') }}" alt="Mitra" class="w-8 h-8">
                                    </div>
                                    <h2 class="text-lg font-semibold">Mitra</h2>
                                </label>
                            </div>

                            <button type="button" onclick="showNotif()"
                                class="w-full bg-[#5e6f52] hover:scale-95 transition duration-300 py-3 rounded-full font-semibold text-white">
                                Bergabung
                            </button>
                        </div>

                        <div id="notif" class="max-w-lg w-full mx-auto hidden p-6 flex flex-col items-center justify-center space-y-4">
                            <div id="loading" class="opacity-100 flex flex-col items-center justify-center space-y-4">
                                <img src="{{ asset('build/images/load.svg') }}" alt="" class="h-40 ">
                                <h2 class="text-white text-2xl md:text-3xl font-semibold tracking-wide flex items-center gap-1">
                                    Mendaftar<span id="dots" class="text-white font-bold text-3xl animate-pulse">...</span>
                                </h2>
                                <p class="text-gray-100 text-center text-lg font-medium">
                                    Sabar yah, sedang diproses untuk pendaftaranmu.
                                </p>
                            </div>

                            <div id="konfirmasi"
                                class="max-w-md max-h-98 h-full w-full mx-auto p-6 flex-col items-center justify-center space-y-6 hidden">
                                <img src="{{ asset('build/images/succes.svg') }}" alt="Sukses"
                                    class="object-contain drop-shadow-lg">
                                <h2 class="text-white text-3xl -mt-5 font-extrabold text-center leading-snug tracking-wide">
                                    Pendaftaran Berhasil!
                                </h2>
                                <p class="text-gray-200 text-lg text-center leading-relaxed">
                                    Kamu sudah terdaftar. Yuk, tekan tombol di bawah untuk lanjut ke langkah berikutnya!
                                </p>
                                <button type="submit" id="btnConfirm"
                                    class="bg-white text-[#5e6f52] font-semibold py-3 px-10 rounded-full shadow-md hover:bg-gray-100 hover:scale-95 transition-all duration-300 ease-in-out">
                                    Konfirmasi
                                </button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
                
            <section class="bg-white rounded-xl shadow-lg p-10 space-y-8 max-w-2xl mx-auto w-full">
                <h2 class="text-3xl font-bold text-gray-900">{{ $gerakan['judul'] }}</h2>
                <p class="text-gray-700">Sebuah gerakan kolaboratif untuk membersihkan sungai kota kita.</p>

                <div class="grid grid-cols-2 gap-6 text-center">
                    <div>
                        <p class="text-sm text-gray-500">Jumlah Peserta</p>
                        <p class="text-xl font-semibold text-gray-900">{{ $jumlahTerdaftarUser}} orang</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500"></p>
                        <p class="text-xl font-semibold text-gray-900">{{ $gerakan['tanggal'] }} <br> {{ $gerakan['periode'] }}</p>
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
                        {{ $gerakan['deskripsi'] }} 
                    </p>
                </div>
            </section>

        </div>
    </div>

    <script>
        const form = document.getElementById('joinForm');
        const slug = @json($gerakan->slug);
        const peran = document.getElementById('peran');
        const notif = document.getElementById('notif');
        const loading = document.getElementById('loading');
        const konfirmasi = document.getElementById('konfirmasi');
        const titik = document.getElementById('dots');
        const tipeRadios = document.querySelectorAll('input[name="tipe"]');
        const btnConfirm = document.getElementById('btnConfirm');

        const cancelForm = document.getElementById('cancelForm');
        const btnMitra = document.getElementById('btnmitra');


        // Update action ketika radio dipilih
        tipeRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                const selectedValue = document.querySelector('input[name="tipe"]:checked').value;
                const path = selectedValue === 'mitra' ? 'pivot/mitra' : 'pivot/user';
                form.setAttribute('action', `/gerakans/${slug}/${path}`);
            });
        });

        function showNotif() {
            const selected = document.querySelector('input[name="tipe"]:checked');
            if (!selected) {
                alert("Silakan pilih peran terlebih dahulu.");
                return;
            }

            peran.classList.add('hidden');
            notif.classList.remove('hidden');
            loading.style.display = 'flex';
            konfirmasi.style.display = 'none';

            setTimeout(() => {
                loading.style.display = 'none';
                konfirmasi.style.display = 'flex';
            }, 5000);
        }

        let dotcount = 0;
        setInterval(() => {
            dotcount = (dotcount + 1) % 4;
            titik.textContent = ".".repeat(dotcount);
        }, 500);

        btnConfirm.addEventListener('click', () => {
            form.submit();
        });
    </script>
@endsection
