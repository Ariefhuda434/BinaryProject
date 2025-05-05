<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
        <!-- ... -->
</head>

<body style="background-image: url('{{ asset('build/images/Blob.svg') }}')" class="h-screen bg-cover font-sans">
    <div class="h-screen flex items-center justify-center">
        <a href="/" class="absolute top-5 left-5">
            <img src="{{ asset('build/images/iconsbackto.png') }}" class="h-10" alt="back">
        </a>

        <div class="flex w-[900px] h-[500px] rounded-lg shadow-2xl bg-white overflow-hidden">
            <!-- Kiri: Form Login -->
            <div class="w-1/2 p-10 flex flex-col justify-center">
                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-2 rounded mb-3">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 text-red-700 p-2 rounded mb-3">
                        {{ session('error') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2 class="text-3xl font-bold mb-6 text-center">Masuk</h2>
                    <input type="email" name="email" placeholder="Email"
                    required
                    class="w-full p-3 mb-4 border-white rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52] transition-all duration-300 ease-in-out">
             
                    <input type="password" name="password" placeholder="Password"
                        required class="w-full p-3 mb-4  border-white rounded text-sm bg-gray-100 focus:outline-none focus:border-l-10 focus:border-[#5e6f52]
                    transition-all duration-300 ease-in-out ">

                    <label class="flex items-center text-sm mb-5">
                        <input type="checkbox" name="remember" class="mr-2">
                        Remember Me?
                    </label>

                    <button type="submit" class="w-full p-3 bg-[#5e6f52] text-white rounded hover:bg-[#4e5d44] transition">
                        Masuk
                    </button>

                    <p class="mt-6 text-sm text-center">
                        Belum punya akun? 
                        <a href="{{ route('register') }}" class="text-[#234666] font-medium hover:underline">Daftar</a>
                    </p>
                </form>
            </div>

            <div class="w-1/2 bg-gray-100 flex flex-col justify-center p-6 space-y-6">
                
                <div class="space-y-2 justify-content-evenly ml-8">

                    @auth
                    <p class="font-extrabold text-5xl text-gray-900">Hello {{ Auth::user()->name }}</p>
                        @else
                    <p class="font-extrabold text-5xl text-gray-900 animate-pulse">Hello...</p>
                        @endauth
                   
                    <p class="font-semibold text-2xl text-gray-800">Selamat Datang</p>
                </div>
            
                <p class="text-lg text-gray-700 font-medium text-center px-4">
                    "Langkah kecil hari ini bisa jadi perubahan besar besok. Yuk, login dan mulai sekarang!"
                </p>
                <div class="flex items-center space-y-2 justify-center">
                    <img class="h-7 mt-2 mr-2" src="{{ asset('build/images/logo.png') }}" alt="Logo">
                    <h1 class="text-xl font-bold text-gray-800">BINARY WASTE</h1>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
