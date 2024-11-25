<?php

use App\Http\Controllers\AutheticationController;
use Illuminate\Support\Facades\Route;

Route::controller(AutheticationController::class)->group(function () {
   Route::get('/', 'signup');
   Route::middleware('auth')->group(function (){
         Route::get('/dashboard', 'dashboard');
   });
   Route::get('/login', 'login')->name('login');
});
