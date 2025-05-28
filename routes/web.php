<?php

use App\Models\Blog;
use App\Models\Report;
use App\Models\Gerakan;
use App\Models\Feedback;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use PHPUnit\Framework\Constraint\Count;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GerakanController;
use App\Http\Controllers\FeedbackController;
use Pest\Mutate\Mutators\Math\RoundToCeil;

Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/jadiMitra',[MitraController::class,'mitraGanteng'])->name('Mitra.kirim');
});

// Route::get('/',[ReportController::class, 'jumlahlaporan'])->name('beranda');
// Route::get('/',[MitraController::class, 'jumlahmitra'])->name('beranda');
// Route::get('/',[GerakanController::class, 'jumlahgerakan'])->name('beranda');
// Route::get('/',[ReportController::class, 'jumlahuser'])->name('beranda');


    Route::get('/',[CountController::class,'index'])->name('count');

    Route::get('/report', [ReportController::class, 'create'])->name('report');
    Route::post('/report', [ReportController::class, 'passingData'])->name('passing');

    Route::put('/report/{id}/edit',[ReportController::class, 'edit'])->name('edit');

    Route::post('report/feedback',[FeedbackController::class, 'create'])->name('feedback');

    Route::delete('/report/{id}/delete',[ReportController::class,'destroy'])->name('delete');


// Route::get('/',function(){
//     return view('beranda');
// });

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

Route::get('/perpustakaan', function () {
    return view('perpustakaan');
});

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


