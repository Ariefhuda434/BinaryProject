@extends('components.layout')

@section('title', 'Event')

@section('content')
<div class="bg-[#a8b387] pb-100">

    <div class="p-8.5 bg-[#687161]"></div>
    <div class="mt-20 px-4 ">
        <div class="bg-[#5e6f52] shadow-lg h-20 w-280 rounded-2xl absolute left-1/2 transform -translate-x-1/2 top-30 flex items-center z-10 px-6">
            <p class="text-xl text-white font-semibold">Binary Event Project</p>
        </div>
        <div class="bg-gray-100 pt-10 rounded-t-xl pb-10 max-w-6xl mx-auto relative overflow-hidden">
            <div class="overflow-x-auto  pl-6 pr-6">
                <table class="mt-4 w-full min-w-[600px] border border-black rounded-xl overflow-hidden">
                    <thead>
                        <tr>
                            <th class="border-b-1 text-left border-gray-200 px-4 py-2">Laporan</th>
                            <th class="border-b-1 text-left border-gray-200 px-4 py-2">Pelapor</th>
                            <th class="border-b-1 text-left border-gray-200 px-4 py-2">Tanggal Pelapor</th>
                            <th class="border-b-1 text-left border-gray-200 px-4 py-2">Status</th>
                            <th class="border-b-1 text-left border-gray-200 px-4 py-2">Lokasi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-100 divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2">Sampah menumpuk</td>
                            <td class="px-4 py-2">Sani</td>
                            <td class="px-4 py-2">2025-05-01</td>
            <td class="px-4 py-2"><span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Diproses</span></td>
            <td class="px-4 py-2">Jakarta Selatan</td>
          </tr>
          <tr class="hover:bg-gray-50">
              <td class="px-4 py-2">TPS penuh</td>
              <td class="px-4 py-2">Agus</td>
              <td class="px-4 py-2">2025-05-02</td>
              <td class="px-4 py-2"><span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Belum Diproses</span></td>
              <td class="px-4 py-2">Bandung</td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-2">Drainase mampet</td>
                <td class="px-4 py-2">Nina</td>
                <td class="px-4 py-2">2025-05-03</td>
                <td class="px-4 py-2"><span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Selesai</span></td>
                <td class="px-4 py-2">Depok</td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-2">Sampah liar</td>
                <td class="px-4 py-2">Dian</td>
                <td class="px-4 py-2">2025-05-04</td>
                <td class="px-4 py-2"><span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Diproses</span></td>
                <td class="px-4 py-2">Bogor</td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-2">Kontainer rusak</td>
                <td class="px-4 py-2">Raka</td>
                <td class="px-4 py-2">2025-05-05</td>
                <td class="px-4 py-2"><span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Belum Diproses</span></td>
                <td class="px-4 py-2">Bekasi</td>
            </tr>
        </tbody>
    </table>
</div>

</div>
<div class="bg-[#5e6f52] rounded-b-xl w-288 mx-auto h-20">
    <button type="button" id="btnShow" class="absolute  left-50 mt-5.5">
        <span class="absolute top-4 left-4 w-6 h-1 bg-white transform-all duration-300 ease rounded"></span>
        <span class="absolute top-4 left-4 w-6 h-1 bg-white transform-all duration-300 ease -rotate-90 rounded"></span>
        <p class="pt-1 text-xl text-white cursor-pointer font-sans font-black pl-20">Lapor pak</p>
    </button>
</div>
</div>

<div id="formlapor" class="flex hidden opacity-0 transition-opacity duration-500 ease-in-out items-center bg-gray-100 py-10">
    <form action="{{ route('report.passing') }}" method="POST" enctype="multipart/form-data"
    class="ml-20 bg-white p-8 w-300 max-w-lg rounded-2xl shadow-xl space-y-4">
    @csrf
    
    <h2 class="text-2xl font-semibold text-gray-700 text-center">Ceritakan Lingkungan Mu</h2>
    
    @if (session('succesReport'))
    <div class="bg-green-100 text-green-700 p-3 rounded-lg text-sm">
        Berhasil berhasil hore hore
    </div>
    @elseif (session('error'))
    <div class="bg-red-100 text-red-700 p-3 rounded-lg text-sm">
        What the hell omagat
    </div>
    @endif
    
    <div>
        <label for="category" class="block mb-1 font-medium text-gray-600">Judul Laporan</label>
        <input type="text" name="category" id="category"
        class="w-full border border-gray-300 rounded-lg p-3 bg-white focus:outline-none focus:ring-2 focus:ring-gray-400">
    </div>
    
    <div>
        <label for="images" class="block mb-1 font-medium text-gray-600">Upload Gambar</label>
        <input type="file" accept="image/*" name="images" id="images"
        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none">
        <img id="preview-image" src="#" alt="Preview"
        class="hidden mt-2 w-full h-auto max-h-64 text-gray-600 border">
    </div>
    
    <div>
        <label for="description" class="block mb-1 font-medium text-gray-600">Deskripsi</label>
        <textarea name="description" id="description" placeholder="Deskripsi laporan..." rows="2"
        class="w-full border border-gray-300 rounded-lg p-3 resize-y focus:outline-none focus:ring-2 focus:ring-gray-400"></textarea>
    </div>
    
    <div class="flex gap-4 mt-5">
        <div class="w-full">
            <label for="location" class="block mb-1 font-medium text-gray-600">Lokasi</label>
            <input type="text" name="location" id="location" placeholder="Lokasi"
            class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>
        
        <div class="w-full">
            <label for="date" class="block mb-1 font-medium text-gray-600">Tanggal</label>
            <input type="date" name="date" id="date"
            class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>
    </div>
    
    @guest
    <div class="text-center">
        <button type="button" id="reportClick"
        class="w-full p-3 bg-[#687161] text-white rounded-lg hover:bg-[#7b8374] transition">
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
</form>

</div>



{{-- Pop-up login --}}
<div id="reportbtn"
class="fixed top-1/3 left-1/2 transform -translate-x-1/2 bg-white p-10 rounded-xl shadow-lg hidden opacity-0 transition-opacity duration-300 z-50">
<p class="text-xl font-semibold text-center text-gray-700">Silakan login terlebih dahulu yaa!</p>
<a href="{{ route('login') }}"
class="block mt-6 px-6 py-3 bg-gray-600 text-white rounded-full text-center hover:bg-gray-700 transition">
Masuk
</a>
</div>

</div>
<footer class="mt-40 p-10 bg-[#5e6f52] w-full flex items-center justify-center">
    <p class="text-white border-t border-white pt-4 px-6">© 2025 BinaryWaste. All rights reserved.</p>
</footer>

<script>
    AOS.init();
    document.getElementById('reportClick').addEventListener('click', () => {
        const Report = document.getElementById('reportbtn');
        Report.classList.remove('hidden');
        setTimeout(() => {
            Report.classList.add('opacity-100');
            Report.classList.remove('opacity-0');
            AOS.refresh();
            Report.scrollIntoView({
                    behavior: 'smooth'
                });
            }, 10);
        });
        const showBtn = document.getElementById('btnShow');
        showBtn.addEventListener('click', () => {
        AOS.init();
                   const formLapor = document.getElementById('formlapor');
                    formLapor.classList.remove('hidden');
                    setTimeout(() => {
                        formLapor.classList.add('opacity-100');
                        formLapor.classList.remove('opacity-0');
                        formLapor.scrollIntoView({ behavior: 'smooth' });
                    }, 10);
                }
            );
        
    </script>
@endsection
