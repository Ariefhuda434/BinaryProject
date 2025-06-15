<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gerakan;
use App\Mail\ResetEmail;
use App\Mail\VerifyEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    /*****************************************
     *              LOGIN PAGE
     *****************************************/

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
            return redirect('login'); 
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

    /*****************************************
     *             REGISTER PAGE
     *****************************************/

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'          => 'required|max:30',
            'email'         => 'required|email|unique:users',
            'password'      => 'required|min:6|confirmed',
            'tanggal_lahir' => 'required',
            'jenis_kel'     => 'required',
            'phone'         => 'required|unique:users',
            'alamat'        => 'required'
        ]);

        $user = User::create([
            'name'               => $request->name,
            'email'              => $request->email,
            'password'           => Hash::make($request->password),
            'tanggal_lahir'      => $request->tanggal_lahir,
            'jenis_kel'          => $request->jenis_kel,
            'phone'              => $request->phone,
            'alamat'             => $request->alamat,
            'verification_token' => Str::random(60),
        ]);

        Mail::to($user->email)->send(new VerifyEmail($user));

        return redirect()->route('verify.info')->with('success', 'Registrasi berhasil! Link verifikasi telah dikirim ke email Anda.');
    }

    /*****************************************
     *            RESET PASSWORD
     *****************************************/

    public function resetPw(Request $request)
    {
        $validated = $request->validate([
            'email'        => 'required|email|exists:users,email',
            'password'     => 'required|min:6',       
            'new_password' => 'required|min:6',       
        ]);

        $user = User::where('email', $request->email)->first();

        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Password lama salah.');
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('login')->with('success', 'Password berhasil diperbarui!');
    }

}
