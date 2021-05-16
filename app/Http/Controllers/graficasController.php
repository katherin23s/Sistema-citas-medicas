<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\citas;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        $citasProceso = citas::where('status', '=', 2)->count();
        //citas del dia
        $citasToday = citas::whereDate('fecha_cita', Carbon::today())->count();

        return view('pages.administrador.graficas', compact('citas', 'citasToday', 'citasPendientes', 'citasCanceladas', 'citasProceso'));
        // ->with('meses', json_encode($meses, JSON_NUMERIC_CHECK));
    }

    public function graficasCitas(Request $request)
    {
        $hoy = Carbon::now();
        $haceSeisMeses = Carbon::now()->subMonths(6);

        $citas = [];
        $citasCanceladas = $this->obtenerCitasFechaStatus($haceSeisMeses, $hoy, 0);
        $citasPendientes = $this->obtenerCitasFechaStatus($haceSeisMeses, $hoy, 1);
        $citasProceso = $this->obtenerCitasFechaStatus($haceSeisMeses, $hoy, 2);
        $citasFinalizadas = $this->obtenerCitasFechaStatus($haceSeisMeses, $hoy, 3);
        array_push($citas, $citasCanceladas, $citasProceso, $citasPendientes, $citasFinalizadas);
        return json_encode($citas);
    }

    private function obtenerCitasFechaStatus($fechaInicio, $fechaFinal, $status)
    {
        return DB::table('citas')
            ->select([DB::raw("DATE_FORMAT(fecha_cita, '%M-%Y') AS mes"), DB::raw('(COUNT(idCita)) as total_citas')])
            ->whereRaw(
                '(fecha_cita >= ? AND fecha_cita <= ? AND status = ?)',
                [$fechaInicio . ' 00:00:00', $fechaFinal . ' 23:59:59', $status]
            )
            ->orderBy('fecha_cita')
            ->groupBy(DB::raw("DATE_FORMAT(fecha_cita, '%M-%y')"))
            ->get();
    }



    function citasActuales()
    {
        $citasToday = citas::count(); //latest('created_at')->first();
        return response()->json($citasToday);
        //create($data);
    }


    public function graficaIngresos()
    {
        $hoy = Carbon::now();
        $haceCincoAnos = Carbon::now()->subYear(5); //subMonths(6);
        $citasAno = [];
        $citasIngresoAnual = $this->ingresos($haceCincoAnos, $hoy, 3);
        array_push($citasAno, $citasIngresoAnual);
        return json_encode($citasAno);
    }

    private function ingresos($anoInicio, $anoFinal, $status)
    {
        return DB::table('citas')
            ->select([DB::raw("DATE_FORMAT(fecha_cita, '%y') AS ano"), DB::raw('(COUNT(idCita)) as total_citas'), DB::raw('(costo as ingreso_total')])
            ->whereRaw(
                '(fecha_cita >= ? AND fecha_cita <= ? AND status = ?)',
                [$anoInicio . ' 00:00:00', $anoFinal . ' 23:59:59', $status]
            )
            ->orderBy('fecha_cita')
            ->groupBy(DB::raw("DATE_FORMAT(fecha_cita, '%y')"))
            ->get();
    }
}