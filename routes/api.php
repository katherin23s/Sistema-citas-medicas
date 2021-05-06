<?php

use App\Http\Controllers\medicosController;
use App\Http\Controllers\pacientesController;
use App\Http\Controllers\especializacionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('pacientes/{id}', [pacientesController::class, 'encontrarPaciente']);
Route::get('medicos/{id}', [medicosController::class, 'encontrarMedico']);
Route::get('api/v1/cities/search', [medicosController::class, 'search'])->name('api.cities.search');
//Route::get('buscar/especializacion/auto', [especializacionController::class, 'buscarEspecializacion']);