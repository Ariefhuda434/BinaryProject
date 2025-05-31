<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body style="background-image: url('{{ asset('build/images/Blob.svg') }}')" class="min-h-screen bg-cover font-sans">
    <a href="{{ route('beranda') }}">
        <img src="{{ asset('build/images/iconsbackto.png') }}" class="h-10 m-5 absolute top-0" alt="back">
    </a>
      <div class="flex mx-auto gap-8 py-10 items-center max-w-md w-full">
            
            @foreach ([
                ['step' => 1, 'title' => 'Daftar', 'desc' => 'Buat akun Anda di Binary Waste'],
                ['step' => 2, 'title' => 'Verifikasi email', 'desc' => 'Verifikasi email Anda'],
                ] as $index => $item)

<div class="flex flex-col items-center relative flex-1">
    
    <div class="
    w-14 h-14 rounded-full
    flex items-center justify-center text-xl font-bold select-none
    {{ $item['step'] == 1 ? 'bg-white text-[#5e6f52] shadow-lg' : 'bg-[#5e6f52] text-white' }}
    z-10 ">
    {{ $item['step'] }}
</div>

<h4 class="mt-4 font-semibold text-white">{{ $item['title'] }}</h4>
<p class="text-sm text-gray-300 mt-1 max-w-xs text-center">{{ $item['desc'] }}</p>

</div>

@endforeach
</div>

    <div class="flex justify-center items-center px-4 mb-30">
        <div class="w-full max-w-screen-md bg-white p-6 md:p-10 rounded-lg shadow-md">
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-2 rounded mb-3">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 text-red-700 p-2 rounded mb-3">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf
                <h2 class="text-2xl font-semibold text-center">Registrasi Akun</h2>

                <input type="text" name="name" placeholder="Nama Lengkap" required class="w-full p-3 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 border-[#5e6f52] transition-all duration-300 ease-in-out">

                <div class="flex flex-col md:flex-row gap-6">
                    <input type="email" name="email" placeholder="Email" required class="w-full p-3 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 border-[#5e6f52] transition-all duration-300 ease-in-out">
                </div>

                <div class="flex flex-col md:flex-row gap-6">
                    <input type="password" name="password" placeholder="Password" required class="w-full p-3 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 border-[#5e6f52] transition-all duration-300 ease-in-out">
                    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required class="w-full p-3 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 border-[#5e6f52] transition-all duration-300 ease-in-out">
                </div>

                <div class="border-b"></div>

                <div class="flex flex-col md:flex-row gap-6">
                    <input type="date" name="birth" required class="w-full p-3 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 border-[#5e6f52] transition-all duration-300 ease-in-out">
                    <select name="jenis_kel" required class="w-full p-3 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 border-[#5e6f52] transition-all duration-300 ease-in-out">
                        <option value="">Jenis Kelamin</option>
                        <option value="pria">Pria</option>
                        <option value="perempuan">Perempuan</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="flex flex-col md:flex-row gap-6">
                    <select name="profesi" required class="w-full p-3 rounded text-sm bg-gray-100  focus:outline-none focus:border-l-10 border-[#5e6f52] transition-all duration-300 ease-in-out">
                        <option value="">Pilih Profesi</option>
                        <option value="dokter">Dokter</option>
                        <option value="guru">Guru</option>
                        <option value="pengacara">Pengacara</option>
                        <option value="petani">Petani</option>
                        <option value="programmer">Programmer</option>
                        <option value="desainer">Desainer</option>
                        <option value="karyawan_swasta">Karyawan Swasta</option>
                        <option value="wirausaha">Wirausaha</option>
                        <option value="polisi">Polisi</option>
                        <option value="tentara">Tentara</option>
                        <option value="pelajar">Pelajar</option>
                        <option value="mahasiswa">Mahasiswa</option>
                    </select>

                    <input type="tel" name="phone" placeholder="Nomor Telepon" required class="w-full p-3 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 border-[#5e6f52] transition-all duration-300 ease-in-out">
                </div>

                <div class="flex flex-col md:flex-row gap-6">
                    <select name="kota" required class="w-full p-3 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 border-[#5e6f52] transition-all duration-300 ease-in-out">
                        <option value="">Pilih Kota</option>
                        <option value="medan">Medan</option>
                        <option value="bandung">Bandung</option>
                        <option value="jakarta">Jakarta</option>
                    </select>

                    <select name="kecamatan" required class="w-full p-3 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 border-[#5e6f52] transition-all duration-300 ease-in-out">
                        <option value="">Pilih Kecamatan</option>
                        <option value="medan_helvetia">Medan Helvetia</option>
                        <option value="medan_sunggal">Medan Sunggal</option>
                        <option value="medan_johor">Medan Johor</option>
                    </select>
                </div>

                <button type="submit" class="w-full bg-[#5e6f52] hover:bg-[#4c5942] text-white p-3 rounded transition">
                    Daftar
                </button>
                <p class="text-center text-sm mt-4">
                    Sudah punya akun? <a href="{{ route('login') }}" class="text-[#234666] hover:underline font-medium">Login</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
