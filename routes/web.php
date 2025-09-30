<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakulikulerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/ekstrakulikuler', function () {
    return view('ekstrakulikuler');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/berita', function () {
    return view('berita');
});

    Route::get('/berita', [BeritaController::class, 'index']);
    Route::get('/ekstrakulikuler', [EkstrakulikulerController::class, 'index']);
