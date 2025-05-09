@extends('components.layout')

@section('title', 'Event')

@section('content')
<div class="flex items-center justify-content-evenly bg-gray-100 py-10">
    <form action="{{ route('report.passing') }}" method="POST" class="ml-20 bg-white p-8 w-300 max-w-lg rounded-2xl shadow-xl space-y-3">
        @csrf

        <h2 class="text-2xl font-semibold text-gray-700 text-center">Ceritakan Lingkungan Mu</h2>

        @if(session('succesReport'))
        <div class="bg-green-100 text-green-700 p-3 rounded-lg text-sm">
            berhasil berhasil hore hore
        </div>
        @elseif (session('error'))
        <div class="bg-red-100 text-red-700 p-3 rounded-lg text-sm">
            what the helll omagat
        </div>

        @endif

        <div>
            <label for="category" class="block mb-1 font-medium text-gray-600">Report</label>
            <input name="category" id="category" class="w-full border border-gray-300 rounded-lg p-3 bg-white focus:outline-none focus:ring-2 focus:ring-gray-400">
            </input>
        </div>
        <div>
            <label for="images" class="<img id="preview-image" src="#" alt="Preview" class="hidden mt-2 w-full h-auto max-h-64 text-gray-600 border">Upload Gambar</label>
            <input type="file" accept="image/*" name="images" id="images" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none">
        </div>

        <div>
            <label for="description" class="block mb-1 font-medium text-gray-600">Deskripsi</label>
            <textarea name="description" id="description" placeholder="Deskripsi laporan..." rows="2" class="w-full border border-gray-300 rounded-lg p-3 resize-y focus:outline-none focus:ring-2 focus:ring-gray-400"></textarea>
        </div>
    
<div class="flex gap-4 mt-5 ">
    <div>
        <label for="location" class="inline mb-1 font-medium text-gray-600">Lokasi</label>
        <input type="text" name="location" id="location" placeholder="Lokasi" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-gray-400">
    </div>
    
    <div>
        <label for="date" class="inline mb-1 font-medium text-gray-600">Tanggal</label>
        <input type="date" name="date" id="date" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-gray-400">
    </div>
</div>

        @guest
        <div class="text-center">
            <button type="button" onclick="showAlert()" class="w-full p-3 bg-[#687161] text-white rounded-lg hover:bg-[#7b8374] transition">
                Kirim (Login Diperlukan)
            </button>
        </div>
        @else
        <div class="text-center">
            <button type="submit" class="w-full p-3 bg-[#687161] text-white rounded-lg hover:bg-[#7b8374] transition">
                Kirim Laporan
            </button>
        </div>
        @endguest
</div>
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

<footer class="mt-70 p-30 bg-[#5e6f52] w-screen flex items-center justify-center py-20">
    <p class="text-white border-t border-white pt-4 px-6">© 2025 BinaryWaste. All rights reserved.</p>
 </footer>

<script>
    function showAlert() {
        const confirmation = confirm("Anda belum login.\nKlik OK untuk login, atau Cancel untuk tetap di halaman ini.");
        if (confirmation) {
            window.location.href = "{{ route('login') }}";
        }
    }
</script>
@endsection
