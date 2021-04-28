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
    public function index(Request $request)
    {
        $texto = ($request->get('buscar'));
        $medicos = medicos::where('cedula', 'LIKE', '%' . $texto . '%')
            ->orWhere('nombre', 'LIKE', '%' . $texto . '%')
            ->orderBy('cedula')
            ->paginate(5);

        return view('pages.administrador.medicos', compact('medicos', 'texto'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

        //  $medicos = medicos::paginate(6);
        //  return view('pages.administrador.medicos')->with(compact('medicos'));
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
        $eliminar = medicos::find($idMedicos);
        $eliminar->delete();
        return json_encode(array('statusCode' => 200));
    }


    public function encontrarMedico($idMedico)
    {
        //busca al paciente por ID
        $medico = medicos::findOrFail($idMedico);
        //lo regresa como json
        return response()->json($medico);
    }

    public function buscarMedicos(Request $request)
    {
        $term = $request->get('term');
        $querys = medicos::where('nombre', 'LIKE', '%' . $term)->get();
        $data = [];
        foreach ($querys as $query) {
            #code ...
            $data[] = [
                'label' => $query->nombre
            ];
            return $data;
        }

        //return $term;
    }
}