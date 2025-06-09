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

            Route::get('periksa_rutin', 'periksaRutinIndex');
            Route::get('/periksa_rutin/create/{identitas}', 'periksaRutinCreate');
            Route::post('/periksa_rutin/store',  'periksaRutinStore');
            Route::get('/periksa_rutin/show/{periksaRutin}',  'periksaRutinShow');
            Route::get('/periksa_rutin/edit/{periksaRutin}',  'periksaRutinEdit');
            Route::post('/periksa_rutin/update/{periksaRutin}',  'periksaRutinUpdate');
            Route::get('/periksa_rutin/delete/{periksaRutin}',  'periksaRutinDelete');

            Route::get('periksa_trimester', 'periksaTrimesterIndex');
            Route::get('/periksa_trimester/create/{identitas}', 'periksaTrimesterCreate');
            Route::post('/periksa_trimester/store',  'periksaTrimesterStore');
            Route::get('/periksa_trimester/show/{periksaTrimester}',  'periksaTrimesterShow');
            Route::get('/periksa_trimester/edit/{periksaTrimester}',  'periksaTrimesterEdit');
            Route::post('/periksa_trimester/update/{periksaTrimester}',  'periksaTrimesterUpdate');
            Route::get('/periksa_trimester/delete/{periksaTrimester}',  'periksaTrimesterDelete');






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

            //Route identitas
            Route::get('identitas', 'bayiIndex');
            Route::get('identitas/create/{identitas}', 'bayiCreate');
            Route::post('/identitas/store', 'bayiStore');


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
            //ROUTE UNTUK DINAS
            Route::get('/dinas', 'dinasIndex');
            Route::get('dinas/create', 'dinasCreate');
            Route::post('dinas/store', 'dinasStore');
            Route::get('/dinas/edit/{dinkes}', 'dinasEdit');
            Route::post('/dinas/update/{dinkes}', 'dinasUpdate');
            Route::get('/dinas/delete/{dinkes}', 'dinasDelete');
            //ROUTE UNTUK NAKES
            Route::get('/nakes', 'nakesIndex');
            Route::get('/nakes/create', 'nakesCreate');
            Route::post('/nakes/store', 'nakesStore');
            Route::get('/nakes/edit/{nakes}', 'nakesEdit');
            Route::post('/nakes/update/{nakes}', 'nakesUpdate');
            Route::get('/nakes/delete/{nakes}', 'nakesDelete');
            //ROUTE UNTUK PUSKESMAS
            Route::get('/puskesmas', 'puskesmasIndex');
            Route::get('/puskesmas/create', 'puskesmasCreate');
            Route::post('/puskesmas/store', 'puskesmasStore');
            Route::get('/puskesmas/edit/{puskesmas}', 'puskesmasEdit');
            Route::post('/puskesmas/update/{puskesmas}', 'puskesmasUpdate');
            Route::get('/puskesmas/delete/{puskesmas}', 'puskesmasDelete');
            //ROUTE UNTUK IBU HAMIL
            Route::get('/ibu_hamil', 'IbuHamilIndex');
            Route::get('/ibu_hamil/create', 'IbuHamilCreate');
            Route::post('/ibu_hamil/store', 'IbuHamilStore');
            Route::get('/ibu_hamil/edit/{IbuHamil}', 'IbuHamilEdit');
            Route::post('/ibu_hamil/update/{IbuHamil}', 'IbuHamilUpdate');
            Route::get('/ibu_hamil/delete/{IbuHamil}', 'IbuHamilDelete');
            //ROUTE UNTUK ADMIN
            Route::get('/admin', 'adminIndex');
            Route::get('/admin/create', 'adminCreate');
            Route::post('/admin/store', 'adminStore');
            Route::get('/admin/edit/{admin}', 'adminEdit');
            Route::post('/admin/update/{admin}', 'adminUpdate');
            Route::get('/admin/delete/{admin}', 'adminDelete');
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
