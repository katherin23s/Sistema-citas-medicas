<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Models\citas;

class citasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = citas::latest()->paginate(5);

        return view('pages.administrador.citas', compact('citas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

        //  return view('pages.administrador.citas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*  $data =  $request->validate([
            'noFolio' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'tipoCita' => 'required',
            'id_paciente' => 'required',
            'id_medico' => 'required',
            'fecha_cita' => 'required',
            'horaCita' => 'required',
            'duracion' => 'required',
            'status' => 'required',
            'costo' => 'required',
            'activo' => 'required',
        ]);*/
        $noFolio = $request["noFolio"];
        $nombre = $request["nombre"];
        $fechaCita = $request["fechaCita"];
        $horaCita = $request["horaCita"];
        $horaFinCita = $request["horaFinCita"];
        $descripcion = $request["descripcion"];
        $duracion = $request["duracion"];
        //  $tipoCita = $request["tipoCita"];
        $paciente = $request["paciente"];
        $medico = $request["medico"];



        $datos = array('noFolio' => $noFolio, 'nombre' => $nombre, 'fecha_cita' => $fechaCita, 'horaCita' => $horaCita, 'horaFinCita' => $horaFinCita, 'descripcion' => $descripcion, 'duracion' => $duracion, 'id_paciente' => $paciente, 'id_medico' => $medico);

        //crear citas
        $citas = citas::create($datos);
        //si esta vacio el id
        return response()->json($citas);
    }



    public function editarCita(Request $request)
    {
        /* $id = $request["id"];
        $fechaCita = $request["fechaCita"];
        $horaCita = $request["horaCita"];
        $duracion = $request["duracion"];
        $tipoCita = $request["tipoCita"];
        $noFolio = $request["noFolio"];
        $paciente = $request["paciente"];
        $medico = $request["medico"];
        $nombre = $request["nombre"];
        $descripcion = $request["descripcion"];

        $datos = array('id' => $id, 'fecha_cita' => $fechaCita, 'horaCita' => $horaCita, 'duracion' => $duracion, 'tipoCita' => $tipoCita, 'noFolio' => $noFolio, 'id_paciente' => $paciente, 'id_medico' => $medico, 'nombre' => $nombre, 'descripcion' => $descripcion);
        $modificarCita = citas::updateCita($id, $datos);
        return response()->json($modificarCita);*/

        /*  $modificarCita = citas::find($request->id);
        $modificarCita->fechaCita = $request->fechaCita;
        $modificarCita->horaCita = $request->horaCita;
        $modificarCita->duracion = $request->duracion;
        $modificarCita->tipoCita = $request->tipoCita;
        $modificarCita->noFolio = $request->noFolio;
        $modificarCita->paciente = $request->paciente;
        $modificarCita->medico = $request->medico;
        $modificarCita->nombre = $request->nombre;
        $modificarCita->descripcion = $request->descripcion;
        $modificarCita->save();
        return back()->with('cita_update', 'La cita ha sido  modificada exitosamente!');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  $id = $request["id"];
        //Seleccionar la cita
        //   $cita = citas::findOrFail($id);
        //  return response()->json($cita);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = $request["id"];
        $modificarCita = citas::find($request->id);
        $modificarCita->fechaCita = $request->fechaCita;
        $modificarCita->horaCita = $request->horaCita;
        $modificarCita->duracion = $request->duracion;
        $modificarCita->tipoCita = $request->tipoCita;
        $modificarCita->noFolio = $request->noFolio;
        $modificarCita->paciente = $request->paciente;
        $modificarCita->medico = $request->medico;
        $modificarCita->nombre = $request->nombre;
        $modificarCita->descripcion = $request->descripcion;
        $modificarCita->save();
        return back()->with('cita_update', 'La cita ha sido  modificada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}