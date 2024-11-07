<?php

use Illuminate\Support\Facades\Route;

$pages = [
    '/' => 'dashbord',
    '/about' => 'about',
    '/services' => 'services',
    '/smClass' => 'classes',
    '/trainer' => 'trainer',
    '/gym' => 'gym',
    '/membership' => 'membership',
    '/contact' => 'contact'
];

foreach ($pages as $uri => $view) {
    Route::get($uri, function () use ($view) {
        return view($view);
    });
}

// controler
Route::resource('/classes', 'App\Http\Controllers\smallclassControler');
Route::resource('/member', 'App\Http\Controllers\memberControler');
Route::resource('/pelatih', 'App\Http\Controllers\pelatihControler');
