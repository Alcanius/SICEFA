<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\TractorController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::resource('products', ProductController::class);
Route::resource('tipos_vehiculo', TipoVehiculoController::class);
Route::resource('tractores', TractorController::class);

