@extends('components.layout')

@section('title', 'Event')

@section('content')
<div class="">
    <div class="relative max-w-4xl mx-auto mt-10 md:mt-20 pt-20 px-4 md:px-8">
    <h1 class="text-4xl md:text-6xl font-extrabold font-sans text-gray-900 mb-4 md:mb-6 text-center">
        Laporin, Biar Cepat Beres!
    </h1>
    <p class="max-w-3xl mx-auto text-center text-gray-600 text-base md:text-xl mb-6 leading-relaxed">
        Laporkan kondisi lingkungan di wilayahmu dengan cepat dan mudah
    </p>
</div>

<div class="w-11/12 max-w-6xl mx-auto min-h-[440px] rounded-xl px-4 lg:px-0">
    <div class="flex flex-col lg:flex-row gap-6 h-full">
        <div class="relative w-full lg:w-1/4 h-64 lg:h-auto rounded-lg overflow-hidden hover:scale-105 transition-transform duration-300 ease-in-out">
            <img src="{{ asset('build/images/awn.jpg') }}" alt="Report Image" class="w-full h-full object-cover rounded-lg" />
            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent rounded-lg pointer-events-none"></div>
        <div class="absolute -bottom-68 hover:-bottom-40 h-full w-full transform-all duration-500 ease-in-out">
  <p class="text-white text-lg lg:text-xl font-semibold leading-snug text-center">
    Laporkan sampah, buat perubahan nyata
  </p>
  <p class="text-white  mt-3 text-justify px-5 leading-relaxed">
    Bersama kita ciptakan lingkungan bersih dan sehat lewat aksi kecil: laporkan sampah di sekitarmu
</p>
</div>

        </div>

        <div class="w-full lg:w-2/4 flex flex-col gap-4">
            <div class="flex-1 bg-[#5e6f52] rounded-lg p-4 lg:p-6 relative flex items-center justify-center hover:scale-105 transition-transform duration-300 ease-in-out">
                <p class="text-white text-base lg:text-2xl font-semibold font-sans leading-snug text-center lg:text-start">
                    Langkah kecilmu hari ini bisa jadi perubahan besar untuk lingkungan,<br>
                    Mulailah Disini!
                </p>
                <button id="golaporan" class="tranform-all duration-700 ease-in-out"  >
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-4 right-4 rounded hover:rotate-137 transform-all duration-700 ease-in-out "  width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-arrow-out-up-right-icon lucide-circle-arrow-out-up-right"><path d="M22 12A10 10 0 1 1 12 2"/><path d="M22 2 12 12"/><path d="M16 2h6v6"/></svg>
                </button>
            
            </div>

            <div class="flex-1 bg-[#899d7b] rounded-lg p-4 lg:p-6 hover:scale-105 transition-transform duration-300 ease-in-out">
                <h3 class="text-gray-800 text-lg lg:text-xl font-bold mb-2">Apa kamu merasa lebih sadar lingkungan hari ini?</h3>
                <p class="text-gray-600 text-xs lg:text-sm mb-4">Geser untuk beri penilaian jujurmu ya 🌱</p>
                <form method="POST" action="{{ route('feedback') }}">
                    @csrf
                    <input type="range" min="1" max="5" step="1" value="3"
                        class="w-full accent-[#5e6f52] transition-all duration-300" name='feedback'
                        onchange="this.form.submit()" oninput="updateFeeling(this.value)">
                    <p id="feelingLabel" class="mt-3 font-semibold text-[#5e6f52] text-sm lg:text-base">Cukup sadar ♻️</p>
                </form>
            </div>
        </div>


          <div class="relative w-full lg:w-1/4 h-64 lg:h-auto rounded-lg overflow-hidden hover:scale-105 transition-transform duration-300 ease-in-out">
            <img src="{{ asset('build/images/awn.jpg') }}" alt="Report Image" class="w-full h-full object-cover rounded-lg" />
            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent rounded-lg pointer-events-none"></div>
        <div class="absolute -bottom-68 hover:-bottom-40 h-full w-full transform-all duration-500 ease-in-out">
        <p class="text-white text-lg lg:text-xl font-semibold leading-snug text-center">
                Kerja bersama, bersihkan bumi tercinta
            
        </p>
         <p class="text-white  mt-3 text-justify px-5 leading-relaxed">
            Jadikan kebersihan sebagai budaya dengan aktif melapor dan peduli terhadap lingkungan demi masa depan bumi kita.
        
        </p>
        </div>

        </div>
    </div>
