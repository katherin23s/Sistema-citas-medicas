<?php

namespace App\Http\Controllers;

use App\Classes\Confirmation;
use App\Http\Controllers\Controller;
use App\Models\citas;
use App\Models\pacientes;
use App\Models\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\DateConfirmation;


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


    public function guardarPaciente(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'apellidoM' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'registro' => 'required',
        ]);
        //Guardar persona 
        $citasPersona = pacientes::create($data);
        return response()->json($citasPersona);
    }

    public function guardarCitaHoraDisponible(Request $request)
    {
        //Guardar cita
        $data = $request->validate([
            'noFolio' => 'required',
            'id_paciente' => 'required',
            'id_medico' => 'required',
            'horaCita' => 'required',
            'fecha_cita' => 'required',
            'status' => 'required',
        ]);
        //Guardar persona 
        $citasHora = citas::create($data);
        return response()->json($citasHora);
    }

    public function citasCorreoConfirmacion(Request $request)
    {

        $data = $request->validate([
            'idCita' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'fecha' => 'required',
            'Hora' => 'required',
            'subject' => 'required',
            'msg' => 'required',
        ]);

        $email = $request->input('email');



        $confirmation = new Confirmation();
        $confirmation->idCita = $data['idCita'];
        $confirmation->nombre = $data['nombre'];
        $confirmation->apellido = $data['apellido'];
        $confirmation->email =  $data['email'];
        $confirmation->dia = $data['fecha'];
        $confirmation->hora =  $data['Hora'];
        $confirmation->subject =  $data['subject'];
        $confirmation->msg = $data['msg'];


        Mail::to($email)->send(new DateConfirmation($confirmation));
        if (Mail::failures()) {
            echo "Email not send";
        } else {
            echo "Email has been sent";
        }
    }

    public function confirmarCitas($idCita)
    {
        /*   $data = $request->validate([
            'idCita' => 'required',
        ]);*/

        /*$paciente = pacientes::findOrFail($id);
        pacientes::where('idPaciente', '=', $id)->update($datosPaciente);
        return view('pages.ventanas.EditarPaciente', compact('paciente'));*/

        DB::table('citas')
            ->where('idCita', $idCita)
            ->update(['status' => 3]);
        //  $doctores = DB::table('medicos')->get();
        return view('ladingpage.confirmacion');
    }
}