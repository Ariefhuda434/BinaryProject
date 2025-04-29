<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Halaman yang bisa diakses tanpa login
Route::get('/', function () {
    return view('beranda');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/blog', function () {
    return view('blog');
});
// Route::get('/event', function () {
//     return view('event');
// });
Route::get('/faq', function () {
    return view('faq');
});

// Login
Route::get('auth/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('auth/login', [AuthController::class, 'login'])->name('login');

// Register
Route::get('auth/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('auth/register', [AuthController::class, 'register'])->name('register');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman beranda hanya untuk yang sudah login
Route::middleware('auth')->get('/event', function () {
    return view('event');
})->name('event');