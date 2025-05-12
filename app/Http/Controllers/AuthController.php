<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
            'remember' => 'required',
        ]);
    
        if (Auth::attempt($request->only('email', 'password'),$request-> filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->route('login');
        }
    
        return back()->with('error', 'Email atau password salah');
    }

public function ResetPw(Request $request)
{
    $request->validate([
        'password_lama' => 'required',
        'password_baru' => 'required|min:8|confirmed',
    ]);

    $user = Auth::user();
    if (!Hash::check($request->password_lama, $user->password)) {
        return back()->with('error', 'Password lama salah.');
    }
    $user->password = Hash::make($request->password_baru);
    $user->save();

    return back()->with('status', 'Password berhasil direset!');
}



    // Tampilkan halaman register
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'birth' => 'required',
            'jenis_kel'=>'required',
            'profesi' => 'required',
            'phone' => 'required|unique:users',
            'kota'=> 'required',
            'kecamatan' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birth' => $request->birth,
            'jenis_kel'=>$request->jenis_kel,
            'profesi' => $request->profesi,
            'phone' => $request->phone,
            'kota'=> $request->kota,
            'kecamatan' => $request->kecamatan,
        ]);

        return redirect()->route('register')->with('success', 'Registrasi berhasil! Silakan login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('loginpage');
    }
}