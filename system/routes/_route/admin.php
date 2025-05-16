<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FasyankesController;
use App\Http\Controllers\Admin\BidanController;
use App\Http\Controllers\Admin\BayiController;
use App\Http\Controllers\Admin\OrtuController;
use App\Http\Controllers\Admin\AdminAkunController;
use App\Http\Controllers\Admin\AdminPosyanduController;
use App\Http\Controllers\Admin\AdminIbuHamilController;
use Illuminate\Support\Facades\Route;

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
    Route::prefix('ibu_hamil')->group(function () {
        Route::controller(AdminIbuHamilController::class)->group(function () {
            Route::get('/identitas', 'identitasIndex');
            Route::get('/identitas/create', 'identitasCreate');
            Route::post('/identitas/store', 'identitasStore');
            Route::get('/identitas/show/{identitas}', 'identitasShow');
            Route::get('/identitas/edit/{identitas}', 'identitasEdit');
            Route::post('/identitas/update/{identitas}', 'identitasUpdate');
            Route::get('/identitas/delete/{identitas}', 'identitasDelete');
            Route::get('periksa/create', 'periksaCreate');
            Route::get('/periksa', 'periksaIndex');

            // Route::get('/create', 'create');
            // Route::post('/store', 'store');
            // Route::get('/show/{bidan}', 'show');
            // Route::get('/edit/{bidan}', 'edit');
            // Route::post('/update/{bidan}', 'update');
            // Route::get('/delete/{bidan}', 'delete');
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
    Route::prefix('akun')->group(function () {
        Route::controller(AdminAkunController::class)->group(function () {
            Route::get('/dinas', 'dinasIndex');
            Route::get('/nakes', 'nakesIndex');
            Route::get('/puskesmas', 'puskesmasIndex');
            Route::get('/ibu_hamil', 'bumilIndex');
            Route::get('dinas/create', 'dinasCreate');
            Route::get('nakes/create', 'nakesCreate');
            Route::get('puskesmas/create', 'puskesmasCreate');
            Route::get('ibu_hamil/create', 'bumilCreate');
        });
    });
    Route::prefix('posyandu')->group(function () {
        Route::controller(AdminPosyanduController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/create', 'create');
            Route::post('/store', 'store');
            Route::get('/edit/{posyandu}', 'edit');
            Route::put('/update/{posyandu}', 'update');
            Route::get('/delete/{posyandu}', 'delete');
        });
    });
});
