<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class citasClienteController extends Controller
{
    public function doctoresCitas()
    {
        $doctores = DB::table('medicos')->get();
        return view('ladingpage.ladingpage', compact('doctores'));
    }
    public function horasDisponiblesDia(Request $request, $id)
    {
        $fechaCita = $request->validate([
            'fechaCita' => 'required',
        ]);
        $horaEntrada = DB::table('horario')
            ->join('medicos', 'horario.idHorario', '=', 'medicos.id_horario')
            ->select('horario.horaEntrada')
            ->where('medicos.idMedicos', '=', $id)
            ->get();

        $horaSalida = DB::table('horario')
            ->join('medicos', 'horario.idHorario', '=', 'medicos.id_horario')
            ->select('horario.horaSalida')
            ->where('medicos.idMedicos', '=', $id)
            ->get();

        $horaEntrada2 = $horaEntrada->all();
        $horaSalida2 = $horaSalida->all();
        $citas = [];

        $citasFinalizadas = $this->horasDisponiblesMedico($horaEntrada2[0]->horaEntrada, $horaSalida2[0]->horaSalida, $fechaCita, $id);
        array_push($citas, $citasFinalizadas);
        return json_encode($citas);
    }


    private function horasDisponiblesMedico($horaEntrada, $horaSalida, $fechaCita, $id)
    {
        $horasMedico = DB::table('horas')
            ->whereTime('hora', '>=', $horaEntrada)
            ->whereTime('hora', '<=', $horaSalida)
            ->get();

        $horasOcupadas = DB::table('citas')
            ->select([DB::raw("horaCita")])
            ->whereRaw(
                '(fecha_cita = ? AND status = ? AND id_medico = ?)',
                [$fechaCita, 2, $id]
            )->get();



        $horasDisponibles = $horasMedico->all();
        for ($i = 0; $i <= count($horasOcupadas) - 1; $i++) {
            for ($x = 0; $x <= count($horasMedico) - 1; $x++) {
                if ($horasMedico[$x]->hora == $horasOcupadas[$i]->horaCita) {
                    unset($horasDisponibles[$x]);
                }
            }
        }
        return array_values($horasDisponibles);
    }
}