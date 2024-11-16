<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControler;

// Route::middleware(['auth','IsAdmin'])->group(function () {
    Route::get('/', function () {
        return view('dashbord');
    });

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/services', function () {
        return view('services');
    });

    Route::get('/smClass', function () {
        return view('classes');
    });

    Route::get('/trainer', function () {
        return view('trainer');
    });

    Route::get('/gym', function () {
        return view('gym');
    });

    Route::get('/membership', function () {
        return view('membership');
    });

    // Controller resources yang membutuhkan autentikasi
    Route::resource('/classes', 'App\Http\Controllers\smallclassControler');
    Route::resource('/member', 'App\Http\Controllers\memberControler');
    Route::resource('/pelatih', 'App\Http\Controllers\pelatihControler');
    Route::resource('/smClass', 'App\Http\Controllers\memberclassControler');
    Route::resource('/contact', 'App\Http\Controllers\contactControler');
    Route::resource('/admin', 'App\Http\Controllers\adminControler');
// `});`

//authentication
Route::get('/login', [AuthControler::class, 'showLogin'])->name('login');
Route::post('/login', [AuthControler::class, 'login']);
Route::get('/register', [AuthControler::class, 'showRegister'])->name('register');
Route::post('/register', [AuthControler::class, 'register']);
Route::post('/logout', [AuthControler::class, 'logout'])->name('logout');