</div>

<section class="relative max-w-6xl mx-auto w-full -mt-10 overflow-hidden  bg-white py-5">
  <div class="marquee flex w-max space-x-5 animate-marquee">
    
    <div class="h-40 w-80 p-4 bg-gray-100 rounded-xl shadow-md flex space-x-4 hover:scale-105 transition-transform duration-300 ease-in-out">
      
      <div class="h-24 w-28 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('build/images/awn.jpg') }}" alt="Kegiatan Daur Ulang" class="h-full w-full object-cover" />
      </div>
      
      <div class="flex flex-col justify-between py-1">
        <div>
          <p class="text-gray-800 font-semibold text-sm leading-tight">
            Kegiatan daur ulang di SD Barunawati IV, Jakarta Utara.
          </p>
          <p class="text-gray-500 text-xs mt-1">Medan, 18 Mei 2006</p>
        </div>

        <div class="mt-3">
          <span class="inline-block text-xs font-semibold text-green-700 bg-green-100 px-3 py-1 rounded-full shadow-sm">
            Edukasi Lingkungan
          </span>
        </div>
      </div>
    </div>
    
    <div class="h-40 w-80 p-4 bg-gray-100 rounded-xl shadow-md flex space-x-4 hover:scale-105 transition-transform duration-300 ease-in-out">
      
      <div class="h-24 w-28 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('build/images/awn.jpg') }}" alt="Kegiatan Daur Ulang" class="h-full w-full object-cover" />
      </div>
      
      <div class="flex flex-col justify-between py-1">
        <div>
          <p class="text-gray-800 font-semibold text-sm leading-tight">
            Kegiatan daur ulang di SD Barunawati IV, Jakarta Utara.
          </p>
          <p class="text-gray-500 text-xs mt-1">Medan, 18 Mei 2006</p>
        </div>

        <div class="mt-3">
          <span class="inline-block text-xs font-semibold text-green-700 bg-green-100 px-3 py-1 rounded-full shadow-sm">
            Edukasi Lingkungan
          </span>
        </div>
      </div>
    </div>
    
    <div class="h-40 w-80 p-4 bg-gray-100 rounded-xl shadow-md flex space-x-4 hover:scale-105 transition-transform duration-300 ease-in-out">
      
      <div class="h-24 w-28 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('build/images/awn.jpg') }}" alt="Kegiatan Daur Ulang" class="h-full w-full object-cover" />
      </div>
      
      <div class="flex flex-col justify-between py-1">
        <div>
          <p class="text-gray-800 font-semibold text-sm leading-tight">
            Kegiatan daur ulang di SD Barunawati IV, Jakarta Utara.
          </p>
          <p class="text-gray-500 text-xs mt-1">Medan, 18 Mei 2006</p>
        </div>

        <div class="mt-3">
          <span class="inline-block text-xs font-semibold text-green-700 bg-green-100 px-3 py-1 rounded-full shadow-sm">
            Edukasi Lingkungan
          </span>
        </div>
      </div>
    </div>
    
    <div class="h-40 w-80 p-4 bg-gray-100 rounded-xl shadow-md flex space-x-4 hover:scale-105 transition-transform duration-300 ease-in-out">
      
      <div class="h-24 w-28 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('build/images/awn.jpg') }}" alt="Kegiatan Daur Ulang" class="h-full w-full object-cover" />
      </div>
      
      <div class="flex flex-col justify-between py-1">
        <div>
          <p class="text-gray-800 font-semibold text-sm leading-tight">
            Kegiatan daur ulang di SD Barunawati IV, Jakarta Utara.
          </p>
          <p class="text-gray-500 text-xs mt-1">Medan, 18 Mei 2006</p>
        </div>

        <div class="mt-3">
          <span class="inline-block text-xs font-semibold text-green-700 bg-green-100 px-3 py-1 rounded-full shadow-sm">
            Edukasi Lingkungan
          </span>
        </div>
      </div>
    </div>
    
    <div class="h-40 w-80 p-4 bg-gray-100 rounded-xl shadow-md flex space-x-4 hover:scale-105 transition-transform duration-300 ease-in-out">
      
      <div class="h-24 w-28 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('build/images/awn.jpg') }}" alt="Kegiatan Daur Ulang" class="h-full w-full object-cover" />
      </div>
      
      <div class="flex flex-col justify-between py-1">
        <div>
          <p class="text-gray-800 font-semibold text-sm leading-tight">
            Kegiatan daur ulang di SD Barunawati IV, Jakarta Utara.
          </p>
          <p class="text-gray-500 text-xs mt-1">Medan, 18 Mei 2006</p>
        </div>

        <div class="mt-3">
          <span class="inline-block text-xs font-semibold text-green-700 bg-green-100 px-3 py-1 rounded-full shadow-sm">
            Edukasi Lingkungan
          </span>
        </div>
      </div>
    </div>
    
    <div class="h-40 w-80 p-4 bg-gray-100 rounded-xl shadow-md flex space-x-4 hover:scale-105 transition-transform duration-300 ease-in-out">
      
      <div class="h-24 w-28 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('build/images/awn.jpg') }}" alt="Kegiatan Daur Ulang" class="h-full w-full object-cover" />
      </div>
      
      <div class="flex flex-col justify-between py-1">
        <div>
          <p class="text-gray-800 font-semibold text-sm leading-tight">
            Kegiatan daur ulang di SD Barunawati IV, Jakarta Utara.
          </p>
          <p class="text-gray-500 text-xs mt-1">Medan, 18 Mei 2006</p>
        </div>

        <div class="mt-3">
          <span class="inline-block text-xs font-semibold text-green-700 bg-green-100 px-3 py-1 rounded-full shadow-sm">
            Edukasi Lingkungan
          </span>
        </div>
      </div>
    </div>
  </div>
