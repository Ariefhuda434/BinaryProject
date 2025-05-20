@extends('components.layout')

@section('title', 'faq')

@section('content')
        <div class="bg-gradient-to-br from-[#587169] via-[#B8D8BA] to-white pt-28 pb-16">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-8">Pertanyaan yang Sering Diajukan</h1>
            <p class="text-lg text-gray-600 mb-12">Temukan jawaban untuk pertanyaanmu di bawah ini.</p>
        </div>

        <div class="max-w-3xl mx-auto px-6">
            <div class="space-y-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <details class="group">
                        <summary class="list-none p-4 flex justify-between items-center cursor-pointer">
                            <span class="font-semibold text-gray-800">Apa itu Binary Waste?</span>
                            <svg class="w-5 h-5 text-gray-500 transition-transform duration-300 group-open:rotate-180"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="p-4 text-gray-600 text-sm">
                            Binary Waste adalah platform berbasis web yang memudahkan masyarakat untuk melaporkan permasalahan sampah di lingkungan sekitar, sekaligus memantau tindak lanjutnya.
                        </div>
                    </details>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <details class="group">
                        <summary class="list-none p-4 flex justify-between items-center cursor-pointer">
                            <span class="font-semibold text-gray-800">Bagaimana cara membuat laporan sampah?</span>
                            <svg class="w-5 h-5 text-gray-500 transition-transform duration-300 group-open:rotate-180"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="p-4 text-gray-600 text-sm">
                            Kamu cukup klik tombol "Laporkan Sampah" di halaman utama, isi data laporan, upload foto lokasi, dan submit laporanmu.
                        </div>
                    </details>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <details class="group">
                        <summary class="list-none p-4 flex justify-between items-center cursor-pointer">
                            <span class="font-semibold text-gray-800">Apakah saya harus membuat akun untuk melapor?</span>
                            <svg class="w-5 h-5 text-gray-500 transition-transform duration-300 group-open:rotate-180"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="p-4 text-gray-600 text-sm">
                            Ya, user yang ingin membuat pengaduan sampah harus mendaftar sebagai user terlebih dahulu.
                        </div>
                    </details>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
    <details class="group">
        <summary class="list-none p-4 flex justify-between items-center cursor-pointer">
            <span class="font-semibold text-gray-800">Bagaimana cara untuk mendaftar sebagai mitra?</span>
            <svg class="w-5 h-5 text-gray-500 transition-transform duration-300 group-open:rotate-180"
                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </summary>
        <div class="p-4 text-gray-600 text-sm">
            Kamu bisa mendaftarkan diri sebagai mitra dengan cara mendaftarkan diri sebagai user terlebih dahulu. Jadi, mitra adalah tambahan data dari user. Setelah mendaftarkan diri sebagai mitra, nantinya kamu akan menunggu verifikasi dari admin untuk menerima
            ajuan yang sudah kamu sampaikan.
        </div>
        </details>
              </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <details class="group">
                        <summary class="list-none p-4 flex justify-between items-center cursor-pointer">
                            <span class="font-semibold text-gray-800">Apa saja yang boleh saya laporkan di sini?</span>
                            <svg class="w-5 h-5 text-gray-500 transition-transform duration-300 group-open:rotate-180"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="p-4 text-gray-600 text-sm">
                            Segala jenis permasalahan sampah di area publik seperti tumpukan sampah liar, TPS penuh, atau pembuangan illegal yang terjadi di daerah kamu.
                        </div>
                    </details>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <details class="group">
                        <summary class="list-none p-4 flex justify-between items-center cursor-pointer">
                            <span class="font-semibold text-gray-800">Apakah laporan tanpa foto bisa diproses?</span>
                            <svg class="w-5 h-5 text-gray-500 transition-transform duration-300 group-open:rotate-180"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="p-4 text-gray-600 text-sm">
                            Sebaiknya sertakan foto untuk mempercepat verifikasi dan penanganan, tapi laporan tanpa foto tetap bisa diproses.
                        </div>
                    </details>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <details class="group">
                        <summary class="list-none p-4 flex justify-between items-center cursor-pointer">
                            <span class="font-semibold text-gray-800">Siapa yang menangani laporan saya?</span>
                            <svg class="w-5 h-5 text-gray-500 transition-transform duration-300 group-open:rotate-180"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="p-4 text-gray-600 text-sm">
                            Laporan akan diteruskan ke pihak admin untuk menunggu verifikasi terlebih dahulu.
                        </div>
                    </details>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <details class="group">
                        <summary class="list-none p-4 flex justify-between items-center cursor-pointer">
                            <span class="font-semibold text-gray-800">Berapa lama laporan saya diproses?</span>
                            <svg class="w-5 h-5 text-gray-500 transition-transform duration-300 group-open:rotate-180"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="p-4 text-gray-600 text-sm">
                            Tergantung tingkat prioritas dan kondisi di lapangan. Biasanya sekitar 1-3 hari kerja.
                        </div>
                    </details>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <details class="group">
                        <summary class="list-none p-4 flex justify-between items-center cursor-pointer">
                            <span class="font-semibold text-gray-800">Apakah saya bisa melihat laporan orang lain?</span>
                            <svg class="w-5 h-5 text-gray-500 transition-transform duration-300 group-open:rotate-180"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="p-4 text-gray-600 text-sm">
                            Bisa, laporan milik orang lain dapat kamu lihat di halaman "Laporan" beserta statusnya.
                        </div>
                    </details>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <details class="group">
                        <summary class="list-none p-4 flex justify-between items-center cursor-pointer">
                            <span class="font-semibold text-gray-800">Apakah saya bisa berkomentar atau memberikan dukungan di laporan lain?</span>
                            <svg class="w-5 h-5 text-gray-500 transition-transform duration-300 group-open:rotate-180"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="p-4 text-gray-600 text-sm">
                            Untuk saat ini fitur agar bisa berkomentar di laporan orang lain belum tersedia
                        </div>
                    </details>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <details class="group">
                        <summary class="list-none p-4 flex justify-between items-center cursor-pointer">
                            <span class="font-semibold text-gray-800">Saya mengalami kendala saat upload foto, apa yang harus saya lakukan?</span>
                            <svg class="w-5 h-5 text-gray-500 transition-transform duration-300 group-open:rotate-180"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="p-4 text-gray-600 text-sm">
                            Pastikan ukuran file maksimal 2MB dan format JPG, PNG, atau JPEG. Jika masih gagal, coba untuk kembali merefresh halaman.
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>
@endsection