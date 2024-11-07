<?php

use Illuminate\Support\Facades\Route;


Route::resource('/', 'App\Http\Controllers\HealthMateControler');
Route::resource('/about', 'App\Http\Controllers\AboutControler');
Route::resource('/services', 'App\Http\Controllers\ServiceControler');
Route::resource('/smClass', 'App\Http\Controllers\ClassesControler');
Route::resource('/trainer', 'App\Http\Controllers\TrainerControler');
Route::resource('/gym', 'App\Http\Controllers\GymControler');
Route::resource('/membership', 'App\Http\Controllers\MembershipControler');
Route::resource('/contact', 'App\Http\Controllers\ContactControler');
Route::resource('/classes', 'App\Http\Controllers\smallclassControler');
Route::resource('/member', 'App\Http\Controllers\memberControler');
