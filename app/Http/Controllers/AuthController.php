<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Mail\BinaryMail;
use Illuminate\Support\Facades\Mail;
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


    $user = User::create([
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

    Mail::to($user->email)->send(new BinaryMail());

    return redirect()->route('verifyPage')->with([
        'success' => 'Registrasi berhasil! Email Verivikasi telah dikirim ke email Anda.',
    ]);
}


    public function showVerifikasi(Request $request)
    {
        $email = session('email');
        return view('verifyPage', compact('email'));
    }

     public function jumlahuser(){
        $user = User::get();
        $jumlahuser = User::count();
        
        return view('beranda', [
            'jumlahuser' => $jumlahuser
        ]);
        

}

}
 