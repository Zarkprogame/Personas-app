<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DepartamentoController;
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
Route::put('/municipios/{municipio}', [MunicipalityController::class, 'update'])->name('municipios.update');
Route::get('/municipios/{municipio}/edit', [MunicipalityController::class, 'edit'])->name('municipios.edit');

Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos.index');
Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos/create', [DepartamentoController::class, 'create'])->name('departamentos.create');
Route::delete('/departamentos/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamentos.destroy');
Route::put('/departamentos/{departamento}', [DepartamentoController::class, 'update'])->name('departamentos.update');
Route::get('/departamentos/{departamento}/edit', [DepartamentoController::class, 'edit'])->name('departamentos.edit');

Route::get('/paises', [CountryController::class, 'index'])->name('paises.index');
Route::post('/paises', [CountryController::class, 'store'])->name('paises.store');
Route::get('/paises/create', [CountryController::class, 'create'])->name('paises.create');
Route::delete('/paises/{pais}', [CountryController::class, 'destroy'])->name('paises.destroy');
Route::put('/paises/{pais}', [CountryController::class, 'update'])->name('paises.update');
Route::get('/paises/{pais}/edit', [CountryController::class, 'edit'])->name('paises.edit');