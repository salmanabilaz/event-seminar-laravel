<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriSeminarController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PendaftaranController;

Route::get('/', [DashboardController::class, 'index']);

Route::resource('kategori', KategoriSeminarController::class);
Route::resource('seminar', SeminarController::class);
Route::resource('peserta', PesertaController::class);
Route::resource('pendaftaran', PendaftaranController::class);