<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FasyankesController;
use App\Http\Controllers\Admin\BidanController;
use App\Http\Controllers\Admin\BayiController;
use App\Http\Controllers\Admin\OrtuController;
use App\Http\Controllers\Admin\AdminAkunController;
use App\Http\Controllers\Admin\AdminPosyanduController;
use App\Http\Controllers\Nakes\DashboardnController;
use App\Http\Controllers\Nakes\AkunController;
use App\Http\Controllers\Nakes\BumilController;
use App\Http\Controllers\Nakes\BayinController;
use App\Http\Controllers\Bumil\DashboardbController;
use App\Http\Controllers\Bumil\DataDiriController;
use App\Http\Controllers\Bumil\KesehatanIbuController;
use App\Http\Controllers\Bumil\KesehatanBayiController;
use App\Http\Controllers\Bumil\KalenderKehamilanController;
use App\Http\Controllers\Bumil\JadwalPosyanduController;
use App\Http\Controllers\Puskesmas\DashboardpController;
use App\Http\Controllers\Puskesmas\JadwalPosyanduPuskesmasController;
use App\Http\Controllers\Dinkes\DashboarddController;
use Illuminate\Support\Facades\Route;

// // Route untuk halaman welcome
// Route::get('/admin/dashboard', function () {
//     return view('welcome');
// });

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'halamanLogin');
    Route::get('login', 'halamanLogin');
    Route::post('login', 'prosesLogin');
    Route::post('logout', 'logout');
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
    Route::prefix('akun')->group(function () {
        Route::controller(AdminAkunController::class)->group(function () {
            Route::get('/dinas', 'dinasIndex');
            Route::get('/nakes', 'nakesIndex');
            Route::get('/puskesmas', 'puskesmasIndex');
            Route::get('/ibu_hamil', 'bumilIndex');

        });
    });
    Route::prefix('posyandu')->group(function () {
        Route::controller(AdminPosyanduController::class)->group(function () {
            Route::get('/', 'index');

        });
    });
});

// PREFIX ROUTE NAKES
Route::prefix('nakes')->group(function () {
    Route::controller(DashboardnController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });
    Route::prefix('akun')->group(function () {
        Route::controller(AkunController::class)->group(function () {
            Route::get('/', 'index');

        });
    });
    Route::prefix('ibu_hamil')->group(function () {
        Route::controller(BumilController::class)->group(function () {
            Route::get('/', 'index');
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

// PREFIX ROUTE BUMIL
Route::prefix('ibu_hamil')->group(function () {
    Route::controller(DashboardbController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });
    Route::prefix('data_diri')->group(function () {
        Route::controller(DataDiriController::class)->group(function () {
            Route::get('/', 'index');

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

// PREFIX ROUTE PUSKESMAS
Route::prefix('puskesmas')->group(function () {
    Route::controller(DashboardpController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });
    Route::prefix('jadwal_posyandu_puskesmas')->group(function () {
        Route::controller(JadwalPosyanduPuskesmasController::class)->group(function () {
            Route::get('/', 'index');

        });
    });

});

// PREFIX ROUTE DINKES
Route::prefix('dinkes')->group(function () {
    Route::controller(DashboarddController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });
});



