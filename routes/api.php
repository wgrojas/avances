<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\HistorialController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//De esta forma SOLO nos genera las rutas de los metodos que estan en el only
Route::resource('profesional',ProfesionalController::class)->only('index','store','show','update','destroy');

Route::resource('historial',HistorialController::class)->only('index','store','show','update','destroy');



//De esta forma nos genera todas las rutas
// Route::resource('profesional',App\Http\Controllers\ProfesionalController::class);