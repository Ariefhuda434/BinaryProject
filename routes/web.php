<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\ReportController;
use App\Models\Beranda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('beranda/{id}', [BerandaController::class, 'show']);

Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/anu', function () {
    return view('anu');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('auth/verivy', function () {
    return view('auth/verivy');
})->name('verivyPage');




Route::post('/reset-password', [AuthController::class, 'ResetPw'])->name('reset.password');

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