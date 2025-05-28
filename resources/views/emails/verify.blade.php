<h2>Halo {{ $user->name }},</h2>
<p>Terima kasih sudah mendaftar. Klik link di bawah untuk verifikasi email:</p>

<a href="{{ url('/verify/' . $user->verification_token) }}">
    Verifikasi Email
</a>
