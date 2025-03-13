<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FasyankesController;
use App\Http\Controllers\Admin\BidanController;
use App\Http\Controllers\Admin\BayiController;
use App\Http\Controllers\Admin\OrtuController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman welcome
Route::get('/admin/dashboard', function () {
    return view('welcome');
});

// Prefix untuk route admin
Route::prefix('admin')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });



    // Prefix untuk Fasyankes
    Route::prefix('fasyankes')->group(function () {
        Route::controller(FasyankesController::class)->group(function () {
            Route::get('/', 'index'); // Menampilkan daftar Fasyankes
            Route::get('/create', 'create'); // Menampilkan form tambah data
            Route::post('/store', 'store'); // Proses tambah data
            Route::get('/show/{fasyankes}', 'show'); // Menampilkan detail Fasyankes
            Route::get('/edit/{fasyankes}', 'edit'); // Menampilkan form edit data
            Route::post('/update/{fasyankes}', 'update'); // Proses update data
            Route::get('/delete/{fasyankes}', 'delete'); // Proses hapus data
        });
    });

    // Prefix untuk Bidan
    Route::prefix('bidan')->group(function () {
        Route::controller(BidanController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/create', 'create');
            Route::post('/store', 'store');
            Route::get('/show/{bidan}', 'show');
            Route::get('/edit/{bidan}', 'edit');
            Route::post('/update/{bidan}', 'update');
            Route::get('/delete/{bidan}', 'delete');
        });
    });

    Route::prefix('bayi')->group(function () {
        Route::controller(BayiController::class)->group(function () {
            Route::get('/', 'index'); // Menampilkan daftar Fasyankes
            Route::get('/create', 'create');
            Route::post('/store', 'store');
            Route::get('/show/{bayi}', 'show');
            Route::get('/edit/{bayi}', 'edit');
            Route::post('/update/{bayi}', 'update');
            Route::get('/delete/{bayi}', 'delete');

        });
    });
    Route::prefix('ortu')->group(function () {
        Route::controller(OrtuController::class)->group(function () {
            Route::get('/', 'index'); // Menampilkan daftar Fasyankes
            Route::get('/create', 'create');
            Route::post('/store', 'store');
            Route::get('/show/{ortu}', 'show');
            Route::get('/edit/{ortu}', 'edit');
            Route::post('/update/{ortu}', 'update');
            Route::get('/delete/{ortu}', 'delete');

        });
    });
});




