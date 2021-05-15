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



        //Grafica citas finalizadas y canceladas por mes
        // $graficaCancelada = citas::where('status', '=', 4)
        //  ->where('created_at', '<=', Carbon::now()->subMonth(6))->count();
        //  $meses = Carbon::now()->startOfMonth()->subMonth(6);
        //Graficas ingreso total por año

        //Los tres tipos de citas en todos los registros

        //Las ultimas 5 citas

        // $meses = ['Jan', 'Feb', 'March', 'Apr', 'May', 'Jun'];
        // $meses = array(1 => 'Jan.', 2 => 'Feb.', 3 => 'Mar.', 4 => 'Apr.', 5 => 'May', 6 => 'Jun.', 7 => 'Jul.', 8 => 'Aug.', 9 => 'Sep.', 10 => 'Oct.', 11 => 'Nov.', 12 => 'Dec.');

        // $meses = Carbon::now()->startOfMonth()->subMonth(6);
        // $mes = [];
        // foreach ($meses as $mes) {
        //  }
        // $cita = [];
        /*    foreach ($meses as $key => $value) {
            $citasmes[] = citas::where('created_at', '<=', Carbon::now()->subMonth(6))->count();
            //where(\DB::raw("DATE_FORMAT(created_at, '%Y')"), $value)->count();
        }*/

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


    /*  public function graficasCitasFinalizadasCanceladas()
    {
        $month = ['2015', '2016', '2017', '2018', '2019', '2020', '2021'];

        $citas = [];
        foreach ($month as $key => $value) {
            $citas[] = citas::where(DB::raw("DATE_FORMAT(fecha_cita, '%Y')"), $value)
                ->where('status', '=', 3)->count();
        }
        return response()->json([$month, $citas]);
    }
*/
}