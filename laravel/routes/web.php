<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authmanager;

Route::get('/welcome', function () {
    return view('welcome');
})->name('home')->middleware('auth');

Route::controller(Authmanager::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginPost')->name('login.post');

    Route::get('/', 'signup')->name('signup');
    Route::post('/signup', 'signupPost')->name('signup.post');

    Route::get('/logout', 'logout')->name('logout.get');
});
