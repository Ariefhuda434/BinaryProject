<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi Email Anda</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen py-12 px-4">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Halo {{ $user->name }} 👋</h2>
                <p class="text-gray-600 mt-2">Terima kasih telah bergabung di <strong>{{ config('app.name') }}</strong></p>
            </div>

            <p class="text-gray-700 mb-6 text-center">
                Klik tombol di bawah untuk memverifikasi email Anda dan mengaktifkan akun.
            </p>

            <div class="text-center">
                <a href="{{ url('/verify/' . $user->verification_token) }}"
                   class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-full transition duration-300">
                    Verifikasi Email
                </a>
            </div>

            <p class="text-sm text-gray-500 mt-8 text-center">
                Jika Anda tidak merasa mendaftar, abaikan email ini.
            </p>

            <p class="text-xs text-gray-400 mt-4 text-center">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
