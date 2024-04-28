<?php

use App\Http\Controllers\LoginController;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\Karyawan;
use App\Livewire\Pages\Login;
use App\Livewire\Pages\ManajemenBahan;
use App\Livewire\Pages\ManajemenMenu;
use App\Livewire\Pages\Pesanan;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/admin/dashboard');
Route::get('/admin/dashboard', Dashboard::class);
Route::get('/admin/manajemen-bahan', ManajemenBahan::class);
Route::get('/admin/manajemen-menu', ManajemenMenu::class);
Route::get('/admin/karyawan', Karyawan::class);
Route::get('/admin/pesanan', Pesanan::class);
Route::get('/login', [LoginController::class, 'index']);
