<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::resource('/berita', BeritaController::class);

Route::namespace('App\Http\Controllers\Dashboard')->prefix('dashboard')->name('dashboard.')->group(function() {
    // Route::resource('/berita', [BeritaController]);
});
