<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// method : GET, POST, PUT, PATCH, DELETE
// GET : Lihat dan baca
// POST : mengeirim data dari form, aksinya dari insert
// PUT : mengeirim data dari form, aksinya dari update
// PATCH : mengeirim data dari form, aksinya dari update
// DELETE : mengeirim data dari form, aksinya dari delete
Route::get('counting', [BelajarController::class, 'index']);
Route::get('salam', [BelajarController::class, 'greeting']);
Route::get('hitung-tambah', [BelajarController::class, 'tambah']);