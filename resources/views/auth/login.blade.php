<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  @vite('resources/css/app.css')
</head>

<body style="background-image: url('{{ asset('build/images/Blob.svg') }}')" 
      class="h-screen bg-cover font-sans">

  <div class="min-h-screen flex items-center justify-center px-4 relative">
    <a href="{{ route('beranda') }}" class="absolute top-5 left-5">
      <img src="{{ asset('build/images/iconsbackto.png') }}" class="h-10" alt="back" />
    </a>

    <div class="w-full max-w-5xl lg:h-120 flex flex-col lg:flex-row shadow-2xl bg-white backdrop-blur-md rounded-lg overflow-hidden transition-all duration-500">
      
      <div class="lg:w-1/2 w-full p-6 sm:p-10 flex flex-col justify-center">
        @if(session('success'))
          <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-sm">
            {{ session('success') }}
          </div>
        @endif

        @if($errors->any())
          <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
            <ul>
              @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form method="POST" action="{{ route('loginpage') }}">
          @csrf
          <h2 class="text-2xl md:text-3xl font-bold mb-6 text-center text-[#5e6f52]">Masuk</h2>

          <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
            class="w-full p-3 mb-4 rounded bg-gray-100 text-sm focus:outline-none focus:border-l-10 border-[#5e6f52] transition-all duration-300 ease-in-" />

          <input type="password" name="password" placeholder="Password"
            class="w-full p-3 mb-4 rounded bg-gray-100 text-sm focus:outline-none focus:border-l-10 border-[#5e6f52] transition-all duration-300 ease-in-out" />

          <label class="flex items-center text-sm mb-4">
            <input type="checkbox" name="remember" class="mr-2" />
            Remember Me?
          </label>

          <button type="submit" class="w-full p-3 rounded bg-[#5e6f52] text-white hover:bg-[#4e5d44] transition font-semibold">
            Masuk
          </button>

          <p class="mt-5 text-sm text-center">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-[#234666] font-medium hover:underline">Daftar</a>
          </p>
        </form>
      </div>

      <div class="lg:w-1/2 w-full bg-gray-100 flex flex-col justify-center items-center p-6 space-y-6">
        <div class="text-center space-y-2">
          @auth
            <p class="font-extrabold text-3xl md:text-5xl text-gray-900">Hello, {{ explode(' ', Auth::user()->name)[0] }}</p>
          @else
            <p class="font-extrabold text-3xl md:text-5xl text-gray-900 animate-pulse">Hello...</p>
          @endauth

          <p class="font-semibold text-xl md:text-2xl text-gray-800">Selamat Datang</p>
        </div>

        <p class="text-center text-gray-700 font-medium text-sm md:text-lg px-4 italic">
          "Langkah kecil hari ini bisa jadi perubahan besar besok. Yuk, login dan mulai sekarang!"
        </p>

        <div class="flex items-center space-x-2">
          <img class="h-7" src="{{ asset('build/images/logo.png') }}" alt="Logo" />
          <h1 class="text-lg md:text-xl font-bold text-gray-800">BINARY WASTE</h1>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
