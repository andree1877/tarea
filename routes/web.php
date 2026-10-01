<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosTecnicosController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('servicios', ServiciosTecnicosController::class);



