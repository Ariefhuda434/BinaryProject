@extends('components.layout')

@section('title', 'tentang')

@section('content')
<x-header></x-header>

<div class="flex flex-col items-center w-[1000px] mx-auto h-screen px-4 mx-auto ">
    <p class="font-black mt-5 text-xl">Data Pembuangan Sampah Ilegal</p>
    <table class="border-1 border-gray-200 w-full rounded-lg mt-5 text-sm text-left">
        <thead class="bg-gray-100 border border-gray-200">
            <tr>
                <th class="px-6 py-3 border border-gray-200">NO</th>
                <th class="px-6 py-3 border border-gray-200">Laporan</th>
                <th class="px-6 py-3 border border-gray-200">Pelapor</th>
                <th class="px-6 py-3 border border-gray-200">Tanggal Laporan</th>
                <th class="px-6 py-3 border border-gray-200">Status</th>
                <th class="px-6 py-3 border border-gray-200">Lokasi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-6 py-2 border border-gray-200">1</td>
                <td class="px-6 py-2 border border-gray-200">Tumpukan Sampah di Gang Buntu</td>
                <td class="px-6 py-2 border border-gray-200">Rahmawati</td>
                <td class="px-6 py-2 border border-gray-200">2025-05-01</td>
                <td class="px-6 py-2 border border-gray-200 text-yellow-600">Diproses</td>
                <td class="px-6 py-2 border border-gray-200">Jl. Melati No. 4, Bandung</td>
            </tr>
            <tr>
                <td class="px-6 py-2 border border-gray-200">2</td>
                <td class="px-6 py-2 border border-gray-200">Sampah Mengambang di Sungai</td>
                <td class="px-6 py-2 border border-gray-200">Deni Firmansyah</td>
                <td class="px-6 py-2 border border-gray-200">2025-04-28</td>
                <td class="px-6 py-2 border border-gray-200 text-green-600">Selesai</td>
                <td class="px-6 py-2 border border-gray-200">Sungai Ciliwung, Jakarta</td>
            </tr>
            <tr>
                <td class="px-6 py-2 border border-gray-200">3</td>
                <td class="px-6 py-2 border border-gray-200">Pembuangan Sampah Liar di Lahan Kosong</td>
                <td class="px-6 py-2 border border-gray-200">Agus Santoso</td>
                <td class="px-6 py-2 border border-gray-200">2025-04-30</td>
                <td class="px-6 py-2 border border-gray-200 text-red-600">Belum Ditindak</td>
                <td class="px-6 py-2 border border-gray-200">Perumahan Griya Asri, Bekasi</td>
            </tr>
            <tr>
                <td class="px-6 py-2 border border-gray-200">4</td>
                <td class="px-6 py-2 border border-gray-200">Sampah Menumpuk di Pinggir Jalan</td>
                <td class="px-6 py-2 border border-gray-200">Siti Aminah</td>
                <td class="px-6 py-2 border border-gray-200">2025-04-27</td>
                <td class="px-6 py-2 border border-gray-200 text-yellow-600">Diproses</td>
                <td class="px-6 py-2 border border-gray-200">Jl. Raya Bogor, Depok</td>
            </tr>
            <tr>
                <td class="px-6 py-2 border border-gray-200">5</td>
                <td class="px-6 py-2 border border-gray-200">Tempat Pembuangan Tidak Resmi</td>
                <td class="px-6 py-2 border border-gray-200">Rudi Hartono</td>
                <td class="px-6 py-2 border border-gray-200">2025-05-03</td>
                <td class="px-6 py-2 border border-gray-200 text-gray-500">Dalam Verifikasi</td>
                <td class="px-6 py-2 border border-gray-200">Kampung Rawa, Tangerang</td>
            </tr>
        </tbody>
    </table>
    
</div>



@endsection
