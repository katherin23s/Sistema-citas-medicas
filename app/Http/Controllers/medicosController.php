<?php

namespace App\Http\Controllers;

use App\Models\consultorios;
use App\Models\especializacion;
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
        $medicos = medicos::all();

        $especializaciones = especializacion::all();
        $consultorios = consultorios::all();
        return view('pages.administrador.medicos', compact('medicos', 'texto', 'especializaciones', 'consultorios'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
            'direccion' => 'nullable',
            'telefono' => 'required',
            'edad' => 'nullable',
            'email' => 'required',
            'sexo' => 'required',
            'fechaNacimiento' => 'nullable',
            'registro' => 'required',
            'id_especializacion' => 'nullable',
            'id_consultorio' => 'nullable',
            'id_horario' => 'nullable',
            'status' => 'nullable',
            'activo' => 'nullable',
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
            'direccion' => 'nullable',
            'telefono' => 'required',
            'edad' => 'nullable',
            'email' => 'required',
            'sexo' => 'required',
            'fechaNacimiento' => 'nullable',
            'registro' => 'required',
            'id_especializacion' => 'nullable',
            'id_consultorio' => 'nullable',
            'id_horario' => 'nullable',
            'status' => 'nullable',
            'activo' => 'nullable',
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
        $querys = medicos::where('apellido', 'LIKE', '%' . $term)->get();
        $data = [];
        foreach ($querys as $query) {
            #code ...
            $data[] = [
                'label' => $query->nombre
            ];
            return $data;
        }
    }


    public function busquedaMedicosTabla(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = medicos::where('cedula', 'like', '%' . $query . '%')
                    ->orWhere('nombre', 'like', '%' . $query . '%')
                    ->orWhere('apellido', 'like', '%' . $query . '%')
                    ->orWhere('apellidoM', 'like', '%' . $query . '%')
                    ->orWhere('direccion', 'like', '%' . $query . '%')
                    ->orWhere('registro', 'like', '%' . $query . '%')
                    ->get();
            } else {
                $data = medicos::all();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '
            <tr>
            <td>' . $row->cedula . '</td>
             <td>' . $row->nombre . '</td>
             <td>' . $row->apellido . '</td>
             <td>' . $row->apellidoM . '</td>
             <td>' . $row->direccion . '</td>
             <td>' . $row->telefono . '</td>
             <td>' . $row->edad . '</td>
             <td>' . $row->email . '</td>
             <td>' . $row->registro . '</td>
             <td>' . $row->id_especializacion . '</td>
             <td>' . $row->id_consultorio . '</td>
             <td>' . $row->id_horario . '</td>
             <td>
             <button id="' . $row->idMedicos . '" data-id="' . $row->idMedicos . '" onclick="goDoSomething(this);" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-update-' . $row->idMedicos . '" action="' . $row->idMedicos . '">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                 <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
               </svg>
             </button>

             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-' . $row->idMedicos . '">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                     <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                   </svg>    
             </button></td> 
            </tr>
            ';
                }
            } else {
                $output = '
           <tr>
            <td align="center" colspan="5">No Data Found</td>
           </tr>
           ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }
}