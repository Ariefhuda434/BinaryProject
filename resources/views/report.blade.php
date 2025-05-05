@extends('components.layout')

@section('title', 'Event')

@section('content')
<div class="flex items-center justify-content-evenly bg-gray-100 py-10">
    <form action="{{ route('report.passing') }}" method="POST" class="ml-20 bg-white p-8 w-300 max-w-lg rounded-2xl shadow-xl space-y-3">
        @csrf

        <h2 class="text-2xl font-semibold text-gray-700 text-center">Ceritakan Lingkungan Mu</h2>

        @if(session('successReport'))
        <div class="bg-green-100 text-green-700 p-3 rounded-lg text-sm">
            berhasil berhasil hore hore
        </div>
        @endif

        <div>
            <label for="kategori" class="block mb-1 font-medium text-gray-600">Kategori</label>
            <select name="category" id="category" class="w-full border border-gray-300 rounded-lg p-3 bg-white focus:outline-none focus:ring-2 focus:ring-gray-400">
                <option value="sampah berserakan">Sampah Berserakan</option>
                <option value="Saluran air tersumbat">Saluran Air Tersumbat</option>
                <option value="polusi bau/udara ">Polusi Bau/Udara </option>
                <option value="barang bekas">Barang Bekas</option>
                <option value="lainnya">Lainnya</option>
            </select>
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
