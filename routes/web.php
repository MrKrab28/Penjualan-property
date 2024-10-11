<?php

use App\Http\Controllers\User\PenjualanController;
use App\Http\Controllers\User\PropertyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\HomeController;
use App\Models\Property;

Route::middleware(['guest:user,admin'])->group(function () {


    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'regis'])->name('register');
    Route::post('/auth', [AuthController::class, 'authenticate'])->name('authenticate');
});




Route::middleware('auth:user')->group(function () {
    Route::get('/user/index', [HomeController::class, 'index'])->name('user.index');
    Route::get('/user/logout', [AuthController::class, 'logoutUser'])->name('user.logout');


    Route::get('/property', [PropertyController::class, 'index'])->name('user.property');
    Route::get('/property/{property}', [PropertyController::class, 'detail'])->name('user.property-detail');


    // book
    Route::get('/property/books/{property}', [PenjualanController::class, 'index'])->name('user.book');
});
