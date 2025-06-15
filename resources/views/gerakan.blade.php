@extends('components.layout')

@section('title', 'Event')

@section('content')

    @if ($gerakan['status'] == 'selesai')
        <div class="relative overflow-hidden h-screen w-screen">
            <section class="relative h-[50rem] w-full overflow-hidden">
                <div class="absolute inset-0">
                    <img src="{{ asset('build/images/trashBeranda.jpg') }}" alt="Galeri Kegiatan"
                        class="w-full h-full object-cover object-center brightness-75">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>

                <div
                    class="relative z-10 flex mt-[-12rem] flex-col items-center justify-center text-center text-white h-full px-6">

                    <h1
                        class="text-4xl md:text-6xl font-bold leading-tight drop-shadow-md [text-shadow:_0_2px_8px_rgba(255,255,255,0.25)]">
                        Galeri Kenangan Kegiatan Binary Waste
                    </h1>

                    <p
                        class="mt-4 max-w-2xl text-lg md:text-xl text-gray-200 [text-shadow:_0_1px_4px_rgba(255,255,255,0.2)]">
                        Dokumentasi aksi lingkungan, kebersamaan, dan semangat menjaga Lingkungan bersama para binarians.
                    </p>
                </div>

            </section>

            <section id="galeri-foto" class="w-full absolute top-60 bg-transparent   mt-10">
                <div class="relative z-10 w-full overflow-x-auto px-6 py-12 overflow-hidden">
                    <div class="relative flex flex-wrap items-center justify-center ">
                        @foreach ($dokumentasi as $index => $foto)
                            @php
                                $rotation = [-10, -5, 0, 5, 10][$index % 5];
                                $scale =
                                    $index % 5 === 2
                                        ? 'scale-105 z-30'
                                        : ($index % 5 === 1 || $index % 5 === 3
                                            ? 'scale-95 z-20'
                                            : 'scale-90 z-10');

                                $customClass = '';

                                if ($index === 0) {
                                    $customClass = 'mr-[-3rem] mt-15 shadow-lg hover:mt-[-1rem]';
                                } elseif ($index === 1) {
                                    $customClass = 'mr-[-3rem] shadow-lg hover:mt-[-3rem]';
                                } elseif ($index === 2) {
                                    $customClass = 'shadow-lg hover:mt-[-4rem]';
                                } elseif ($index === 3) {
                                    $customClass = 'ml-[-3rem] shadow-lg hover:mt-[-3rem]';
                                } elseif ($index === 4) {
                                    $customClass = 'ml-[-3rem] mt-15 shadow-lg hover:mt-[-1rem]';
                                }

                                $responsiveClass = $index >= 2 ? 'hidden sm:block' : '';
                            @endphp
                            <div
                                class="relative aspect-[2/3] w-[40vw] sm:w-[30vw] md:w-[20vw] lg:w-[19vw] max-w-[320px] min-w-[150px]
           transform rotate-[{{ $rotation }}deg] {{ $scale }} {{ $customClass }} {{ $responsiveClass }}
           transition-all duration-700 ease-in-out  cursor-pointer hover:scale-105 group">

                                <img src="{{ asset('storage/' . $foto->foto) }}" alt="Galeri"
                                    class="w-full h-full object-cover rounded-2xl shadow-xl" />

                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent rounded-2xl pointer-events-none">
                                </div>

                                <div
                                    class="absolute -bottom-60 group-hover:bottom-20 p-4 h-full w-full transition-all duration-700 ease-in-out 
               flex flex-col justify-end text-white text-shadow-lg">
                                    <p class="text-sm font-semibold text-center leading-snug">{{ $foto->deskripsi }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
        </div>

        <section id="edukasi" class="relative z-20 bg-white text-black pt-20 px-6 text-center">
            <div class="max-w-5xl mx-auto space-y-8">
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight text-green-800 drop-shadow-md">
                    Lebih dari Sekadar Foto
                </h2>
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                    Setiap aksi kecil membawa dampak besar bagi bumi. Mari rawat lingkungan bersama, karena kebersihan
                    adalah bagian dari iman dan tanggung jawab kita sebagai warga bumi.
                </p>
                <blockquote class="text-2xl italic font-medium text-green-600">
                    “Kalau bukan kita yang menjaga bumi, siapa lagi?”
                </blockquote>
                <p class="text-sm text-gray-500">— Winson 2025</p>
            </div>
        </section>

        <div id="modal" class="fixed inset-0 bg-black/80 z-50 hidden items-center justify-center">
            <img id="modal-img" class="max-h-[90vh] max-w-[90vw] rounded-xl shadow-2xl">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-2xl font-bold">&times;</button>
        </div>

        @if (auth()->check() && auth()->user()->role == 'admin')
            <section class="py-20 px-6 bg-gray-50">
                <div class="max-w-xl mx-auto bg-white p-10 rounded-2xl shadow-xl space-y-6">
                    <h2 class="text-2xl font-bold text-gray-800 text-center">Upload Foto Galeri</h2>

                    @if (session('success'))
                        <div class="p-4 bg-green-100 border border-green-300 text-green-700 rounded-lg shadow">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="p-4 bg-red-100 border border-red-300 text-red-700 rounded-lg shadow">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('upload.galeri', $gerakan->slug) }}" method="POST" enctype="multipart/form-data"
                        class="space-y-6">
                        @csrf

                        <div>
                            <label for="foto" class="block text-sm font-semibold text-gray-700 mb-2">Foto</label>
                            <input type="file" name="foto" id="foto" accept="image/*" required
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 file:mr-4 file:py-2 file:px-4 
                                   file:rounded-lg file:border-0 file:text-sm file:font-semibold 
                                   file:bg-green-100 file:text-green-700 hover:file:bg-green-200 transition">
                        </div>

                        <div>
                            <label for="deskripsi" class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi</label>
                            <input type="text" name="deskripsi" id="deskripsi" placeholder="Tulis deskripsi singkat..."
                                required
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 
                                   focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition">
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                class="px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold 
                                   rounded-lg shadow-md transition duration-300">
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        @endif
    @else
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
                                Sampai jumpa di hari kegiatan. Mari bersama menciptakan lingkungan yang lebih bersih dan
                                sehat.
                            </p>

                            <form id="cancelForm" onsubmit="return confirm('Yakin ingin batal mengikuti gerakan ini?')"
                                action="{{ $terdaftaruser ? route('user.delete', $gerakan->slug) : route('mitra.delete', $gerakan->slug) }}"
                                method="POST" class="w-full">
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
                            <div
                                class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 text-center">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form id="joinForm" method="POST" class="bg-[#899d7b] rounded-xl shadow-xl p-10 space-y-8">
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
                                    <label id="btnmitra" for="role-mitra"
                                        class="peer-checked/mitra:border-[#ccc14e] cursor-pointer w-40 p-5 rounded-2xl bg-white text-gray-800 border-4 border-transparent shadow hover:shadow-lg flex flex-col items-center text-center gap-2 transition-all">
                                        <div class="bg-[#ccc14e] p-3 rounded-full">
                                            <img src="{{ asset('build/images/hero.png') }}" alt="Mitra"
                                                class="w-8 h-8">
                                        </div>
                                        <h2 class="text-lg font-semibold">Mitra</h2>
                                    </label>
                                </div>

                                <button type="button" onclick="showNotif()"
                                    class="w-full bg-[#5e6f52] hover:scale-95 transition duration-300 py-3 rounded-full font-semibold text-white">
                                    Bergabung
                                </button>
                            </div>

                            <div id="notif"
                                class="max-w-lg w-full mx-auto hidden p-6 flex flex-col items-center justify-center space-y-4">
                                <div id="loading"
                                    class="opacity-100 flex flex-col items-center justify-center space-y-4">
                                    <img src="{{ asset('build/images/load.svg') }}" alt="" class="h-40 ">
                                    <h2
                                        class="text-white text-2xl md:text-3xl font-semibold tracking-wide flex items-center gap-1">
                                        Mendaftar<span id="dots"
                                            class="text-white font-bold text-3xl animate-pulse">...</span>
                                    </h2>
                                    <p class="text-gray-100 text-center text-lg font-medium">
                                        Sabar yah, sedang diproses untuk pendaftaranmu.
                                    </p>
                                </div>

                                <div id="konfirmasi"
                                    class="max-w-md max-h-98 h-full w-full mx-auto p-6 flex-col items-center justify-center space-y-6 hidden">
                                    <img src="{{ asset('build/images/succes.svg') }}" alt="Sukses"
                                        class="object-contain drop-shadow-lg">
                                    <h2
                                        class="text-white text-3xl -mt-5 font-extrabold text-center leading-snug tracking-wide">
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
                            <p class="text-xl font-semibold text-gray-900">{{ $jumlahTerdaftarUser }} orang</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500"></p>
                            <p class="text-xl font-semibold text-gray-900">{{ $gerakan['tanggal'] }} <br>
                                {{ $gerakan['periode'] }}</p>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 mb-2">Mitra yang Terlibat</p>
                        <div class="flex gap-4 flex-wrap justify-center md:justify-start">
                            @foreach ($mitras as $mitra )
                            <img src="{{ asset('storage/' . $mitra['logo']) }}" alt="Event Image"
                            class="w-15 h-15 object-cover ">
                            @endforeach
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
    @endif

    <script>
        document.querySelectorAll('.open-modal').forEach(img => {
            img.addEventListener('click', () => {
                const modal = document.getElementById('modal');
                const modalImg = document.getElementById('modal-img');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                modalImg.src = img.src;
            });
        });

        function closeModal() {
            const modal = document.getElementById('modal');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }

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
