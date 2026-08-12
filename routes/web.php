<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// method : GET, POST, PUT, DELETE, PATCH
// GET: Lihat dan baca
// POST: mengirim data dari form, aksinya insert
// PUT: mengirim data dari form, aksinya update
// DELETE: mengirim data dari form, aksinya delete
// PATCH: mengirim data dari form, aksinya update
Route::get('counting', [BelajarController::class, 'index']);
Route::get('salam', [BelajarController::class, 'greeting']);
Route::get('hitung-tambah', [BelajarController::class, 'tambah'])->name('tambah');

// Kurang
Route::get('hitung-kurang', [BelajarController::class, 'indexKurang']);
Route::post('action-kurang', [BelajarController::class, 'kurang'])->name("action-kurang");

// Kali
Route::get('hitung-kali', [BelajarController::class, 'indexKali']);
Route::post('action-kali', [BelajarController::class, 'kali'])->name("action-kali");

// Bagi
Route::get('hitung-bagi', [BelajarController::class, 'indexBagi']);
Route::post('action-bagi', [BelajarController::class, 'bagi'])->name("action-bagi");

//Peserta
Route::get('peserta', [PesertaController::class, 'index']);
Route::get('create', [PesertaController::class, 'create'])->name('create');
Route::post('store-peserta', [PesertaController::class, 'store'])->name('store-peserta');
Route::get('edit/{id}', [PesertaController::class, 'edit'])->name('edit.peserta');
Route::put('update/{id}', [PesertaController::class, 'update'])->name('update.peserta');
Route::delete('delete/{id}', [PesertaController::class, 'delete'])->name('delete.peserta');

//Role
Route::resource('role', RoleController::class);