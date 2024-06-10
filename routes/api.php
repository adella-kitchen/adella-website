<?php

use App\Http\Controllers\api\Auth\AuthController;
use App\Http\Controllers\api\CartAPIController;
use App\Http\Controllers\api\ContentPromoController;
use App\Http\Controllers\api\MenuController;
use App\Http\Controllers\api\OrderAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// ---- AUTH API ----
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/register', [AuthController::class, 'register'])->middleware('auth:sanctum');

Route::get('/user/{id}', [AuthController::class, 'getUser'])->middleware('auth:sanctum');
Route::get('/promo', [ContentPromoController::class, 'getPromo'])->middleware('auth:sanctum');

// ---- MENU API ----
Route::prefix('menu')->group(function () {
    Route::get('/', [MenuController::class, 'index'])->middleware('auth:sanctum');
    Route::get('/{id}', [MenuController::class, 'show'])->middleware('auth:sanctum');
    Route::get('/kategori/{category}', [MenuController::class, 'getCategory'])->middleware('auth:sanctum');
});

// ---- CART API ----
Route::prefix('cart')->group(function () {
    Route::get('/{id}', [CartAPIController::class, 'index'])->middleware('auth:sanctum');
    Route::post('/add-cart', [CartAPIController::class, 'addCart']);
    Route::put('/update-qty', [CartAPIController::class, 'updateQtyMenu'])->middleware('auth:sanctum');
    Route::delete('/delete/{id}', [CartAPIController::class, 'deleteMenuCart'])->middleware('auth:sanctum');
});

// ---- ORDER API ----
Route::post('/order/add-order', [OrderAPIController::class, 'addOrder']);