</section>

  


    
    <div id="laporan"
    class="bg-[#a8b387] pb-20 md:pb-30 -mb-20 lg:-mb-23">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-full" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L8.6,90.7C17.1,85,34,75,51,101.3C68.6,128,86,192,103,213.3C120,235,137,213,154,197.3C171.4,181,189,171,206,181.3C222.9,192,240,224,257,240C274.3,256,291,256,309,245.3C325.7,235,343,213,360,202.7C377.1,192,394,192,411,165.3C428.6,139,446,85,463,64C480,43,497,53,514,80C531.4,107,549,149,566,176C582.9,203,600,213,617,224C634.3,235,651,245,669,256C685.7,267,703,277,720,245.3C737.1,213,754,139,771,101.3C788.6,64,806,64,823,101.3C840,139,857,213,874,245.3C891.4,277,909,267,926,256C942.9,245,960,235,977,208C994.3,181,1011,139,1029,144C1045.7,149,1063,203,1080,234.7C1097.1,267,1114,277,1131,277.3C1148.6,277,1166,267,1183,272C1200,277,1217,299,1234,288C1251.4,277,1269,235,1286,202.7C1302.9,171,1320,149,1337,160C1354.3,171,1371,213,1389,224C1405.7,235,1423,213,1431,202.7L1440,192L1440,0L1431.4,0C1422.9,0,1406,0,1389,0C1371.4,0,1354,0,1337,0C1320,0,1303,0,1286,0C1268.6,0,1251,0,1234,0C1217.1,0,1200,0,1183,0C1165.7,0,1149,0,1131,0C1114.3,0,1097,0,1080,0C1062.9,0,1046,0,1029,0C1011.4,0,994,0,977,0C960,0,943,0,926,0C908.6,0,891,0,874,0C857.1,0,840,0,823,0C805.7,0,789,0,771,0C754.3,0,737,0,720,0C702.9,0,686,0,669,0C651.4,0,634,0,617,0C600,0,583,0,566,0C548.6,0,531,0,514,0C497.1,0,480,0,463,0C445.7,0,429,0,411,0C394.3,0,377,0,360,0C342.9,0,326,0,309,0C291.4,0,274,0,257,0C240,0,223,0,206,0C188.6,0,171,0,154,0C137.1,0,120,0,103,0C85.7,0,69,0,51,0C34.3,0,17,0,9,0L0,0Z"></path></svg>
        <div class="md:-mt-80 -mt-20 lg:-mt-120">
            <div class="relative z-10">
                <div class="bg-[#5e6f52] shadow-lg h-16 md:h-20 lg:w-[69rem] md:w-[56rem] rounded-2xl mx-auto -mb-20 md:-mb-34 w-85 mt-10 md:mt-50 flex items-center">
                    <h2 class="text-lg md:text-xl text-white font-semibold ml-6 md:ml-10">Binary Event Project</h2>
                </div>
            </div>
            
            <div class="mt-10 md:mt-20 pt-15 md:pt-20  bg-gray-100 rounded-t-xl pb-10 max-w-6xl mx-auto relative overflow-hidden px-2 md:px-5 lg:px-5 md:px-0">
                <div class="overflow-x-auto">
                    <table class="w-full border border-gray-300 rounded-xl overflow-hidden text-xs md:text-sm border-b-1">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="p-2 md:p-3 text-center">Laporan</th>
                                <th class="p-2 md:p-3 text-center">Pelapor</th>
                                <th class="p-2 md:p-3 text-center">Tanggal</th>
                                <th class="p-2 md:p-3 text-center">Status</th>
                                <th class="p-2 md:p-3 text-center">Lokasi</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($report as $lapor)
