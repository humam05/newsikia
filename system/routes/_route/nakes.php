<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Nakes\DashboardnController;
use App\Http\Controllers\Nakes\AkunController;
use App\Http\Controllers\Nakes\BumilController;
use App\Http\Controllers\Nakes\BayinController;
use Illuminate\Support\Facades\Route;


Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// PREFIX ROUTE NAKES
Route::prefix('nakes')->group(function () {
    Route::controller(DashboardnController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });
    Route::prefix('akun')->group(function () {
        Route::controller(AkunController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/create', 'create');
            Route::post('/store', 'store');
            Route::get('/edit{akun}', 'edit');
            Route::get('/update{akun}', 'update');
            Route::get('/delete{akun}', 'delete');
        });
    });
    Route::prefix('ibu_hamil')->group(function () {
        Route::controller(BumilController::class)->group(function () {
            Route::get('/identitas', 'identitasIndex');
            Route::get('/identitas/create', 'identitasCreate');
            Route::post('identitas/store', 'identitasStore');
            Route::get('/identitas/show/{identitas}', 'identitasShow');
            Route::get('/identitas/edit/{identitas}', 'identitasEdit');
            Route::post('/identitas/update/{identitas}', 'identitasUpdate');
            Route::get('/identitas/delete/{identitas}', 'identitasDelete');
            // Route::get('/periksa_rutin', 'periksaRutinIndex');
            Route::get('periksa_rutin', 'periksaRutinIndex');
            Route::get('/periksa_rutin/create/{identitas}', 'periksaRutinCreate');
            Route::post('/periksa_rutin/store',  'periksaRutinStore');
            Route::get('/periksa_rutin/show/{periksaRutin}',  'periksaRutinShow');
            Route::get('/periksa_rutin/edit/{periksaRutin}',  'periksaRutinEdit');
            Route::post('/periksa_rutin/update/{periksaRutin}',  'periksaRutinUpdate');
            Route::get('/periksa_rutin/delete/{periksaRutin}',  'periksaRutinDelete');
            // Route::get('/periksa_trimester', 'periksaTrimesterIndex');

            Route::get('periksa_trimester', 'periksaTrimesterIndex');
            Route::get('/periksa_trimester/create/{identitas}', 'periksaTrimesterCreate');
            Route::post('/periksa_trimester/store',  'periksaTrimesterStore');
            Route::get('/periksa_trimester/show/{periksaTrimester}',  'periksaTrimesterShow');
            Route::get('/periksa_trimester/edit/{periksaTrimester}',  'periksaTrimesterEdit');
            Route::post('/periksa_trimester/update/{periksaTrimester}',  'periksaTrimesterUpdate');
            Route::get('/periksa_trimester/delete/{periksaTrimester}',  'periksaTrimesterDelete');
            Route::get('/hpl', 'hpl');
        });
    });
    Route::prefix('bayi')->group(function () {
        Route::controller(BayinController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('kms', 'kms');
        });
    });
});
