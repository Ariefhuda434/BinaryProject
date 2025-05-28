<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\ResetEmail;
use App\Mail\VerifyEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->filled('remember');

        if (Auth::attempt($request->only('email', 'password'), $remember)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'admin') {
                return redirect('/admin');
            } elseif (Auth::user()->role == 'mitra') {
                return redirect('/mitra');
            } else {
                return redirect('login');  
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('loginpage');
    }


    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|max:30',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
        'birth' => 'required',
        'jenis_kel'=>'required',
        'profesi' => 'required',
        'phone' => 'required|unique:users',
        'kota'=> 'required',
        'kecamatan' => 'required',
    ]);


    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'birth' => $request->birth,
        'jenis_kel'=>$request->jenis_kel,
        'profesi' => $request->profesi,
        'phone' => $request->phone,
        'kota'=> $request->kota,
        'kecamatan' => $request->kecamatan,
        'verification_token' => Str::random(60),
    ]);

    Mail::to($user->email)->send(new VerifyEmail($user));

    return redirect()->route('verify.info')->with('success', 'Registrasi berhasil! Link verifikasi telah dikirim ke email Anda.');
}

    

    public function sendReset(Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
        'token' => 'required',
    ]);

    $user = User::where('email', $request->email)
                ->where('reset_token', $request->token)
                ->first();

    if (!$user) {
        return back()->with('error', 'Token tidak valid, atau email salah.');
    }

    $user->update([
        'password' => Hash::make($request->password),
        'reset_token' => null, 
    ]);
    return redirect()-> route('beranda')->withFragment('resetpw');

}
    

    public function sendResetLink(Request $request) {
    $request->validate([
        'email' => 'required|email',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->with('error', 'Email tidak ditemukan.');
    }

    $token = Str::random(64); 

    $user->update([
        'reset_token' => $token,
    ]);

    Mail::to($user->email)->send(new ResetEmail($user)); 
    
    return back()->with('success', 'Link reset password telah dikirim ke email Anda.');

}

}
 