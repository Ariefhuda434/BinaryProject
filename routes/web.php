<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/login', function () {
    return view('login');
});