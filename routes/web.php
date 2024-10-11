<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashbord');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/per', function () {
    return view('per');
});
