<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi Email</title>
    @vite('resources/css/app.css')
</head>
<body style="background-image: url('{{ asset('build/images/Blob.svg') }}')" class="min-h-screen bg-cover font-sans text-white">
    
    <a href="{{ route('register') }}">
        <img src="{{ asset('build/images/iconsbackto.png') }}" class="h-10 m-5 absolute top-0" alt="back">
    </a>
    
    <div class="flex flex-col items-center  min-h-screen px-4">
        <div class="flex mx-auto gap-8 py-10 items-center max-w-md w-full">
            
            @foreach ([
                ['step' => 1, 'title' => 'Daftar', 'desc' => 'Buat akun Anda di Binary Waste'],
                ['step' => 2, 'title' => 'Verifikasi email', 'desc' => 'Verifikasi email Anda'],
                ] as $index => $item)

<div class="flex flex-col items-center relative flex-1">
    
    <div class="
    w-14 h-14 rounded-full
    flex items-center justify-center text-xl font-bold select-none
    {{ $item['step'] == 2 ? 'bg-white text-[#5e6f52] shadow-lg' : 'bg-[#5e6f52] text-white' }}
    z-10 ">
    {{ $item['step'] }}
</div>

<h4 class="mt-4 font-semibold text-white">{{ $item['title'] }}</h4>
<p class="text-sm text-gray-300 mt-1 max-w-xs text-center">{{ $item['desc'] }}</p>

</div>

@endforeach
</div>

<div class=" flex justify-center px-4">
    <div class="bg-white text-center rounded-2xl shadow-2xl p-8 max-w-md w-full text-[#5e6f52] animate-fade-in-up">
        
        <div class="w-16 h-16 rounded-full bg-[#5e6f52] text-white flex items-center justify-center mx-auto mb-6 shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        
        <h2 class="text-2xl font-extrabold mb-3">Verifikasi Email Anda</h2>
        
        @if(session('success'))
        <p class="text-sm text-green-600 mb-2 animate-pulse">{{ session('success') }}</p>
        @endif
        
        <p class="text-gray-700 leading-relaxed mb-6">
            Kami telah mengirimkan link verifikasi ke:
            <span class="block font-semibold mt-1">{{ Auth::user()->email }}</span>
            <br>
            Silakan buka email Anda dan klik link verifikasi untuk mengaktifkan akun Anda.
        </p>
        
        <a href="{{ route('login') }}"
        class="inline-block bg-[#5e6f52] text-white px-6 py-2 rounded-md text-sm font-semibold shadow hover:bg-[#4b5b45] transition duration-300">
        Kembali ke Halaman Login
    </a>
</div>
</div>

</div>

</body>
</html>
