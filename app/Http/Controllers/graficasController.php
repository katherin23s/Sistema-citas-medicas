<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\citas;
use Carbon\Carbon;

class graficasController extends Controller
{
    public function index(Request $request)
    {
        $citas = citas::all();
        //citas pendientes
        $citasPendientes = citas::where('status', '=', 1)->count();
        //citas canceladas
        $citasCanceladas = citas::where('status', '=', 0)->count();
        //citas proceso
        $citasProceso = citas::where('status', '=', 3)->count();
        //citas del dia
        $citasToday = citas::whereDate('fecha_cita', Carbon::today())->count();

        return view('pages.administrador.graficas', compact('citas', 'citasToday', 'citasPendientes', 'citasCanceladas', 'citasProceso'));
    }

    function citasActuales()
    {
        $citasToday = citas::count(); //latest('created_at')->first();
        return response()->json($citasToday);
        //create($data);
    }
}