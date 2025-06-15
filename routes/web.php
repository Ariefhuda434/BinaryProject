<?php

use App\Models\User;
use App\Models\Blogs;
use App\Models\Gerakan;
use App\Models\PivotUser;

use App\Models\Dokumentasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\GerakanController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PivotUserController;
use App\Http\Controllers\DokumentasiController;

// ==========================
// Middleware: Autentikasi
// ==========================
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/jadiMitra', [MitraController::class, 'mitraGanteng'])->name('Mitra.kirim');
    Route::put('/reset',[AuthController::class,'resetPw'])->name('reset.pw');
});

// ==========================
// Beranda (Landing Page)
// ==========================
Route::get('/', [CountController::class, 'index'])->name('beranda');

// ==========================
// Report
// ==========================
Route::get('/report', [ReportController::class, 'create'])->name('report');
Route::post('/report', [ReportController::class, 'passingData'])->name('passing');
Route::put('/report/{id}/edit', [ReportController::class, 'edit'])->name('edit');
Route::delete('/report/{id}/delete', [ReportController::class, 'destroy'])->name('delete');

// ==========================
// Feedback
// ==========================
Route::post('report/feedback', [FeedbackController::class, 'create'])->name('feedback');

// ==========================
// Halaman Statis
// ==========================
Route::get('/tentang', fn () => view('tentang'));
Route::get('/faq', fn () => view('faq'));

// ==========================
// Blogs
// ==========================
Route::get('/blogs', function () {
    return view('blogs', [
        'blogs' => Blogs::all(),
    ]);
})->name('blogs');

Route::get('/blogs/{blog:slug}', function (Blogs $blog) {
    if (!$blog) abort(404);
    return view('blog', ['blog' => $blog]);
})->name('bloguk');

Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

Route::delete('blogs/{id}/destroy',[BlogController::class,'destroy'])->name('blogs.destroy');

Route::put('blogs/{id}/update',[BlogController::class,'update'])->name('blogs.update');

// ==========================
// Gerakan
// ==========================
Route::post('/gerakans', [GerakanController::class, 'store'])->name('gerakans.store');

Route::get('/gerakans', function () {
    return view('gerakans', [
            'gerakans' => Gerakan::all()
    ]);
})->name('gerakans');

Route::get('/gerakans/{gerakan:slug}', [GerakanController::class, 'show'])->name('gerakan.show');

Route::delete('/gerakans/{gerakan:slug}/user', [GerakanController::class, 'destroyuser'])->name('user.delete');

Route::delete('/gerakans/{gerakan:slug}/mitra', [GerakanController::class, 'destroymitra'])->name('mitra.delete');

Route::delete('gerakans/{id}/destroy',[GerakanController::class,'destroy'])->name('gerakan.destroy');

Route::put('gerakans/{id}/update',[GerakanController::class,'update'])->name('gerakan.update');

Route::put('gerakans/{id}/updatestatus',[GerakanController::class,'updateStatus'])->name('edit_status_gerakan');

Route::post('/gerakans/{gerakan:slug}/pivot/user', [GerakanController::class, 'pivotUser'])->name('pivot.user');

Route::post('/gerakans/{gerakan:slug}/pivot/mitra', [GerakanController::class, 'pivotMitra'])->name('pivot.mitra');

Route::post('/gerakan/{gerakan:slug}/galeri', [DokumentasiController::class, 'uploadGaleri'])->name('upload.galeri');


// ==========================
// Verifikasi Email & Reset
// ==========================
Route::get('/verify/{token}', function ($token) {
    $user = User::where('verification_token', $token)->first();

    if (!$user) {
        return view('auth.register');
    }

    $user->email_verifikasi = now();
    $user->verification_token = null;
    $user->save();

    session()->flash('verified', 'Email kamu berhasil diverifikasi!');
    session()->flash('verified_email', $user->email);

    return view('emails.emailverify-info');
})->name('verifyPage');

Route::get('/verify', fn () => view('emails.emailverify-info'))->name('verify.info');
Route::post('/reset', fn () => view('emails.resetverify-info'))->name('reset.info');

Route::get('/reset/{token}', [AuthController::class, 'verifyResetPassword'])->name('resetpw.verify');
Route::post('/reset-password-confirm', [AuthController::class, 'confirmResetPassword'])->name('resetpw.confirm');

// ==========================
// Autentikasi (Login/Register)
// ==========================
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('loginpage');

Route::get('/register', [AuthController::class, 'showRegister'])->name('showregister');
Route::post('/register', [AuthController::class, 'register'])->name('register');


Route::get('/history', [GerakanController::class, 'history'])->name('gerakan.history');
