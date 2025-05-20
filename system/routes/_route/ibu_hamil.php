<?php


use App\Http\Controllers\Bumil\DashboardbController;
use App\Http\Controllers\Bumil\IdentitasController;
use App\Http\Controllers\Bumil\KesehatanIbuController;
use App\Http\Controllers\Bumil\KesehatanBayiController;
use App\Http\Controllers\Bumil\KalenderKehamilanController;
use App\Http\Controllers\Bumil\JadwalPosyanduController;
use Illuminate\Support\Facades\Route;

Route::prefix('ibu_hamil')->group(function () {
    Route::controller(DashboardbController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });
    Route::prefix('identitas')->group(function () {
        Route::controller(IdentitasController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/create', 'create')->name('ibu_hamil.identitas.create');
            Route::post('/store', 'store')->name('ibu_hamil.identitas.store');
            Route::get('/show/{identitas}', 'show')->name('ibu_hamil.identitas.show');
            Route::get('/edit/{identitas}', 'edit')->name('ibu_hamil.identitas.edit');
            Route::post('/update/{identitas}', 'update')->name('ibu_hamil.identitas.update');
            Route::get('/delete/{identitas}', 'delete')->name('ibu_hamil.identitas.delete');

            // 👉 Tambahkan route lengkapiData dengan nama yang benar:
            Route::get('/lengkapi', 'lengkapiData')->name('ibu_hamil.identitas.lengkapi');
        });
    });
    Route::prefix('kesehatan_ibu')->group(function () {
        Route::controller(KesehatanIbuController::class)->group(function () {
            Route::get('/', 'index');
        });
    });
    Route::prefix('kesehatan_bayi')->group(function () {
        Route::controller(KesehatanBayiController::class)->group(function () {
            Route::get('/', 'index');
        });
    });
    Route::prefix('kalender_kehamilan')->group(function () {
        Route::controller(KalenderKehamilanController::class)->group(function () {
            Route::get('/', 'index');
        });
    });
    Route::prefix('jadwal_posyandu')->group(function () {
        Route::controller(JadwalPosyanduController::class)->group(function () {
            Route::get('/', 'index');
        });
    });
});
