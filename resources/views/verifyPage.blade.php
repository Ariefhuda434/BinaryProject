<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi Akun Anda</title>
</head>
<body>
    <h1>Halo, {{  $user['name'] ?? 'name tidak tersedia' }}</h1>
    <p>Berikut adalah informasi akun Anda:</p>
    <ul>
        <li>Email: {{ $user['email'] ?? 'email tidak tersedia' }}</li>
        <li>Telepon: {{ $user['phone'] ?? 'no hp tiak tersedia' }}</li>
        <li>Alamat: {{ $user['kota'] ?? 'kota tidak tersedia' }}, Kec. {{ $user['kecamatan'] ?? 'kecamatan tidak tersedia'}}</li>
    </ul>

    <p>Kode OTP Anda untuk verifikasi akun:</p>
    <h2>{{ $otp ?? 'otp belum ada' }}</h2>

    <p>Masukkan kode ini pada halaman verifikasi untuk mengaktifkan akun Anda.</p>
</body>
</html>
