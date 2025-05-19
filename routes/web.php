<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('departamentos', DepartamentoController::class);
Route::resource('empleados', EmpleadoController::class);
