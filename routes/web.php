<?php

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
Route::get('salam', [\App\Http\Controllers\BelajarController::class, 'greeting']);