<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FasyankesController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman welcome
Route::get('/admin/dashboard', function () {
    return view('welcome');
});

// Prefix untuk route admin
Route::prefix('admin')->group(function () {
    // Route untuk Dashboard
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
            Route::delete('/delete/{fasyankes}', 'delete'); // Proses hapus data
        });
    });

    // Prefix untuk Bidan
    Route::prefix('bidan')->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'index');
        });
    });
});
