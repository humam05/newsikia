<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Nakes\DashboardnController;
use App\Http\Controllers\Nakes\AkunController;
use App\Http\Controllers\Nakes\BumilController;
use App\Http\Controllers\Nakes\BayinController;
use Illuminate\Support\Facades\Route;

// PREFIX ROUTE NAKES
Route::prefix('nakes')->group(function () {
    Route::controller(DashboardnController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });
    Route::prefix('akun')->group(function () {
        Route::controller(AkunController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/create', 'create');
        });
    });
    Route::prefix('ibu_hamil')->group(function () {
        Route::controller(BumilController::class)->group(function () {
            Route::get('/identitas', 'identitasIndex');
            Route::get('/identitas/create', 'identitasCreate');
            Route::post('identitas/store', 'identitasStore');
            Route::get('/show/{identitas}', 'show');
            Route::get('/hpl', 'hpl');
            Route::get('/periksa', 'periksa');
        });
    });
    Route::prefix('bayi')->group(function () {
        Route::controller(BayinController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('kms', 'kms');
        });
    });
});
