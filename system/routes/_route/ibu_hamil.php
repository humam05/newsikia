<?php


use App\Http\Controllers\Bumil\DashboardbController;
use App\Http\Controllers\Bumil\IdentitasController;
use App\Http\Controllers\Bumil\KesehatanIbuController;
use App\Http\Controllers\Bumil\KesehatanBayiController;
use App\Http\Controllers\Bumil\KalenderKehamilanController;
use App\Http\Controllers\Bumil\JadwalPosyanduController;
use Illuminate\Support\Facades\Route;

Route::prefix('ibu_hamil')->middleware('auth:ibuhamil')->group(function () {
    Route::controller(DashboardbController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });



    Route::prefix('identitas')->group(function () {
        Route::controller(IdentitasController::class)->group(function () {
            Route::get('/', 'index')->name('ibu_hamil.identitas.index'); // ✅ Diperbaiki di sini
            Route::get('/create', 'create')->name('ibu_hamil.identitas.create');
            Route::post('/store', 'store')->name('ibu_hamil.identitas.store');
            Route::get('/show/{identitas}', 'show')->name('ibu_hamil.identitas.show');
            Route::get('/edit/{identitas}', 'edit')->name('ibu_hamil.identitas.edit');
            Route::post('/update/{identitas}', 'update')->name('ibu_hamil.identitas.update');
            Route::get('/delete/{identitas}', 'delete')->name('ibu_hamil.identitas.delete');
            Route::get('/lengkapi', 'lengkapiData')->name('ibu_hamil.identitas.lengkapi');
        });
    });

    Route::prefix('anak')->group(function () {
        Route::controller(IdentitasController::class)->group(function () {
            Route::get('/', 'indexAnak');
            Route::get('/show/{id}',  'showAnak');

        });
    });


    Route::prefix('kesehatan_ibu')->group(function () {
        Route::controller(KesehatanIbuController::class)->group(function () {
            Route::get('/periksa_rutin', 'indexRutin');
            Route::get('/periksa_rutin/show/{periksaRutin}',  'showRutin');
            Route::get('/periksa_trimester', 'indexTrimester');
            Route::get('/periksa_trimester/show/{periksaTrimester}',  'showTrimester');
        });
    });
    Route::prefix('kesehatan_bayi')->group(function () {
        Route::controller(KesehatanBayiController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/show/{periksaBayi}', 'show');


            // Route::get('/show/{periksaBayi}',  'show');

        });
    });
    Route::prefix('jadwal_posyandu')->group(function () {
        Route::controller(JadwalPosyanduController::class)->group(function () {
            Route::get('/', 'index')->name('ibu_hamil.jadwal_posyandu.index');
        });
    });
});


Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
