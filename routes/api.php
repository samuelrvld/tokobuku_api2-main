<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('kategoris', KategoriController::class);
Route::apiResource('bukus', BukuController::class);
Route::get('/bukus', [BukuController::class, 'index']);
Route::post('/bukus', [BukuController::class, 'store']);
Route::get('/bukus/{buku}', [BukuController::class, 'show']);
Route::put('/bukus/{buku}', [BukuController::class, 'update']);
Route::delete('/bukus/{buku}', [BukuController::class, 'destroy']);
Route::get('/bukus/search', [BukuController::class, 'search']);
