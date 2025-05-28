<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi OTP</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">
    <form action="{{ route('verifyOtp') }}" method="POST" class="bg-white p-6 rounded shadow w-full max-w-sm">
        @csrf
        <h2 class="text-xl font-bold mb-4">Verifikasi OTP</h2>

        @if(session('error'))
            <div class="text-red-500 mb-3">{{ session('error') }}</div>
        @endif

        <div class="mb-4">
            <label>Email</label>
            <input type="email" name="email" value="{{ session('email') }}" readonly class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label>Kode OTP</label>
            <input type="text" name="otp" class="w-full border rounded px-3 py-2">
        </div>

        <button type="submit" class="w-full bg-green-600 text-white py-2 rounded">Verifikasi</button>
    </form>
</body>
</html>
