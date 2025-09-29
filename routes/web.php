<?php

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
