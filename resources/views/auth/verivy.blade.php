<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Akun</title>
    @vite('resources/css/app.css')
</head>
<body style="background-image: url('{{ asset('build/images/Blob.svg') }}')" class="min-h-screen bg-cover bg-no-repeat font-sans">
    <a href="/">
        <img src="{{ asset('build/images/iconsbackto.png') }}" class="h-10 m-5" alt="Kembali">
    </a>

    <div class="flex justify-center items-center min-h-screen -mt-20">
        <div class="w-full max-w-xl p-8 rounded-2xl shadow-xl bg-white">
            <h1 class="text-3xl font-semibold text-center text-gray-800">Konfirmasi Akun Anda</h1>
            <p class="text-center text-gray-600 mt-4">
                Akun Anda hampir selesai!<br>
                Kami telah mengirimkan kode OTP ke email 
                {{-- <strong>{{ Auth::user()->email }}</strong> --}}
                .<br>
                Silakan periksa inbox Anda dan masukkan kode OTP yang kami kirimkan.
            </p>

            <div class="flex justify-center space-x-3 mt-6">
                @for ($i = 0; $i < 6; $i++)
                    <input type="text" maxlength="1" class="w-12 h-12 text-center text-xl bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                @endfor
            </div>

            <div class="flex justify-center mt-8">
                <button class="w-1/2 p-3 bg-[#5e6f52] hover:bg-blue-700 transition text-white font-semibold rounded-lg shadow">
                    Submit
                </button>
            </div>

            <div class="flex justify-center mt-4">
                <p class="text-gray-600">
                    Tidak menerima kode?
                    <a href="#" class="text-blue-600 hover:underline font-medium">Kirim ulang</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
