<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\citasController;
use App\Http\Controllers\consultoriosController;
use App\Http\Controllers\especializacionController;
use App\Http\Controllers\medicosController;
use App\Http\Controllers\pacientesController;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\facturacionController;
use App\Http\Controllers\graficasController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\citasClienteController;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Support\Facades\Route;
use App\Mail\ConfirmationDate;
use Illuminate\Support\Facades\Mail;
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

Route::get('/dashboard', function () {
    return view('indexDashboard');
})->middleware(['auth', 'is_admin'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('welcome');
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
/*
Route::get('/graficas', function () {
    return view('pages.administrador.graficas');
});*/



/*Route::get('citas', function () {
    return view('pages.administrador.citas');
});*/


Route::get('/usuario', [LoginController::class, 'redirectTo']);
Route::get('/admin', [LoginController::class, 'redirectTo']);

Route::get('buscar-usuarios-auto', [usuariosController::class, 'userSearch']);
Route::get('validar-duplicacion-medicos', [medicosController::class, 'validarCedula']);
Route::get('medicos/especializaciones', [especializacionController::class, 'especializacionMedicos']);
Route::get('medicos/consultorios', [consultoriosController::class, 'consultoriosMedicos']);

Route::get('busqueda/usuarios', [usuariosController::class, 'buscarUsuarios'])->name('busqueda.usuarios');
Route::get('busqueda/medicos', [medicosController::class, 'busquedaMedicosTabla'])->name('busqueda.medicos.tabla');
Route::get('search/medicos', [medicosController::class, 'buscarMedicos'])->name('search.medicos');
Route::get('searchs/', [citasController::class, 'index']);
//Route::get('citas/', [citasController::class, 'searchDate'])->name('citas');
Route::get('validar-duplicacion', [citasController::class, 'validarFolio']);
Route::patch('cita-pagada/{id}', [citasController::class, 'pagadaCita']);
Route::patch('citas-pendiente/{id}', [citasController::class, 'pendienteCita']);
Route::patch('citas-cancelar/{id}', [citasController::class, 'cancelarCita']);
Route::resources(['citas' => citasController::class]);
Route::resources(['medicos' => medicosController::class]);
Route::resources(['pacientes' => pacientesController::class]);
Route::resources(['usuarios' => usuariosController::class]);
Route::get('consultorios-registros', [consultoriosController::class, 'datableConsulta']);
Route::resources(['consultorios' => consultoriosController::class]);

Route::get('buscar/especializacion/auto', [especializacionController::class, 'buscarEspecializacion']);
Route::resources(['especializacion' => especializacionController::class]);
Route::resources(['facturacion' => facturacionController::class]);
//Route::get(['graficas' => graficasController::class]);

//Citas de hoy
Route::get('graficas', [graficasController::class, 'index']);
//Citas pendiente
Route::get('citas-pendientes', [graficasController::class, 'citasPendientes']);
//Citas en proceso
Route::get('citas-proceso', [graficasController::class, 'citasProceso']);
//Citas Finalizadas
Route::get('graficas-citas', [graficasController::class, 'graficasCitas'])->name('graficas.citas');
Route::get('graficas-finalizadas-canceladas', [graficasController::class, 'graficasCitasFinalizadasCanceladas'])->name('graficas.finalizadas.canceladas');
Route::get('grafica-ingresos', [graficasController::class, 'graficaIngresos'])->name('graficas.ingresos');
Route::get('grafica-pcf', [graficasController::class, 'graficacitasPCFG'])->name('graficas.pcf');
Route::get('tabla-ultimas-citas', [graficasController::class, 'tablaUltimasCitas'])->name('graficas.ultimas.citas');
Route::post('contact-mail', [mailController::class, 'contactmail'])->name('contact.mail');

Route::get('send-email', function () {
    Mail::to('katherin.serna.m@gmail.com')->send(new ConfirmationDate);
    if (Mail::failures()) {
        echo "Email not send";
    } else {
        echo "Email has been sent";
    }
});
Route::get('/calendario', function () {
    return view('pages.administrador.calendario');
});

Route::get('horas-disponibles-fecha/{id}', [citasClienteController::class, 'horasDisponiblesDia'])->name('horas.disponibles.fecha');
Route::get('ladingpage', [citasClienteController::class, 'doctoresCitas'])->name('doctores.citas');
Route::get('guardar-cita-hora-disponible', [citasClienteController::class, 'guardarCitaHoraDisponible'])->name('guardar.cita.hora.disponible');


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

/*Route::get('/register', function () {
    return view('pages.samples.register');
});*/

Route::get('/error-404', function () {
    return view('pages.samples.error-404');
});

Route::get('/error-500', function () {
    return view('pages.samples.error-500');
});