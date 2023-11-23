<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [PersonasController::class, 'home'])->name('profesional.home');
// Route::get('/create', [PersonasController::class, 'create'])->name('profesional.create');
// Route::post('/store', [PersonasController::class, 'store'])->name('profesional.store');
// Route::get('/edit/{id}', [PersonasController::class, 'edit'])->name('profesional.edit');
// Route::put('/update/{id}', [PersonasController::class, 'update'])->name('profesional.update');
// Route::get('/show/{id}', [PersonasController::class, 'show'])->name('show');
// Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('perofesional.destroy');


Route::get('/{any}', function(){
    return view('app');
})->where('any', '.*');;