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
use App\Http\Controllers\Nakes\DashboardnController;
use App\Http\Controllers\Nakes\AkunController;
use App\Http\Controllers\Nakes\BumilController;
use App\Http\Controllers\Nakes\BayinController;
use App\Http\Controllers\Bumil\DashboardbController;
use App\Http\Controllers\Bumil\IdentitasController;
use App\Http\Controllers\Bumil\KesehatanIbuController;
use App\Http\Controllers\Bumil\KesehatanBayiController;
use App\Http\Controllers\Bumil\KalenderKehamilanController;
use App\Http\Controllers\Bumil\JadwalPosyanduController;
use App\Http\Controllers\Puskesmas\DashboardpController;
use App\Http\Controllers\Puskesmas\JadwalPosyanduPuskesmasController;
use App\Http\Controllers\Dinkes\DashboarddController;
use App\Http\Controllers\Dinkes\BidanDinkesController;
use App\Http\Controllers\Dinkes\FasyankesDinkesController;
use App\Http\Controllers\Dinkes\BayiDinkesController;
use App\Http\Controllers\Dinkes\IbuHamilDinkesController;
use Illuminate\Support\Facades\Route;

// PREFIX ROUTE DINKES
Route::prefix('dinkes')->group(function () {
    Route::controller(DashboarddController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });
    Route::prefix('bidan')->group(function () {
        Route::controller(BidanDinkesController::class)->group(function () {
            Route::get('/', 'index');
        });
    });
    Route::prefix('fasyankes')->group(function () {
        Route::controller(FasyankesDinkesController::class)->group(function () {
            Route::get('/', 'index');
        });
    });
    Route::prefix('bayi')->group(function () {
        Route::controller(BayiDinkesController::class)->group(function () {
            Route::get('/', 'index');
        });
    });
    Route::prefix('bayi')->group(function () {
        Route::controller(BayiDinkesController::class)->group(function () {
            Route::get('/', 'index');
        });
    });
    Route::prefix('ibu_hamil')->group(function () {
        Route::controller(IbuHamilDinkesController::class)->group(function () {
            Route::get('/', 'index');
        });
    });
});
