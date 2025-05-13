<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary Mail</title>
</head>
<body>
    <h1>Hello, {{ $user->name }}</h1>
    <p>Berikut adalah informasi akun Anda:</p>
    <ul>
        <li>Email: {{ $user->email }}</li>
        <li>Telepon: {{ $user->phone }}</li>
        <li>Alamat: {{ $user->kota }}, Kec. {{ $user->kecamatan }}</li>
    </ul>
</body>
</html>
