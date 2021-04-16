<?php

use App\Http\Controllers\citasController;
use App\Http\Controllers\consultoriosController;
use App\Http\Controllers\especializacionController;
use App\Http\Controllers\medicosController;
use App\Http\Controllers\pacientesController;
use App\Http\Controllers\usuariosController;

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

//Route::get('/', 'welcome');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ladingpage', function () {
    return view('ladingpage.ladingpage');
});

Route::get('/indexDashboard', function () {
    return view('indexDashboard');
});

Route::get('/buttons', function () {
    return view('pages.ui-features.buttons');
});

Route::get('/dropdowns', function () {
    return view('pages.ui-features.dropdowns');
});

Route::get('/typography', function () {
    return view('pages.ui-features.typography');
});

Route::get('/basic_elements', function () {
    return view('pages.forms.basic_elements');
});

Route::get('/chartjs', function () {
    return view('pages.charts.chartjs');
});

Route::get('/graficas', function () {
    return view('pages.graficas');
});

Route::get('/main', function () {
    return view('pages.administrador.dashboard');
});

/*Route::get('citas', function () {
    return view('pages.administrador.citas');
});*/

/*Route::get('citas', [citasController::class, 'index']);*/

Route::post('citas', [citasController::class, 'editarCita']);
Route::resources(['citas' => citasController::class]);
Route::resources(['medicos' => medicosController::class]);


Route::get('/pacientes', function () {
    return view('pages.administrador.pacientes');
});

Route::get('/usuarios', function () {
    return view('pages.administrador.usuarios');
});

Route::get('/configuracion', function () {
    return view('pages.administrador.configuracion');
});

Route::get('/especializacion', function () {
    return view('pages.administrador.especializacion');
});

Route::get('/consultorios', function () {
    return view('pages.administrador.consultorios');
});

Route::get('/facturacion', function () {
    return view('pages.administrador.facturacion');
});


Route::get('/calendario', function () {
    return view('pages.administrador.calendario');
});


Route::get('/receta', function () {
    return view('pages.administrador.receta');
});

Route::get('/basic-table', function () {
    return view('pages.tables.basic-table');
});

Route::get('/font-awesome', function () {
    return view('pages.icons.font-awesome');
});

Route::get('/login1', function () {
    return view('pages.samples.login');
});

Route::get('/register', function () {
    return view('pages.samples.register');
});

Route::get('/error-404', function () {
    return view('pages.samples.error-404');
});

Route::get('/error-500', function () {
    return view('pages.samples.error-500');
});