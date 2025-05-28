@extends('components.layout')

@section('title', 'faq')

@section('content')
    <div class="bg-gradient-to-br from-[#5f6f52] via-[#a9b388] to-white pt-28 pb-16">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-8">Pertanyaan yang Sering Diajukan</h1>
            <p class="text-lg text-gray-600 mb-12">Temukan jawaban untuk pertanyaanmu di bawah ini.</p>
        </div>

        <div class="max-w-3xl mx-auto px-6">
            <div class="space-y-6">
                <div>
                    <h2 class="text-xl font-semibold text-gray-700 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.14-3.225l1.5-5.5a4.5 4.5 0 013.46-3.46l5.5-1.5a4.5 4.5 0 013.225 1.14M6 6h.008v.008H6V6z" />
                        </svg>
                        Tentang Aplikasi
                    </h2>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <details class="group">
                            <summary class="list-none p-4 flex justify-between items-center cursor-pointer">
                                <span class="font-semibold text-gray-80">Apa itu Binary Waste?</span>
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
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-gray-700 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 text-blue-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.375 1.943 3.375h14.71c1.726 0 2.813-1.875 1.943-3.375L13.98 13.5h-2.96l-2.169 3.376z" />
                        </svg>
                        Pelaporan Sampah
                    </h2>
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
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-gray-700 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 text-indigo-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-4.036 10.5-7.5 10.5-3.464 0-7.5-3.358-7.5-10.5 0-7.143 4.036-10.5 7.5-10.5 3.464 0 7.5 3.357 7.5 10.5z" />
                        </svg>
                        Tentang Akun dan Mitra
                    </h2>
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
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-gray-700 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.14-3.225l1.5-5.5a4.5 4.5 0 013.46-3.46l5.5-1.5a4.5 4.5 0 013.225 1.14M6 6h.008v.008H6V6z" />
                        </svg>
                        Lain-lain
                    </h2>
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