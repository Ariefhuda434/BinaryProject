<?php


use App\Models\Blog;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MitraController;

use App\Http\Controllers\ReportController;
use App\Http\Controllers\BerandaController;



Route::get('/cek', [AuthController::class, 'cek'])->middleware('auth');

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// POST / -> proses form mitra
Route::post('/', [MitraController::class, 'mitraGanteng'])->name('jadiMitra');

Route::get('beranda/{id}', [BerandaController::class, 'show']);

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/blogs', function () {
    return view('blogs', [ 
        'blogs' => Blog::all()
    ]);
})->name('blogs');

Route::get('/blogs/{blog:slug}', function(Blog $blog){
 
        if (!$blog) abort(404);

    return view('blog', ['blog' => $blog]);
});


Route::get('/anu', function () {
    return view('anu');
});

Route::get('/faq', function () {
    return view('faq');
});
Route::get('/perpustakaan', function () {
    return view('perpustakaan');
});


Route::get('auth/verivy', function () {
    return view('auth/verivy');
})->name('verivyPage');

Route::post('/send-email', [EmailController::class, 'sendEmail']);

Route::post('/',[MitraController::class,'mitraGanteng'])->name('jadiMitra');

Route::post('/update-password', [AuthController::class, 'ResetPw'])->name('reset.password');

// Login
Route::get('auth/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('auth/login', [AuthController::class, 'login'])->name('loginpage');

// Register
Route::get('auth/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('auth/register', [AuthController::class, 'register'])->name('register');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman beranda hanya untuk yang sudah login
Route::get('/report', [ReportController::class, 'create'])->name('report.create');

Route::middleware('auth')->group(function() {
    
    Route::post('/report', [ReportController::class, 'passingData'])->name('report.passing');
});