<?php

namespace App\Http\Controllers;

use App\Models\consultorios;
use Illuminate\Http\Request;
use DataTables;

class consultoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $consultorios = consultorios::all();
        return view('pages.administrador.consultorios', compact('consultorios'));
    }

    public function datableConsulta(Request $request)
    {
        /*return datatables()
            ->eloquent(consultorios::query())
            ->toJson();*/
        //return datatables()->eloquent(consultorios::query())->toJson();
        if ($request->ajax()) {
            $data = consultorios::select('*');
            return datatables($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = ' <button id="' . $row->idConsultorio . '"
                    data-id="' . $row->idConsultorio . '" type="button"
                    class="btn btn-success" data-toggle="modal"
                    data-target="#modal-update-consultorio-' . $row->idConsultorio . '"
                    action="' . $row->idConsultorio . '">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-pencil"
                        viewBox="0 0 16 16">
                        <path
                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                    </svg>
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal"
                data-target="#modal-delete-consultorio-' . $row->idConsultorio . '">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-archive"
                    viewBox="0 0 16 16">
                    <path
                        d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('users');
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