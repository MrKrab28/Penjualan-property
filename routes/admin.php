<?php

use App\Models\User;
use DeepCopy\f001\B;
use App\Models\Metode;
use App\Models\Penjualan;
use App\Models\Spesifikasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HargaController;
use App\Http\Controllers\Admin\MetodeController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CicilanController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LaporanController;
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
    Route::put('/property/update/{property}', [PropertyController::class, 'update'])->name('property.update');
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
    Route::get('/property/spesifikasi/edit/{spek}', [SpesifikasiController::class, 'edit'])->name('spesifikasi.edit');
    Route::put('/property/spesifikasi/update/{spek}', [SpesifikasiController::class, 'update'])->name('spesifikasi.update');
    Route::delete('/property/spesifikasi/{spek}', [SpesifikasiController::class, 'destroy'])->name('spesifikasi.destroy');

    // HARGA
    Route::get('/property/harga', [HargaController::class, 'index'])->name('harga');
    Route::post('/property/harga/add', [HargaController::class, 'store'])->name('harga.store');
    Route::get('/property/harga/edit/{harga}', [HargaController::class, 'edit'])->name('harga.edit');
    Route::put('/property/harga/update/{harga}', [HargaController::class, 'update'])->name('harga.update');
    Route::delete('/property/harga/delete/{harga}', [HargaController::class, 'delete'])->name('harga.delete');

    // PNJUALAN
    Route::get('/transaksi/penjualan',[PenjualanController::class, 'index'])->name('penjualan');
    Route::post('/transaksi/penjualan/add',[PenjualanController::class, 'store'])->name('penjualan.store');
    Route::get('/transaksi/penjualan/edit/{penjualan}',[PenjualanController::class, 'edit'])->name('penjualan.edit');
    Route::get('/transaksi/penjualan/detail/{penjualan}',[PenjualanController::class, 'detail'])->name('penjualan.detail');
    Route::put('/transaksi/penjualan/update/{penjualan}',[PenjualanController::class, 'update'])->name('penjualan.update');
    Route::delete('/transaksi/penjualan/delete/{penjualan}',[PenjualanController::class, 'destroy'])->name('penjualan.delete');


    // CICILAN
    Route::get('/transaksi/cicilan/',[CicilanController::class, 'index'])->name('cicilan');
    Route::get('/transaksi/cicilan/{penjualan}',[CicilanController::class, 'detail'])->name('cicilan.detail');
    Route::post('/transaksi/cicilan/add/',[CicilanController::class, 'store'])->name('cicilan.store');
    Route::get('/transaksi/cicilan/edit/{cicilan}',[CicilanController::class, 'edit'])->name('cicilan.edit');
    Route::put('/transaksi/cicilan/update/{cicilan}',[CicilanController::class, 'update'])->name('cicilan.update');
    Route::delete('/transaksi/cicilan/delete/{cicilan}',[CicilanController::class, 'destroy'])->name('cicilan.delete');


    // LAPORAN
    Route::get('/laporan/penjualan', [LaporanController::class, 'penjualan'])->name('pdf.penjualan');
    // Route::get('/laporan/keuangan', [LaporanController::class, 'keuangan'])->name('pdf.keuangan');
    Route::get('/laporan/property', [LaporanController::class, 'property'])->name('pdf.property');


    // BOOKING
    Route::get('/transaksi/booking', [BookingController::class, 'index'])->name('booking');
    Route::post('/books/add', [BookingController::class, 'store'])->name('book.store');
    Route::get('/books/edit/{booking}', [BookingController::class, 'edit'])->name('book.edit');
    Route::put('/books/update/{booking}', [BookingController::class, 'update'])->name('book.update');
    Route::delete('/books/delete/{booking}', [BookingController::class, 'destroy'])->name('book.delete');



    Route::put('/books/status/{booking}/terima', [BookingController::class, 'statusTerima'])->name('status-book.terima');
    Route::put('/books/status/{booking}/tolak', [BookingController::class, 'statusTolak'])->name('status-book.tolak');

    // METODE
    Route::get('property/metode', [MetodeController::class, 'index'])->name('metode');
    Route::post('property/metode/add', [MetodeController::class, 'store'])->name('metode.store');
    Route::get('property/metode/edit/{metode}', [MetodeController::class, 'edit'])->name('metode.edit');
    Route::put('property/metode/update/{metode}', [MetodeController::class, 'update'])->name('metode.update');
    Route::delete('property/metode/delete/{metode}', [MetodeController::class, 'destroy'])->name('metode.delete');
});
