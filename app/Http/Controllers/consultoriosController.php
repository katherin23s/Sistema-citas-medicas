<?php

namespace App\Http\Controllers;

use App\Models\consultorios;
use Illuminate\Http\Request;

class consultoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $consultorios = consultorios::all();
        return view('pages.administrador.consultorios');
    }

    public function datableConsulta()
    {
        /*return datatables()
            ->eloquent(consultorios::query())
            ->toJson();*/
        return datatables()->eloquent(consultorios::query())->toJson();
    }


    public function consultoriosMedicos()
    {
        $consultorios = consultorios::all();
        return view('pages.administrador.medicos', compact('consultorios'));
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
            'noConsultorio' => 'required',
            'status' => 'required',
            'activo' => 'required'
        ]);
        $consultorio = consultorios::create($data);
        return response()->json($consultorio);
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
        $consultorio = consultorios::findOrFail($id);
        return response()->json($consultorio);
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
            'noConsultorio' => 'required',
            'status' => 'required',
            'activo' => 'required',

        ]);
        //$noFolio = $request["noFolio"];
        $consultoriosModificar = consultorios::find($id);
        $consultoriosModificar->update($data);
        $consultoriosModificar->save();
        return response()->json($consultoriosModificar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $eliminar = consultorios::find($id);
        $eliminar->delete();
        return json_encode(array('statusCode' => 200));
    }
}