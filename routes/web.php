<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RegencyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/map/provinces', [ProvinceController::class, 'showProvinces']);
Route::get('/map/regencies', [RegencyController::class, 'showRegencies']);

Route::get('/map/beranda', function () {
    return view('map/beranda');
});

