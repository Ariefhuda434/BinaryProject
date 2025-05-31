<?php

use App\Models\Blog;
use App\Models\User;
use App\Models\Gerakan;
use Illuminate\Support\Facades\Route;
use function Laravel\Prompts\password;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ReportController;

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GerakanController;
use App\Http\Controllers\FeedbackController;

Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/jadiMitra',[MitraController::class,'mitraGanteng'])->name('Mitra.kirim');
});

// Route::get('/',[ReportController::class, 'jumlahlaporan'])->name('beranda');
// Route::get('/',[MitraController::class, 'jumlahmitra'])->name('beranda');
// Route::get('/',[GerakanController::class, 'jumlahgerakan'])->name('beranda');
// Route::get('/',[ReportController::class, 'jumlahuser'])->name('beranda');


    // Route::get('/',[CountController::class,'index'])->name('beranda');
    Route::get('/',[BerandaController::class,'feedback'])->name('beranda');

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

// Route::get('/reset/{token}', function ($token) {
//     $user = User::where('reset_token', $token)->first();

//     if (!$user) {
//         return redirect('/')->with('error', 'Token tidak valid.');
//     }

//     return view('auth.reset-password', ['token' => $token, 'email' => $user->email]);
// });


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

Route::get('/verify',function(){
    return view('emails.emailverify-info');
})->name('verify.info');

Route::post('/reset',function(){
    return view('emails.resetverify-info');
})->name('reset.info');

Route::get('/reset/{token}', [AuthController::class, 'verifyResetPassword'])->name('resetpw.verify');

Route::post('/reset-password-confirm', [AuthController::class, 'confirmResetPassword'])->name('resetpw.confirm');



// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('loginpage');

Route::get('/register', [AuthController::class, 'showRegister'])->name('showregister');
Route::post('/register', [AuthController::class, 'register'])->name('register');


Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');



