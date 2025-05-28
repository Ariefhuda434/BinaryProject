@extends('components.layout')

@section('title', 'Event')

@section('content')
<div class="mt-5 max-w-full min-w-screen bg-black px-6 md:px-12 lg:px-20 min-h-screen bg-cover" 
    style="background-image: url('{{ asset('build/images/Wave (2).svg') }}')">

    <div class="grid grid-cols-1 md:grid-cols-2  min-h-screen items-center -ml-20 max-w-9xl mx-auto">

        <section class="bg-white rounded-xl shadow-lg w-137 p-10 h-125 flex flex-col space-y-8 max-w-lg mx-auto">
            <h1 class="text-3xl font-extrabold text-gray-900">Pilih Peran Anda</h1>
            <p class="text-gray-600 leading-relaxed">Silakan pilih bagaimana Anda ingin bergabung sebagai apa   </p>

            <div class="grid grid-cols-1 gap-6">
                <div class="flex justify-center items-center gap-6">
                    <a href="#" 
                       class="role-card block p-6  rounded-2xl border border-gray-200 bg-white hover:shadow-xl hover:border-green-600 transition transform hover:-translate-y-1 cursor-pointer
                              flex flex-col justify-center items-center text-center h-40 w-50">
                        <h2 class="text-xl font-semibold mb-2 text-gray-900">Relawan</h2>
                        <p class="text-gray-500 text-sm">Gunakan layanan platform sebagai pengguna umum.</p>
                    </a>
                    <a href="#" 
                       class="role-card block p-6 rounded-2xl border border-gray-200 bg-white hover:shadow-xl hover:border-green-600 transition transform hover:-translate-y-1 cursor-pointer
                              flex flex-col justify-center items-center text-center h-40 w-50">
                        <h2 class="text-xl font-semibold mb-2 text-gray-900">Mitra</h2>
                        <p class="text-gray-500 text-sm">Bergabung sebagai mitra.</p>
                    </a>
                </div>
            </div>

    <div class="flex items-center mb-4">
        <img src="{{ asset('build/images/iconlocation.png')}}" alt="Lokasi Icon" class="h-5 mr-2">
        <p class="text-gray-700 leading-relaxed font-medium text-sm">Jl. Dr. Mansyut No.2A, Kota Gotham</p>
    </div>

    <div class="flex items-center justify-between">
        <a href="/gerakan/{{ $gerakan }}">
            <button class="bg-green-600 text-white px-6 py-2 rounded font-semibold hover:bg-green-700 transition text-sm">
                Ikut
            </button>
        </section>

        <section 
            class="bg-white rounded-xl shadow-lg p-10 flex flex-col space-y-10 mx-auto
                   w-100 max-w-[700px] md:max-w-none md:w-auto"
            style="min-height: 500px;"
        >
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
    const daftarBtn = document.getElementById('daftarBtn');
    const loadingIcon = document.getElementById('loadingIcon');
    const btnText = document.getElementById('btnText');

    daftarBtn.addEventListener('click', () => {
        daftarBtn.disabled = true;
        loadingIcon.classList.remove('hidden');
        btnText.textContent = "Memproses...";

        gsap.to(daftarBtn, { scale: 0.95, duration: 0.2, ease: "power1.out" });

        setTimeout(() => {
            window.location.href = '/daftar';
        }, 2000);
    });
</script>
@endsection
