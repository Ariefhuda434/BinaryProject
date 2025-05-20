<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BlogController;
use App\Http\Middleware\RoleMiddleware;

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('beranda');
    })->name('beranda');

    Route::get('/admin', function () {
        return view('beranda');
    })->middleware([RoleMiddleware::class . ':admin'])->middleware(['auth', RoleMiddleware::class . ':admin']);;

    Route::get('/user', function () {
        return "User dashboard";
    })->middleware([RoleMiddleware::class . ':user']);

    Route::get('/mitra', function () {
        return "Mitra dashboard";
    })->middleware([RoleMiddleware::class . ':mitra']);

    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

    Route::get('/report', [ReportController::class, 'create'])->name('report.create');
    Route::post('/report', [ReportController::class, 'passingData'])->name('report.passing');

// Halaman public
Route::post('/', [MitraController::class, 'mitraGanteng'])->name('jadiMitra');

   Route::get('/', function () {
        return view('beranda');
    })->name('beranda');


Route::get('/beranda/{id}', [BerandaController::class, 'show']);

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/blogs', function () {
    return view('blogs', [
        'blogs' => Blog::all(),
    ]);
})->name('blogs');

Route::get('/blogs/{blog:slug}', function (Blog $blog) {
    if (!$blog) abort(404);
    return view('blog', ['blog' => $blog]);
});


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/gerakan', function () {
    return view('gerakan');
});

Route::get('auth/verivy', function () {
    return view('auth.verivy');
})->name('verivyPage');

Route::post('/send-email', [EmailController::class, 'sendEmail']);

Route::post('/update-password', [AuthController::class, 'ResetPw'])->name('reset.password');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('loginpage');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');


Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');