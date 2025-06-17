@extends('components.layout')

@section('title', 'FAQ')

@section('content')
<div class="min-h-screen bg-white w-3/4 mx-auto py-16 px-6 mt-20 sm:px-10 lg:px-20" x-data="{ selected: null }">
    <h1 class="text-4xl font-bold text-gray-800 mb-12 text-center">❓ Pertanyaan Yang Sering Diajukan</h1>

    {{-- SECTION 1: Pengguna & Akun --}}
    <h2 class="text-2xl font-semibold text-gray-700 mb-4 mt-12">👤 Pengguna & Akun</h2>
    @foreach([
        ['q' => 'Bagaimana cara mendaftar akun?', 'a' => 'Klik tombol “Register” di navbar. Isi formulir dengan data yang benar dan kirim. Anda akan menerima email untuk verifikasi.'],
        ['q' => 'Apakah wajib verifikasi email?', 'a' => 'Iya. Jika tidak, Anda bisa login tetapi tidak bisa mengikuti gerakan. Verifikasi email diperlukan agar sistem mengenali akun valid.'],
        ['q' => 'Bagaimana cara reset password?', 'a' => 'Buka halaman profil Anda, lalu pilih “Reset Password”. Masukkan email, password lama, dan password baru Anda. Setelah berhasil, login ulang.']
    ] as $index => $faq)
        <div class="bg-white shadow border border-gray-200 overflow-hidden">
            <button 
                class="w-full flex justify-between items-center px-6 py-5 text-left text-gray-800 font-medium hover:bg-gray-100 transition"
                @click="selected === {{ $index }} ? selected = null : selected = {{ $index }}">
                <span>{{ $faq['q'] }}</span>
                <svg :class="{ 'rotate-180': selected === {{ $index }} }" 
                    class="h-5 w-5 transform transition-transform duration-200 text-gray-500" 
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div x-show="selected === {{ $index }}" x-collapse class="px-6 pb-5 text-gray-600 text-sm">
                {{ $faq['a'] }}
            </div>
        </div>
    @endforeach

    {{-- SECTION 2: Gerakan & Mitra --}}
    <h2 class="text-2xl font-semibold text-gray-700 mb-4 mt-12">🚀 Gerakan & Kemitraan</h2>
    @foreach([
        ['q' => 'Bagaimana cara ikut gerakan?', 'a' => 'Masuk ke halaman “Gerakan”, pilih salah satu gerakan, lalu klik tombol “Gabung” atau “Konfirmasi”.'],
        ['q' => 'Bagaimana tahu saya sudah terdaftar dalam gerakan?', 'a' => 'Jika logo Anda muncul di daftar peserta dalam laman gerakan tersebut, berarti Anda sudah terdaftar.'],
        ['q' => 'Bagaimana cara membatalkan ikut gerakan?', 'a' => 'Masuk ke gerakan yang Anda ikuti, tekan tombol “Batalkan”. Sistem akan menghapus data Anda dari peserta.'],
        ['q' => 'Bagaimana cara menjadi Mitra?', 'a' => 'Klik tombol “Daftar Mitra” di beranda. Isi data lengkap, lalu tunggu konfirmasi dari tim Binary Waste.'],
        ['q' => 'Apakah saya bisa ikut lebih dari satu gerakan?', 'a' => 'Tentu! Anda bisa ikut beberapa gerakan sekaligus sesuai minat Anda.']
    ] as $index => $faq)
        <div class="bg-white shadow border border-gray-200 overflow-hidden">
            <button 
                class="w-full flex justify-between items-center px-6 py-5 text-left text-gray-800 font-medium hover:bg-gray-100 transition"
                @click="selected === {{ $index + 10 }} ? selected = null : selected = {{ $index + 10 }}">
                <span>{{ $faq['q'] }}</span>
                <svg :class="{ 'rotate-180': selected === {{ $index + 10 }} }" 
                    class="h-5 w-5 transform transition-transform duration-200 text-gray-500" 
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div x-show="selected === {{ $index + 10 }}" x-collapse class="px-6 pb-5 text-gray-600 text-sm">
                {{ $faq['a'] }}
            </div>
        </div>
    @endforeach

    <h2 id="report" class="text-2xl font-semibold text-gray-700 mb-4 mt-12">📸 Laporan & Dokumentasi</h2>
    @foreach([
        ['q' => 'Bagaimana cara mengirim laporan kegiatan?', 'a' => 'Masuk ke “Gerakan” > “Lapor”, isi deskripsi kegiatan, unggah foto, lalu klik “Kirim”. Anda akan mendapat pesan terima kasih.'],
        ['q' => 'Berapa kali bisa mengirim laporan?', 'a' => 'Hanya 1 kali per hari untuk menjaga kualitas dan mencegah spam.'],
        ['q' => 'Siapa yang bisa melihat dokumentasi kegiatan?', 'a' => 'Dokumentasi hanya bisa dilihat oleh pengguna yang telah terverifikasi dan telah mengikuti gerakan tersebut.'],
        ['q' => 'Kapan dokumentasi akan muncul?', 'a' => 'Dokumentasi akan muncul di halaman gerakan jika status gerakan telah berubah menjadi “Selesai”.']
    ] as $index => $faq)
        <div class="bg-white shadow border border-gray-200 overflow-hidden">
            <button 
                class="w-full flex justify-between items-center px-6 py-5 text-left text-gray-800 font-medium hover:bg-gray-100 transition"
                @click="selected === {{ $index + 20 }} ? selected = null : selected = {{ $index + 20 }}">
                <span>{{ $faq['q'] }}</span>
                <svg :class="{ 'rotate-180': selected === {{ $index + 20 }} }" 
                    class="h-5 w-5 transform transition-transform duration-200 text-gray-500" 
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div x-show="selected === {{ $index + 20 }}" x-collapse class="px-6 pb-5 text-gray-600 text-sm">
                {{ $faq['a'] }}
            </div>
        </div>
    @endforeach

    {{-- SECTION 4: Lainnya --}}
    <h2 class="text-2xl font-semibold text-gray-700 mb-4 mt-12">📦 Lainnya</h2>
    @foreach([
        ['q' => 'Apakah layanan ini gratis?', 'a' => 'Ya, seluruh fitur di Binary Waste dapat diakses secara gratis.'],
        ['q' => 'Apakah saya bisa melihat laporan lama saya?', 'a' => 'Tentu. Masuk ke profil Anda, di bagian “Laporan Saya” akan muncul semua laporan yang pernah Anda kirim.'],
        ['q' => 'Bagaimana cara memberi masukan atau laporan bug?', 'a' => 'Gunakan form “Hubungi Kami” atau bagian masukan di footer situs.']
    ] as $index => $faq)
        <div class="bg-white shadow border border-gray-200 overflow-hidden">
            <button 
                class="w-full flex justify-between items-center px-6 py-5 text-left text-gray-800 font-medium hover:bg-gray-100 transition"
                @click="selected === {{ $index + 30 }} ? selected = null : selected = {{ $index + 30 }}">
                <span>{{ $faq['q'] }}</span>
                <svg :class="{ 'rotate-180': selected === {{ $index + 30 }} }" 
                    class="h-5 w-5 transform transition-transform duration-200 text-gray-500" 
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div x-show="selected === {{ $index + 30 }}" x-collapse class="px-6 pb-5 text-gray-600 text-sm">
                {{ $faq['a'] }}
            </div>
        </div>
    @endforeach
    {{-- SECTION 5: Privasi & Keamanan --}}
