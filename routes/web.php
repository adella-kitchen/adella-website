<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TambahKaryawan;
use App\Http\Controllers\TestingController;
use App\Http\Middleware\CheckAdminRole;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\Karyawan;
use App\Livewire\Pages\Login;
use App\Livewire\Pages\ManajemenBahan;
use App\Livewire\Pages\ManajemenKontenpromo;
use App\Livewire\Pages\ManajemenMenu;
use App\Livewire\Pages\Pesanan;
use Illuminate\Support\Facades\Route;



// ------ login route ------
Route::redirect('/', '/login');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/testapi/menu/{id}', [TestingController::class, 'index']);

// ------ register route ------
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/add-user', [LoginController::class, 'addUser']);

Route::middleware('auth')->group(function () {
    Route::middleware(CheckAdminRole::class)->prefix('admin')->group(function () {
        Route::get('/dashboard', Dashboard::class);
        Route::get('/manajemen-bahan', ManajemenBahan::class);
        Route::get('/manajemen-menu', ManajemenMenu::class);
        Route::get('/pesanan', Pesanan::class);
      
        // ---- route manajemen konten ----
        Route::get('/manajemen-konten', ManajemenKontenpromo::class);
      
        // ---- route karyawan ----
        Route::prefix('karyawan')->group(function () {
            Route::get('/', Karyawan::class);
            Route::post('/add-karyawan', [KaryawanController::class, 'addKaryawan'])->name('addKaryawan');
            Route::get('/edit-karyawan/{id}', [KaryawanController::class, 'editKaryawan']);
            Route::delete('/delete-karyawan/{id}', [KaryawanController::class, 'deleteData'])->name('deleteData');
            Route::post('/update-karyawan/{id}', [KaryawanController::class, 'updateKaryawan'])->name('updateKaryawan');
        });
    });
});