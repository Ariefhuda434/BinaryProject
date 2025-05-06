<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body style="background-image: url('{{ asset('build/images/Blob.svg') }}')" class="h-full bg-cover  font-sans">
    <a href="/">
        <img src="{{ asset('build/images/iconsbackto.png') }}" class="h-10 m-5" alt="back">
    </a>
    <div class="flex justify-center -mt-20 items-center h-full">
        <div class="w-[900px] h-screen mt-30 mb-30 p-8 rounded-lg shadow-md bg-white">
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

            <form method="POST" action="{{ route('register') }}" class="px-20">
                @csrf
                <h2 class="text-2xl font-semibold mb-5 mt-5 text-center ">Registrasi Akun</h2>

                <input type="text" name="name" placeholder="Nama Lengkap" required class="w-1/1 p-3 mb-8 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">

                <div class="flex  mb-8 gap-7">
                    <input type="text" name="username" placeholder="Username" required class="w-1/2 p-3  rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
                    <input type="email" name="email" placeholder="Email" required class="w-1/2 p-3  rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
                </div>

                <div class="flex mb-8 gap-7">
                    <input type="password" name="password" placeholder="Password" required class="w-1/2 p-3 mb-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
                    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required class="w-1/2 p-3 mb-4 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
                </div>

                <div class="border-b mb-8"></div>

                <div class="flex gap-7 mb-7">
                    <input type="date" name="date_of_birth" required class="w-1/2 p-3 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
                    <select name="gender" required class="w-1/2 p-3   rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
                        <option value="">Jenis Kelamin</option>
                        <option value="pria">Pria</option>
                        <option value="perempuan">Perempuan</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>

                
                <div class="flex gap-7">
                    <select name="profesi" required class="w-1/2 p-3 rounded text-sm bg-gray-100 mb-7 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
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
                    
                    <input type="tel" name="telepon" placeholder="Nomor Telepon" required class="w-1/2 p-3 mb-7 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
                </div>
                
                <div class="flex gap-7 mb-7">
                    <select name="provinsi" required class="w-1/2 p-3 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
                        <option value="">Pilih Provinsi</option>
                        <option value="jawa_barat">Jawa Barat</option>
                        <option value="jawa_tengah">Jawa Tengah</option>
                        <option value="jakarta">DKI Jakarta</option>
                    </select>

                    <select name="kota" required class="w-1/2 p-3 rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
                        <option value="">Pilih Kota</option>
                        <option value="bandung">Bandung</option>
                        <option value="semarang">Semarang</option>
                        <option value="jakarta">Jakarta</option>
                    </select>
                </div>
                <button type="submit" class="w-full mt-3 p-3 bg-[#5e6f52] text-white rounded">Daftar</button>
                <p class="mt-4 text-sm text-center">Sudah punya akun? <a href="{{ route('login') }}" class="text-[#234666]">Login</a></p>
            </form>
        </div>
    </div>    
</body>
</html>