<h2 class="text-2xl font-semibold text-gray-700 mb-4 mt-12">🛡️ Privasi & Keamanan</h2>
@foreach([
    ['q' => 'Apakah data saya disimpan dengan aman?', 'a' => 'Ya, kami menyimpan data pengguna di server yang aman dan hanya digunakan untuk kepentingan sistem.'],
    ['q' => 'Apakah data saya dijual ke pihak lain?', 'a' => 'Tidak, Binary Waste tidak membagikan atau menjual data pribadi pengguna ke pihak ketiga.'],
    ['q' => 'Bagaimana saya bisa hapus akun?', 'a' => 'Hubungi kami melalui form “Hubungi Kami” untuk permintaan penghapusan akun secara permanen.']
] as $index => $faq)
    <div class="bg-white shadow border border-gray-200 overflow-hidden">
        <button 
            class="w-full flex justify-between items-center px-6 py-5 text-left text-gray-800 font-medium hover:bg-gray-100 transition"
            @click="selected === {{ $index + 40 }} ? selected = null : selected = {{ $index + 40 }}">
            <span>{{ $faq['q'] }}</span>
            <svg :class="{ 'rotate-180': selected === {{ $index + 40 }} }" 
                class="h-5 w-5 transform transition-transform duration-200 text-gray-500" 
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>
        <div x-show="selected === {{ $index + 40 }}" x-collapse class="px-6 pb-5 text-gray-600 text-sm">
            {{ $faq['a'] }}
        </div>
    </div>