<tr class="border-b border-gray-300">
    <td class="p-2 md:p-3 text-center">
        <div class="flex items-center justify-center space-x-2">
            @if(auth()->check() && auth()->user()->role == 'admin')
                <form action="{{ route('delete', $lapor->id) }}" method="POST" class="" onsubmit="return confirm('Are you sure you want to delete this product?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="-ml-10">
                        <img 
                            src="{{ asset('build/images/iconrash.png') }}" 
                            alt="Delete" 
                            class="transition ease-in-out duration-200 hover:rotate-3  active:-rotate-3 w-4 h-4 md:w-7 md:h-7 "
                        >
                    </button>
                </form>
            @endif
            <span class="truncate max-w-xs">{{ $lapor->judul }}</span>
        </div>
    </td>

    <td class="p-2 md:p-3 text-center">
        {{ $lapor->user->name ?? 'Tidak diketahui' }}
    </td>

    <td class="p-2 md:p-3 text-center">
        {{ $lapor->created_at->format('d M Y') }}
    </td>

    <td class="p-2 md:p-3 text-center">
        @if(auth()->check() && auth()->user()->role == 'admin')
            <form action="{{ route('edit', $lapor->id) }}" method="POST">
                @csrf
                @method('PUT')
                <select 
                    name="status" 
                    onchange="this.form.submit()" 
                    class="text-xs md:text-sm  px-2 py-1"
                >
                    <option value="{{ $lapor->status }}" disabled selected>
                        {{ $lapor->status }}
                    </option>
                    <option value="Menunggu" {{ $lapor->status == 'Menunggu' ? 'selected' : '' }}>
                        Menunggu
                    </option>
                    <option value="Diterima" {{ $lapor->status == 'Diterima' ? 'selected' : '' }}>
                        Diterima
                    </option>
                    <option value="Diproses" {{ $lapor->status == 'Diproses' ? 'selected' : '' }}>
                        Diproses
                    </option>
                </select>
            </form>
        @else
            <span class="capitalize">{{ $lapor->status }}</span>
        @endif
    </td>

    <td class="p-2 md:p-3 text-center truncate max-w-xs">
        {{ $lapor->location }}
    </td>
