<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/sms', [SmsController::class, 'send_sms']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {

    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


    Route::get('/', [HomeController::class, 'index'])->name('home');


    Route::get('/book', [HomeController::class, 'index'])->name('book.index');

    // Users

    Route::get('/users', [UserController::class, 'index'])->name('user.index');
});
