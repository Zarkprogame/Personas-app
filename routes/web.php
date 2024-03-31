<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\MunicipalityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas.index');
Route::post('/comunas', [ComunaController::class, 'store'])->name('comunas.store');
Route::get('/comunas/create', [ComunaController::class, 'create'])->name('comunas.create');
Route::delete('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit', [ComunaController::class, 'edit'])->name('comunas.edit');

Route::get('/municipios', [MunicipalityController::class, 'index'])->name('municipios.index');
Route::post('/municipios', [MunicipalityController::class, 'store'])->name('municipios.store');
Route::get('/municipios/create', [MunicipalityController::class, 'create'])->name('municipios.create');
Route::delete('/municipios/{municipio}', [MunicipalityController::class, 'destroy'])->name('municipios.destroy');

