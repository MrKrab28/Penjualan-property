<?php

use App\Http\Controllers\User\PenjualanController;
use App\Http\Controllers\User\PropertyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\CicilanController;
use App\Http\Controllers\User\HomeController;
use App\Models\Property;

Route::middleware(['guest:user,admin'])->group(function () {


    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'regis'])->name('register');
    Route::post('/auth', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::post('/register', [AuthController::class, 'registerUser'])->name('registerUser');
});




Route::middleware('auth:user')->group(function () {
    Route::get('/user/index', [HomeController::class, 'index'])->name('user.index');
    Route::get('/user/logout', [AuthController::class, 'logoutUser'])->name('user.logout');
    Route::get('/about', [HomeController::class, 'about'])->name('user.about');


    Route::get('/profile/{user}', [HomeController::class, 'profile'])->name('user.profile');
    Route::patch('/profile/{user}/update', [HomeController::class, 'updateProfile'])->name('profile.update');



    Route::get('/property', [PropertyController::class, 'index'])->name('user.property');
    Route::get('/property/{property}', [PropertyController::class, 'detail'])->name('user.property-detail');


    // book
    Route::get('/property/books/{property}', [BookingController::class, 'index'])->name('user.book');

    Route::post('/books/add', [BookingController::class, 'store'])->name('user.book.store');
    Route::get('/books/detail/{booking}', [BookingController::class, 'detail'])->name('user.book.detail');
    Route::put('/books/update/{booking}', [BookingController::class, 'update'])->name('user.book.update');
    Route::delete('/books/delete/{booking}', [BookingController::class, 'destroy'])->name('user.book.delete');


    // penjualan
    Route::get('/transaksi/penjualan/detail{penjualan}', [CicilanController::class, 'index'])->name('user.cicilan');
    Route::post('/transaksi/penjualan/add', [PenjualanController::class, 'store'])->name('user.penjualan.store');

});