@endforeach

{{-- SECTION 6: Admin & Verifikasi --}}
<h2 class="text-2xl font-semibold text-gray-700 mb-4 mt-12">🧑‍💼 Admin & Verifikasi</h2>
@foreach([
    ['q' => 'Siapa yang menjadi admin Binary Waste?', 'a' => 'Admin adalah tim yang ditunjuk untuk mengelola konten, memverifikasi mitra dan memantau laporan pengguna.'],
    ['q' => 'Apakah saya bisa menjadi admin?', 'a' => 'Untuk menjadi admin, Anda harus menjadi mitra aktif dan mengajukan permohonan ke tim Binary Waste.'],
    ['q' => 'Berapa lama proses verifikasi mitra?', 'a' => 'Proses verifikasi mitra biasanya memakan waktu maksimal 1–3 hari kerja.']
] as $index => $faq)
    <div class="bg-white shadow border border-gray-200 overflow-hidden">
        <button 
            class="w-full flex justify-between items-center px-6 py-5 text-left text-gray-800 font-medium hover:bg-gray-100 transition"
            @click="selected === {{ $index + 50 }} ? selected = null : selected = {{ $index + 50 }}">
            <span>{{ $faq['q'] }}</span>
            <svg :class="{ 'rotate-180': selected === {{ $index + 50 }} }" 
                class="h-5 w-5 transform transition-transform duration-200 text-gray-500" 
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>
        <div x-show="selected === {{ $index + 50 }}" x-collapse class="px-6 pb-5 text-gray-600 text-sm">
            {{ $faq['a'] }}
        </div>
    </div>
@endforeach

{{-- SECTION 7: Teknis & Bantuan --}}
<h2 class="text-2xl font-semibold text-gray-700 mb-4 mt-12">🧠 Teknis & Bantuan</h2>
@foreach([
    ['q' => 'Website tidak bisa dibuka, apa yang harus saya lakukan?', 'a' => 'Pastikan koneksi internet Anda stabil. Coba bersihkan cache browser, atau akses dengan perangkat lain.'],
    ['q' => 'Saya tidak menerima email verifikasi?', 'a' => 'Cek folder spam terlebih dahulu. Jika tetap tidak ada, Anda bisa minta kirim ulang dari halaman profil.'],
    ['q' => 'Saya mengalami bug/error saat pakai platform.', 'a' => 'Silakan laporkan detail bug melalui formulir masukan. Cantumkan screenshot jika memungkinkan.']
] as $index => $faq)
    <div class="bg-white shadow border border-gray-200 overflow-hidden">
        <button 
            class="w-full flex justify-between items-center px-6 py-5 text-left text-gray-800 font-medium hover:bg-gray-100 transition"
            @click="selected === {{ $index + 60 }} ? selected = null : selected = {{ $index + 60 }}">
            <span>{{ $faq['q'] }}</span>
            <svg :class="{ 'rotate-180': selected === {{ $index + 60 }} }" 
                class="h-5 w-5 transform transition-transform duration-200 text-gray-500" 
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>
        <div x-show="selected === {{ $index + 60 }}" x-collapse class="px-6 pb-5 text-gray-600 text-sm">
            {{ $faq['a'] }}
        </div>
    </div>
@endforeach


</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endsection
