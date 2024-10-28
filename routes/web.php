<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contact', function () {
    return view('contact');
});

