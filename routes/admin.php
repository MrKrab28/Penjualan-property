<?php

use App\Models\User;
use App\Models\Spesifikasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PenjualanController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\PropertyImgController;
use App\Http\Controllers\Admin\SpesifikasiController;

Route::middleware('auth:admin')->group( function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




    // USER
    Route::get('/user/index', [UserController::class, 'index'])->name('user');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/update/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');




    // PROPERTY
    Route::get('/property/list', [PropertyController::class, 'index'])->name('property.list');
    Route::post('/property/add', [PropertyController::class, 'store'])->name('property.store');
    Route::get('/property/edit/{property}', [PropertyController::class, 'edit'])->name('property.edit');
    Route::get('/property/show/{property}', [PropertyController::class, 'detail'])->name('property.detail');
    Route::patch('/property/update/{property}', [PropertyController::class, 'update'])->name('property.update');
    Route::delete('/property/{property}', [PropertyController::class, 'destroy'])->name('property.destroy');



    // PROPERTY IMAGES
    Route::post('/property/image/store/{property}', [PropertyImgController::class, 'index'])->name('property.image.store');
    Route::delete('/property/image/{image}', [PropertyImgController::class, 'destroy'])->name('property.image.destroy');



    //TYPE
    Route::get('/property/type', [TypeController::class, 'index'])->name('type');
    Route::post('/property/type/add', [TypeController::class, 'store'])->name('type.store');
    Route::get('/property/type/edit/{type}', [TypeController::class, 'edit'])->name('type.edit');
    Route::patch('/property/type/update/{type}', [TypeController::class, 'update'])->name('type.update');
    Route::delete('/property/type/{type}', [TypeController::class, 'destroy'])->name('type.destroy');


    //SPESIFIKASI
    Route::get('/property/spesifikasi', [SpesifikasiController::class, 'index'])->name('spesifikasi');
    Route::post('/property/spesifikasi/add', [SpesifikasiController::class, 'store'])->name('spesifikasi.store');
    Route::get('/property/spesifikasi/edit/{spesifikasi}', [SpesifikasiController::class, 'edit'])->name('spesifikasi.edit');
    Route::patch('/property/spesifikasi/update/{spesifikasi}', [SpesifikasiController::class, 'update'])->name('spesifikasi.update');
    Route::delete('/property/spesifikasi/{spesifikasi}', [SpesifikasiController::class, 'destroy'])->name('spesifikasi.destroy');

    // TRANSAKSI
    Route::get('/transaksi',[TransaksiController::class,'index'])->name('transaksi');
    Route::get('/transaksi/pengajuan',[TransaksiController::class,'book'])->name('book');
    Route::get('/transaksi/penjualan',[TransaksiController::class,'penjualan'])->name('penjualan');
});
