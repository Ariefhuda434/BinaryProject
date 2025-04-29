<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-white font-sans">
    <div class="flex justify-center items-center h-full">
        <div class="w-[400px] p-8 rounded-lg shadow-md bg-[#a8b387]">
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

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h2 class="text-2xl font-semibold mb-4">Register</h2>
                <input type="text" name="name" placeholder="Nama Lengkap" required class="w-full p-3 mb-4 border rounded text-sm bg-gray-100">
                <input type="text" name="username" placeholder="Username" required class="w-full p-3 mb-4 border rounded text-sm bg-gray-100">
                <input type="email" name="email" placeholder="Email" required class="w-full p-3 mb-4 border rounded text-sm bg-gray-100">
                <input type="password" name="password" placeholder="Password" required class="w-full p-3 mb-4 border rounded text-sm bg-gray-100">
                <button type="submit" class="w-full p-3 bg-[#5e6f52] text-white rounded">Daftar</button>
                <p class="mt-4 text-sm">Sudah punya akun? <a href="{{ route('login') }}" class="text-[#234666]">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>