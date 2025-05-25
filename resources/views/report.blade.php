@extends('components.layout')

@section('title', 'Event')

@section('content')
<div class="">
    <!-- Header Banner -->
<div class="relative max-w-4xl mx-auto mt-20 px-8">
     <h1 class="text-6xl md:text-6xl font-extrabold font-sans text-gray-900 mb-6 text-center">
     Laporin, Biar Cepat Beres!
    </h1>

    {{-- Deskripsi singkat --}}
    <p class="max-w-3xl text-center text-gray-600 text-lg md:text-xl mb-6 leading-relaxed">
        Laporkan kondisi lingkungan di wilayahmu dengan cepat dan mudah
    </p>

</div>

    <div class="w-11/12 max-w-6xl ml-7 md:mx-auto min-h-[440px] mr-40 rounded-xl">
        <div class="flex flex-col md:flex-row gap-4 h-full">
         
            <div class="relative w-full mx-auto md:w-80 h-100 rounded-lg overflow-hidden hover:scale-105 transition-transform duration-300 ease-in-out ">
                <img src="{{ asset('build/images/go.png') }}" alt="" class="absolute md:top-4  md:right-4 bg-white rounded-full h-9 p-2 rotate-220">
                <img src="{{ asset('build/images/report1.jpg') }}" alt="Report Image" class="w-full  hover:scale-105 transition-transform duration-700 ease-in-out  h-full object-cover rounded-lg" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent rounded-lg pointer-events-none"></div>
                <p class="absolute bottom-4 left-4 right-4 text-white text-lg md:text-xl font-semibold leading-snug text-center">
                    Laporkan sampah, buat perubahan nyata
                </p>
            </div>

            <div class="w-full md:w-110 flex flex-col gap-4">
                <div class="flex-1 bg-[#5e6f52] rounded-lg -ml-5 p-4 relative flex items-center justify-center hover:scale-105  hover:scale-105 transition-transform duration-700 ease-in-out ">
                    <p class="text-white text-lg md:text-2xl  font-semibold font-sans leading-snug text-start">
                        Langkah kecilmu hari ini bisa jadi perubahan besar untuk lingkungan,<br>
                        Mulailah Disini!
                    </p>
                    <img src="{{ asset('build/images/go.png') }}" alt="" class="absolute bottom-4 right-4 bg-white rounded-full h-9 p-2 rotate-220">
                </div>

                <div class="flex-1 bg-[#899d7b] rounded-lg p-4 -ml-5 hover:scale-105 transition-transform duration-700 ease-in-out ">
                    <div class="p-6">
                        <h3 class="text-gray-800 text-xl font-bold mb-2">Apa kamu merasa lebih sadar lingkungan hari ini?</h3>
                        <p class="text-gray-600 text-sm mb-4">Geser untuk beri penilaian jujurmu ya 🌱</p>
                        <form method="POST" action="{{ route('edit') }}">
                            @csrf
                            <input type="range" min="1" max="5" step="1" value="3"
                            class="w-full accent-[#5e6f52] transition-all duration-300" name='feedback' onchange="this.form.submit()" oninput="updateFeeling(this.value)">
                  
                            <p id="feelingLabel" class="mt-3 font-semibold text-[#5e6f52] text-base">Cukup sadar ♻️</p>
                        </form>
                    </div>
                </div>
            </div>

            <div class="relative w-full md:w-80 h-100 rounded-lg shadow-2xl overflow-hidden  hover:scale-105 transition-transform duration-700 ease-in-out ">
                <img src="{{ asset('build/images/go.png') }}" alt="" class="absolute top-4 right-4 bg-white rounded-full h-9 p-2 rotate-220">
                <img src="{{ asset('build/images/report2.jpg') }}" alt="Report Image" class="w-full  hover:scale-105 transform-all duration-700 ease-in-out  h-full object-cover rounded-lg" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent rounded-lg pointer-events-none"></div>
                <p class="absolute bottom-4 left-4 right-4 text-white text-lg md:text-xl font-semibold leading-snug text-center">
                    Kerja bersama, bersihkan bumi tercinta
                </p>
            </div>
        </div>
    </div>

    <div class="bg-[#a8b387] pb-20">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-full "  viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L8.6,90.7C17.1,85,34,75,51,101.3C68.6,128,86,192,103,213.3C120,235,137,213,154,197.3C171.4,181,189,171,206,181.3C222.9,192,240,224,257,240C274.3,256,291,256,309,245.3C325.7,235,343,213,360,202.7C377.1,192,394,192,411,165.3C428.6,139,446,85,463,64C480,43,497,53,514,80C531.4,107,549,149,566,176C582.9,203,600,213,617,224C634.3,235,651,245,669,256C685.7,267,703,277,720,245.3C737.1,213,754,139,771,101.3C788.6,64,806,64,823,101.3C840,139,857,213,874,245.3C891.4,277,909,267,926,256C942.9,245,960,235,977,208C994.3,181,1011,139,1029,144C1045.7,149,1063,203,1080,234.7C1097.1,267,1114,277,1131,277.3C1148.6,277,1166,267,1183,272C1200,277,1217,299,1234,288C1251.4,277,1269,235,1286,202.7C1302.9,171,1320,149,1337,160C1354.3,171,1371,213,1389,224C1405.7,235,1423,213,1431,202.7L1440,192L1440,0L1431.4,0C1422.9,0,1406,0,1389,0C1371.4,0,1354,0,1337,0C1320,0,1303,0,1286,0C1268.6,0,1251,0,1234,0C1217.1,0,1200,0,1183,0C1165.7,0,1149,0,1131,0C1114.3,0,1097,0,1080,0C1062.9,0,1046,0,1029,0C1011.4,0,994,0,977,0C960,0,943,0,926,0C908.6,0,891,0,874,0C857.1,0,840,0,823,0C805.7,0,789,0,771,0C754.3,0,737,0,720,0C702.9,0,686,0,669,0C651.4,0,634,0,617,0C600,0,583,0,566,0C548.6,0,531,0,514,0C497.1,0,480,0,463,0C445.7,0,429,0,411,0C394.3,0,377,0,360,0C342.9,0,326,0,309,0C291.4,0,274,0,257,0C240,0,223,0,206,0C188.6,0,171,0,154,0C137.1,0,120,0,103,0C85.7,0,69,0,51,0C34.3,0,17,0,9,0L0,0Z"></path></svg>
        <div class="md:-mt-130 -mt-50">
            <div class="relative z-10 ">
                <div class="bg-[#5e6f52] shadow-lg h-20 w-[25rem] md:w-[69rem] rounded-2xl mx-auto -mb-34 mt-50 flex items-center  ">
                    <h2 class="text-xl text-white font-semibold ml-10">Binary Event Project</h2>
                </div>
            </div>
            
            <div class="mt-20 pt-20 bg-gray-100 rounded-t-xl pb-10 max-w-6xl mx-auto relative overflow-hidden">
                <div class="overflow-x-auto px-4">
                <table class="w-full border border-gray-300 rounded-xl overflow-hidden text-sm border-b-1 ">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-3 text-center">Laporan</th>
            <th class="p-3 text-center">Pelapor</th>
            <th class="p-3 text-center">Tanggal</th>
            <th class="p-3 text-center">Status</th>
            <th class="p-3 text-center">Lokasi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($report as $lapor)
            <tr class="border-b-1 border-gray-300">
                <td class="p-3 text-center flex">
                    @if (auth()->check() && auth()->user()->role == 'admin')
                    <form action="{{ route('delete', $lapor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <img src="{{ asset('build/images/delete.png') }}" alt="" srcset="" onclick="return confirm('Are you sure you want to delete this product?')" class="mr-20 transition ease-in-out duration-200 hover:rotate-3 active:-rotate-3">
                        </button>
                    </form>
                    @endif
                    {{ $lapor->judul }}
                </td>
                <td class="p-3 text-center">{{ $lapor->user->name ?? 'Tidak diketahui' }}</td>
                <td class="p-3 text-center">{{ $lapor->created_at->format('d M Y') }}</td>
                <td class="flex relative p-3 justify-center">
                    @if (auth()->check() && auth()->user()->role == 'admin')
                        <form action="{{ route('edit', $lapor->id) }}" method="POST" class="">
                            @csrf
                            @method('PUT')
                                <select name="status" onchange="this.form.submit()" class="text-sm">
                                    <option  value="{{ $lapor->status }}" disabled selected>{{ $lapor->status }}</option>
                                    <option value="Menunggu" {{ $lapor->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                                    <option value="Diterima" {{ $lapor->status == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                    <option value="Diproses" {{ $lapor->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                </select>
                        </form>
                    @else
                        <span class="capitalize">{{ $lapor->status }}</span>
                    @endif
                </td>
                <td class="p-3 text-center ">{{ $lapor->location }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

                </div>
            </div>
        </div>
            

        <!-- Report Button -->
        <div class="bg-[#5e6f52] rounded-b-xl w-full max-w-6xl mx-auto h-20 relative">
        <button id="btnShow" class="absolute left-10 transform mt-5">
    <div class="relative flex items-center space-x-3 group">
        <div class="relative w-6 h-6 transform transition-transform duration-300 group-hover:rotate-90">
            <span class="absolute top-1/2 left-0 w-6 h-1 bg-white rounded transform -translate-y-1/2"></span>
            <span class="absolute top-1/2 left-0 w-6 h-1 bg-white rounded transform -translate-y-1/2 -rotate-90"></span>
        </div>
        <p class="text-xl text-white font-bold">Lapor pak</p>
    </div>
</button>

    </div>
    
    
    <!-- Report Form (Hidden by default) -->
    <div id="formlapor" class="flex hidden opacity-0  transition-opacity duration-500 ease-in-out items-center justify-center bg-[#a8b387] py-10">
        <form action="{{ route('passing') }}" method="POST" enctype="multipart/form-data"
        class="bg-white p-8 w-[72rem] rounded-2xl shadow-xl space-y-4">
        @csrf
        
        <h2 class="text-2xl font-semibold text-gray-700 text-center">Ceritakan Lingkungan Mu</h2>
        
        @if (session('succesReport'))
        <div class="bg-green-100 text-green-700 p-3 rounded-lg text-sm">Berhasil berhasil hore hore</div>
        @elseif (session('error'))
        <div class="bg-red-100 text-red-700 p-3 rounded-lg text-sm">What the hell omagat</div>
        @endif
        
        <div>
            <label for="judul" class="block mb-1 font-medium text-gray-600">Judul Laporan</label>
            <input type="text" name="judul" id="judul"
            class="w-full border border-gray-300 rounded-lg p-3">
        </div>
        
        <div>
            <label for="deskripsi" class="block mb-1 font-medium text-gray-600">Isi Laporan</label>
            <textarea name="deskripsi" id="deskripsi" rows="3"
            class="w-full border border-gray-300 rounded-lg p-3 resize-y"
            placeholder="Isi laporan..."></textarea>
        </div>
        
        
        <div class="w-full">
            <label for="location" class="block mb-1 font-medium text-gray-600">Lokasi</label>
            <input type="text" name="location" id="location"
            class="w-full border border-gray-300 rounded-lg p-3">
        </div>

        <div>
            <label for="images" class="block mb-1 font-medium text-gray-600">Upload Gambar</label>
            <input type="file" name="foto" id="foto" accept="image/*"
            class="w-full border border-gray-300 rounded-lg p-3">
            <img id="preview-image" src="#" alt="Preview"
            class="hidden mt-2 w-full max-h-64 object-cover">
        </div>
        
        @guest
        <button type="button" id="reportClick"
        class="w-full p-3 bg-[#687161] text-white rounded-lg hover:bg-[#7b8374] transition">
        Kirim (Login Diperlukan)
    </button>
    @else
    <button type="submit"
    class="w-full p-3 bg-[#687161] text-white rounded-lg hover:bg-[#7b8374] transition">
    Kirim Laporan
</button>
@endguest
<p class="text-center">Perhatikan Cara Menyampaikan Laporan Yang Baik dan Benar <a href="" class="text-blue-900">lihat Panduan</a></p>
</form>
</div>

<!-- Login Popup (Hidden by default) -->
<div id="reportbtn"
class="fixed top-1/3 left-1/2 transform -translate-x-1/2 bg-white p-8 rounded-xl shadow-lg hidden opacity-0 transition-opacity duration-300 z-50">
<p class="text-xl font-semibold text-center text-gray-700">Silakan login terlebih dahulu yaa!</p>
<a href="{{ route('login') }}"
class="block mt-6 px-6 py-3 bg-gray-600 text-white rounded-full text-center hover:bg-gray-700 transition">
Masuk
</a>
</div>
</div>

</div>
<!-- Footer -->
<footer class="bg-[#5e6f52] pt-30 w-screen text-white ">
  <div class="container mx-auto flex justify-center gap-12">
    <div class="flex items-center space-x-3">
      <img src="{{ asset('build/images/youtube.png') }}" alt="YouTube" class="h-10">
      <p>Binary Waste Official</p>
    </div>
    <div class="flex items-center space-x-3">
      <img src="{{ asset('build/images/email.png') }}" alt="Email" class="h-8">
      <p>binarywaste@gmail.com</p>
    </div>
    <div class="flex items-center space-x-3">
      <img src="{{ asset('build/images/contact.png') }}" alt="Contact" class="h-8">
      <p>0822-1221-2123</p>
    </div>
  </div>
  <p class="border-t border-white mb-10 w-2/3 mx-auto text-center pt-4 pb-4 mt-8 text-sm">
    © 2025 BinaryWaste. All rights reserved.
  </p>
</footer>

<!-- Script -->
<script>
    AOS.init();
    
    function updateFeeling(value) {
        const label = document.getElementById('feelingLabel');
        const feedback = {
            1: "Belum peduli 😞",
            2: "Sedikit sadar 🧐",
            3: "Cukup sadar ♻️",
            4: "Mulai peduli 🌿",
            5: "Sangat peduli! 🌍"
        };
        label.textContent = feedback[value] || '';
    }

    document.getElementById('reportClick')?.addEventListener('click', () => {
        const reportPopup = document.getElementById('reportbtn');
        reportPopup.classList.remove('hidden');
        setTimeout(() => {
            reportPopup.classList.add('opacity-100');
            reportPopup.classList.remove('opacity-0');
            AOS.refresh();
            reportPopup.scrollIntoView({ behavior: 'smooth' });
        }, 10);
    });

    document.getElementById('btnShow')?.addEventListener('click', () => {
        const formLapor = document.getElementById('formlapor');
        formLapor.classList.remove('hidden');
        setTimeout(() => {
            formLapor.classList.add('opacity-100');
            formLapor.classList.remove('opacity-0');
            formLapor.scrollIntoView({ behavior: 'smooth' });
        }, 10);
    });
</script>
@endsection