</tr>
@endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="bg-[#5e6f52] rounded-b-xl w-full max-w-6xl mx-auto h-16 md:h-20 relative">
            <button id="btnShow" class="absolute left-4 md:left-10 transform mt-3 md:mt-5">
                <div class="relative flex items-center space-x-3 group">
                    <div class="relative w-6 h-6 transform transition-transform duration-300 group-hover:rotate-90">
                        <span class="absolute top-1/2 left-0 w-6 h-1 bg-white rounded transform -translate-y-1/2"></span>
                        <span class="absolute top-1/2 left-0 w-6 h-1 bg-white rounded transform -translate-y-1/2 -rotate-90"></span>
                    </div>
                    <p class="text-lg md:text-xl text-white font-bold">Lapor pak</p>
                </div>
            </button>
        </div>
        
        <div id="formlapor" class="flex hidden opacity-0 transition-opacity duration-500 ease-in-out items-center justify-center bg-[#a8b387]  pt-10 px-2 md:px-0">
            <form action="{{ route('passing') }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-4 md:p-8 w-full max-w-4xl md:max-w-6xl rounded-2xl shadow-xl space-y-4">
            @csrf
            
            <h2 class="text-xl md:text-2xl font-semibold text-gray-700 text-center">Ceritakan Lingkungan Mu</h2>
            
            @if (session('succesReport'))
            <div class="bg-green-100 text-green-700 p-3 rounded-lg text-sm">Berhasil berhasil hore hore</div>
            @elseif (session('error'))
            <div class="bg-red-100 text-red-700 p-3 rounded-lg text-sm">What the hell omagat</div>
            @endif
            
            <div>
                <label for="judul" class="block mb-1 font-medium text-gray-600">Judul Laporan</label>
                <input type="text" name="judul" id="judul"
                class="w-full border border-gray-300 rounded-lg p-2 md:p-3">
            </div>
            
            <div>
                <label for="deskripsi" class="block mb-1 font-medium text-gray-600">Isi Laporan</label>
                <textarea name="deskripsi" id="deskripsi" rows="3"
                class="w-full border border-gray-300 rounded-lg p-2 md:p-3 resize-y"
                placeholder="Isi laporan..."></textarea>
            </div>
            
            <div class="w-full">
                <label for="location" class="block mb-1 font-medium text-gray-600">Lokasi</label>
                <input type="text" name="location" id="location"
                class="w-full border border-gray-300 rounded-lg p-2 md:p-3">
            </div>
            
            <div>
                <label for="images" class="block mb-1 font-medium text-gray-600">Upload Gambar</label>
                <input type="file" name="foto" id="foto" accept="image/*"
                class="w-full border border-gray-300 rounded-lg p-2 md:p-3">
                <img id="preview-image" src="#" alt="Preview"
                class="hidden mt-2 w-full max-h-64 object-cover">
            </div>
            
            @guest
            <button type="button" id="reportClick"
            class="w-full p-2 md:p-3 bg-[#687161] text-white rounded-lg hover:bg-[#7b8374] transition">
            Kirim (Login Diperlukan)
            </button>
            @else
            <button type="submit"
            class="w-full p-2 md:p-3 bg-[#687161] text-white rounded-lg hover:bg-[#7b8374] transition">
            Kirim Laporan
            </button>
            @endguest
            <p class="text-center text-xs md:text-base">Perhatikan Cara Menyampaikan Laporan Yang Baik dan Benar <a href="" class="text-blue-900">lihat Panduan</a></p>
            </form>
        </div>
        
      <div id="reportbtn"
        class="fixed top-1/3 left-1/2 -translate-x-1/2 bg-white p-4 md:p-8 rounded-xl shadow-lg hidden opacity-0 transform-all transition-opacity duration-700 ease-in-out z-50 max-w-xs md:max-w-md w-full">
        <button id="btnReportClose" class="absolute top-4 left-4 hover:scale-105 hover:rotate-180 transform-all duration-700 ease-in-out ">
          <img src="{{ asset('build/images/no1.png') }}" alt="" srcset="" class="h-5">
        </button>
        <img src="{{ asset('build/images/sorry.png') }}" alt="" class="h-10 mx-auto ">
        <p class="text-lg md:text-xl font-semibold text-center text-gray-700">Silakan login terlebih dahulu yaa!</p>
        <a href="{{ route('login') }}"
        class="block mt-4 md:mt-6 px-4 py-2 md:px-6 md:py-3 bg-[#687161] text-white rounded-full text-center hover:bg-[#7b8374] transition">
        Masuk
        </a>
        </div>
    </div>
</div>

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
    
    document.getElementById('btnReportClose')?.addEventListener('click', () => {
        const reportPopup = document.getElementById('reportbtn');
        reportPopup.classList.add('hidden');
        setTimeout(() => {
            reportPopup.classList.add('opacity-0');
            reportPopup.classList.remove('opacity-100');
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
    document.getElementById('golaporan')?.addEventListener('click', () => {
        const formLapor = document.getElementById('laporan');
        setTimeout(() => {
            formLapor.scrollIntoView({ behavior: 'smooth' });
        }, 10   );
    });
</script>
@endsection