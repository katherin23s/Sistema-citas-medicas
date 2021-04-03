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

//Route::get('/', 'welcome');

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
    return view('pages.admin.dashboard');
});

Route::get('/citas', function () {
    return view('pages.admin.citas');
});

Route::get('/medicos', function () {
    return view('pages.admin.medicos');
});

Route::get('/pacientes', function () {
    return view('pages.admin.pacientes');
});

Route::get('/usuarios', function () {
    return view('pages.admin.usuarios');
});

Route::get('/configuracion', function () {
    return view('pages.admin.configuracion');
});

Route::get('/especializacion', function () {
    return view('pages.admin.especializacion');
});

Route::get('/consultorios', function () {
    return view('pages.admin.consultorios');
});

Route::get('/facturacion', function () {
    return view('pages.admin.facturacion');
});


Route::get('/calendario', function () {
    return view('pages.admin.calendario');
});


Route::get('/receta', function () {
    return view('pages.admin.receta');
});

Route::get('/basic-table', function () {
    return view('pages.tables.basic-table');
});

Route::get('/font-awesome', function () {
    return view('pages.icons.font-awesome');
});

Route::get('/login', function () {
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';