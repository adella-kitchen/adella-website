<?php

use App\Http\Controllers\api\Auth\AuthController;
use App\Http\Controllers\api\MenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/menu', [MenuController::class, 'index'])->middleware('auth:sanctum');
Route::get('/menu/{id}', [MenuController::class, 'show'])->middleware('auth:sanctum');
Route::get('/menu/kategori/{category}', [MenuController::class, 'getCategory'])->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout',[AuthController::class, 'logout'])->middleware('auth:sanctum');
