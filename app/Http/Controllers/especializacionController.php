<?php

namespace App\Http\Controllers;

use App\Models\especializacion;
use Illuminate\Http\Request;

class especializacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $especializaciones = especializacion::all();
        return view('pages.administrador.especializacion', compact('especializaciones'));
    }

    public function especializacionMedicos()
    {
        $especializaciones = especializacion::all();
        return view('pages.administrador.medicos', compact('especializaciones'));
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
            'nombreEspecializacion' => 'required',
            'descripcion' => 'required',
            'activo' => 'required'
        ]);
        $especializacion = especializacion::create($data);
        return response()->json($especializacion);
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
        //
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
            'nombreEspecializacion' => 'required',
            'descripcion' => 'required',
            'activo' => 'required'

        ]);
        //$noFolio = $request["noFolio"];
        $especializacionModificar = especializacion::find($id);
        $especializacionModificar->update($data);
        $especializacionModificar->save();
        return response()->json($especializacionModificar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar = especializacion::find($id);
        $eliminar->delete();
        return redirect('especializacion');
    }

    public function buscarEspecializacion(Request $request)
    {
        $especializacion = [];

        if ($request->has('q')) {
            $search = $request->q;
            $especializacion = especializacion::select("idEspecializacion", "nombreEspecializacion")
                ->where('nombreEspecializacion', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($especializacion);
    }
}