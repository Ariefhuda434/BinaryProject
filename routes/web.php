<?php

use App\Models\Blog;
use App\Models\Gerakan;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GerakanController;
use App\Models\Feedback;

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('beranda');
    })->name('beranda');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

    Route::get('/report', [ReportController::class, 'create'])->name('report');
    Route::post('/report', [ReportController::class, 'passingData'])->name('passing');

    Route::put('/report/{id}/edit',[ReportController::class, 'edit'])->name('edit');

    Route::post('report/feedback',[FeedbackController::class, 'create'])->name('edit');


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

Route::post('/gerakans', [GerakanController::class, 'store'])->name('gerakans.store');


Route::get('/gerakans', function () {
    return view('gerakans', [
        'gerakans' => \App\Models\Gerakan::all()
    ]);
})->name('gerakans');


Route::get('gerakans/{gerakan:slug}', function (Gerakan $gerakan) {
    if(!$gerakan) abort(404);
    return view('gerakan',['gerakan' => $gerakan]);
});

Route::post('/update-password', [AuthController::class, 'ResetPw'])->name('reset.password');


// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('loginpage');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');


Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

Route::get('/verifikasi', [AuthController::class, 'showOtpPage'])->name('verifyPage');
Route::post('/verifikasi', [AuthController::class, 'verifyOtp'])->name('verifyOtp');


