<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body style="background-image: url('{{ asset('build/images/bglogin.jpg') }}')" class="h-screen bg-cover font-sans">
    <div class="h-screen bg-gradient-to-r from-[#5e6f52] to-transpar">

        <a href="/">
      <img src="{{ asset('build/images/iconsbackto.png') }}" class="h-10 m-5" alt="back">
        </a>
        <div class="flex justify-center items-center -mt-20 h-full">
            <div class="w-[400px] p-7 rounded-lg shadow-md bg-white">
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
                    <legend>Login</legend>
                    <h2 class="text-2xl font-semibold mb-4">Login</h2>
                    <input type="email" name="email" placeholder="Email" required class="w-full p-3 mb-4 border rounded text-sm bg-gray-100">
                    <input type="password" name="password" placeholder="Password" required class="w-full p-3 mb-4 border rounded text-sm bg-gray-100">
                    <label for=""><input type="checkbox" value="remember"> remember me?</label>
                    <button type="submit" class="w-full p-3 bg-[#5e6f52] text-white rounded">Login</button>

                    <p class="mt-4 text-sm">Belum punya akun? <a href="{{ route('register') }}" class="text-[#234666]">Daftar</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>