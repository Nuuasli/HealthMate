<?php

use Illuminate\Support\Facades\Route;

route::get('/', function(){
    return view('dashbord');
});

route::get('/about', function(){
    return view('about');
});

route::get('/services', function(){
    return view('services');
});

route::get('/smClass', function(){
    return view('classes');
});

route::get('/trainer', function(){
    return view('trainer');
});

route::get('/gym', function(){
    return view('gym');
});

route::get('/membership', function(){
    return view('membership');
});

route::get('/contact', function(){
    return view('contact');
});

// controler
Route::resource('/classes', 'App\Http\Controllers\smallclassControler');
Route::resource('/member', 'App\Http\Controllers\memberControler');
Route::resource('/pelatih', 'App\Http\Controllers\pelatihControler');
Route::resource('/smClass', 'App\Http\Controllers\memberclassControler');
