<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KaryawanController;
use App\Http\Controllers\admin\ManajemenBahanController;
use App\Http\Controllers\admin\ManajemenKontenController;
use App\Http\Controllers\admin\ManajemenMenuController;
use App\Http\Controllers\admin\PesananController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckAdminRole;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/admin/dashboard');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/add-user', [LoginController::class, 'addUser']);

Route::middleware('auth')->group(function () {
    Route::middleware(CheckAdminRole::class)->prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/manajemen-bahan', [ManajemenBahanController::class, 'index']);
        // Route::get('/manajemen-bahan/{id}', ManajemenDetailBahan::class);
        Route::get('/manajemen-menu', [ManajemenMenuController::class, 'index']);
        Route::get('/manajemen-menu/{id}', [ManajemenMenuController::class, 'detailMenu']);
        // Route::post('/manajemen-menu/tambahmenu', [MenuController::class, 'addMenu']);
        Route::get('/pesanan', [PesananController::class, 'index']);

        // ---- route manajemen konten ----
        Route::prefix('manajemen-konten')->group(function () {
            Route::get('/', [ManajemenKontenController::class, 'index'])->name('promo.index');
            Route::get('/promo/create', [ManajemenKontenController::class, 'create'])->name('promo.create');
            Route::post('/promo/store', [ManajemenKontenController::class, 'store'])->name('promo.store');
            Route::get('/promo/delete/{id_promo}', [ManajemenKontenController::class, 'destroy'])->name('promo.delete');
        });

        // ---- route karyawan ----
        Route::prefix('karyawan')->group(function () {
            Route::get('/', [KaryawanController::class, 'index']);
            Route::post('/add-karyawan', [KaryawanController::class, 'addKaryawan'])->name('addKaryawan');
            Route::get('/edit-karyawan/{id}', [KaryawanController::class, 'editKaryawan']);
            Route::delete('/delete-karyawan/{id}', [KaryawanController::class, 'deleteData'])->name('deleteData');
            Route::post('/update-karyawan/{id}', [KaryawanController::class, 'updateKaryawan'])->name('updateKaryawan');
        });
    });
});
