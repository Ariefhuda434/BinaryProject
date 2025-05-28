<h2>Halo {{ $user->name }},</h2>
<p>Klik link di bawah untuk reset password anda:</p>

<a href="{{ url('/verify/' . $user->verification_token) }}">
    Reset Password
</a>
