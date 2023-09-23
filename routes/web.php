<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftarMahasiswa']);
Route::get('/tabel-mahasiswa', [MahasiswaController::class, 'tabelMahasiswa']);
Route::get('/blog-mahasiswa', [MahasiswaController::class, 'blogMahasiswa']);
