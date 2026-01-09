<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers')->group(function() {
    
    // Auth
    Route::namespace('Auth')->name('auth.')->group(function() {
        Route::get('/login', 'LoginController@index')->name('login');
        Route::post('/login', 'LoginController@post')->name('login.post');
    });
    
    // Guest
    Route::namespace('Guest')->name('guest.')->group(function() {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/visi-misi', 'VisiMisiController@index')->name('visi-misi');
        Route::get('/sejarah', 'SejarahController@index')->name('sejarah');
        Route::get('/struktur-organisasi', 'StrukturOrganisasiController@index')->name('struktur-organisasi');
        Route::get('/tugas-fungsi', 'TugasFungsiController@index')->name('tugas-fungsi');
        Route::get('/pusat', 'PusatController@index')->name('pusat');
    });
    
    // Dashboard
    Route::namespace('Dashboard')->prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function() {
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('/sambutan', 'SambutanController');
        Route::resource('/visi-misi', 'VisiMisiController');
        Route::resource('/sejarah', 'SejarahController');
        Route::resource('/struktur-organisasi', 'StrukturOrganisasiController');
        Route::resource('/tenaga-pengelola', 'TenagaPengelolaController');
        Route::resource('/tugas-fungsi', 'TugasFungsiController');
        Route::resource('/pusat', 'PusatController');
    });
});


















Route::post('/ckeditor/upload', function (Request $request) {
    $request->validate([
        'upload' => 'required|image'
    ]);

    $path = $request->file('upload')->store('ckeditor', 'public');

    return response()->json([
        'url' => asset('storage/' . $path)
    ]);
});