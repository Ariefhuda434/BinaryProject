<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReportController;
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
Route::get('anu', function () {
    return view('anu');
});

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
Route::get('/report', [ReportController::class, 'create'])->name('report.create');

Route::middleware('auth')->group(function() {
    
    Route::post('/report', [ReportController::class, 'passingData'])->name('report.passing');
});