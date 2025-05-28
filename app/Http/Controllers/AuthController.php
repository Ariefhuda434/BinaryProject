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
    public function resetPasswordRequest(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!Hash::check($request->old_password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Password lama salah.'
            ]);
        }

        $token = Str::random(60);
        $user->reset_token = $token;
        $user->temp_password = Hash::make($request->new_password);
        $user->save();

        Mail::to($user->email)->send(new ResetEmail($user, $token));

        return response()->json([
            'success' => true,
            'message' => 'Email verifikasi telah dikirim. Silakan cek email Anda.'
        ]);
    }

    public function verifyResetPassword($token)
    {
        $user = User::where('reset_token', $token)->first();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Token tidak valid atau sudah kadaluarsa.');
        }

        $user->password = $user->temp_password;
        $user->temp_password = null;
        $user->reset_token = null;
        $user->save();

        return redirect()->route('login')->with('success', 'Password berhasil direset. Silakan login dengan password baru Anda.');
    }

}
 