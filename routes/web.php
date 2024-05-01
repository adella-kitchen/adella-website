<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TambahKaryawan;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\Karyawan;
use App\Livewire\Pages\Login;
use App\Livewire\Pages\ManajemenBahan;
use App\Livewire\Pages\ManajemenMenu;
use App\Livewire\Pages\Pesanan;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Route::get('/admin/dashboard', Dashboard::class);
Route::get('/admin/manajemen-bahan', ManajemenBahan::class);
Route::get('/admin/manajemen-menu', ManajemenMenu::class);
Route::get('/admin/karyawan', Karyawan::class);
Route::get('/admin/pesanan', Pesanan::class);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/admin/karyawan/add-karyawan', [KaryawanController::class, 'addKaryawan'])->name('addKaryawan');
Route::get('/admin/karyawan/edit-karyawan/{id}', [KaryawanController::class, 'editKaryawan']);
Route::delete('/admin/karyawan/delete-karyawan/{id}', [KaryawanController::class, 'deleteData'])->name('deleteData');
Route::post('/admin/karyawan/update-karyawan/{id}', [KaryawanController::class, 'updateKaryawan'])->name('updateKaryawan');
