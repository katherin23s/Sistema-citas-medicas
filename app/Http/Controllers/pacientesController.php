<?php

namespace App\Http\Controllers;

use App\Models\pacientes;
use Illuminate\Http\Request;

class pacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fechaRegistro = $request->input('FechaRegistro');
        $estado = $request->input('estado');


        if ($estado != "") {
            $pacientes = pacientes::where('activo', '=', $estado)
                ->where('registro', '=', $fechaRegistro)->get();
        } else {
            $pacientes = pacientes::where([
                ['nombre', '!=', Null],
                [function ($query) use ($request) {
                    if (($term = $request->term)) {
                        $query->orWhere('nombre', 'LIKE', '%' . $term . '%')
                            ->orWhere('apellido', 'LIKE', '%' . $term . '%')
                            ->orWhere('apellidoM', 'LIKE', '%' . $term . '%')
                            ->get();
                    }
                }]
            ])->orderBy("idPaciente", "desc")
                ->paginate(10);
        }




        return view('pages.administrador.pacientes', compact('pacientes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.ventanas.AltaPaciente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pacientes = request()->except('_token');
        pacientes::insert($pacientes);
        return response()->json($pacientes);
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
        $paciente = pacientes::findOrFail($id);
        return view('pages.ventanas.EditarPaciente', compact('paciente'));
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
        $datosPaciente = request()->except(['_token', '_method']);
        pacientes::where('idPaciente', '=', $id)->update($datosPaciente);
        $paciente = pacientes::findOrFail($id);
        return view('pages.ventanas.EditarPaciente', compact('paciente'));
        //  return redirect('pacientes', compact('paciente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPaciente)
    {
        pacientes::destroy($idPaciente);
        return redirect('pacientes');
    }

    public function encontrarPaciente($idPaciente)
    {
        //busca al paciente por ID
        $paciente = pacientes::findOrFail($idPaciente);
        //lo regresa como json
        return response()->json($paciente);
    }
}