<?php

namespace App\Http\Controllers;

use Response;
use App\Models\medicos;
use Illuminate\Http\Request;

class medicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = medicos::paginate(6);
        return view('pages.administrador.medicos')->with(compact('medicos'));
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
        $data = $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'apellidoM' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'edad' => 'required',
            'email' => 'required',
            'sexo' => 'required',
            'fechaNacimiento' => 'required',
            'registro' => 'required',
            'id_especializacion' => 'required',
            'id_consultorio' => 'required',
            'id_horario' => 'required',
            'status' => 'required',
            'activo' => 'required',
        ]);
        $medicos = medicos::create($data);
        return response()->json($medicos);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicos = medicos::findOrFail($id);
        return response()->json($medicos);
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
        $data = $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'apellidoM' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'edad' => 'required',
            'email' => 'required',
            'sexo' => 'required',
            'fechaNacimiento' => 'required',
            'registro' => 'required',
            'id_especializacion' => 'required',
            'id_consultorio' => 'required',
            'id_horario' => 'required',
            'status' => 'required',
            'activo' => 'required',
        ]);
        //$noFolio = $request["noFolio"];
        $medicosModificar = medicos::find($id);
        $medicosModificar->update($data);
        $medicosModificar->save();
        return response()->json($medicosModificar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idMedicos)
    {
        // return $medico;
        /*  medicos::find($idMedicos)->delete();*/
        $eliminar = medicos::find($idMedicos);
        $eliminar->delete();
        return json_encode(array('statusCode' => 200));
    }
}