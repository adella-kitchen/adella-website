<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KaryawanController;
use App\Http\Controllers\admin\ManajemenBahanController;
use App\Http\Controllers\admin\ManajemenKontenController;
use App\Http\Controllers\admin\ManajemenMenuController;
use App\Http\Controllers\admin\PesananController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckAdminRole;
use Illuminate\Support\Facades\Route;

// ------ auth google ------
Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);


Route::redirect('/', '/admin/dashboard');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/add-user', [LoginController::class, 'addUser']);

//testing API
Route::get('/api-testing/{id}', [DashboardController::class, 'apiTesting']);

Route::middleware('auth')->group(function () {
    Route::middleware(CheckAdminRole::class)->prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/manajemen-bahan', [ManajemenBahanController::class, 'index']);
        // Route::get('/manajemen-bahan/{id}', ManajemenDetailBahan::class);

        // Route::post('/manajemen-menu/tambahmenu', [MenuController::class, 'addMenu']);
        Route::get('/pesanan', [PesananController::class,'index']);

        // ---- route manajemen menu ----
        Route::prefix('manajemen-menu')->group(function () {
            Route::get('/', [ManajemenMenuController::class, 'index']);
            Route::get('/{id}', [ManajemenMenuController::class, 'detailMenu']);
            Route::get('/{id}/{id_variant}', [ManajemenMenuController::class, 'variantOptionShow']);
            Route::post('/add-menu', [ManajemenMenuController::class, 'addMenu'])->name('addMenu');
            Route::post('/add-variant', [ManajemenMenuController::class, 'addVariant'])->name('addVariant');
            Route::post('/add-option-variant', [ManajemenMenuController::class, 'addOptionVariant'])->name('addOptionVariant');
        });

        // ---- route manajemen konten ----
        Route::prefix('manajemen-konten')->group(function () {
            Route::get('/', [ManajemenKontenController::class, 'index']);
            Route::post('/addPromo', [ManajemenKontenController::class, 'addPromo'])->name('addPromo');
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