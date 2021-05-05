<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = ($request->get('buscar'));
        $usuarios = User::where('id', 'LIKE', '%' . $texto . '%')
            ->orWhere('name', 'LIKE', '%' . $texto . '%')
            ->orderBy('id')
            ->paginate(5);

        return view('pages.administrador.usuarios', compact('usuarios', 'texto'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.ventanas.AltaUsuarios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = request()->except('_token');
        User::insert($usuarios);
        return response()->json($usuarios);
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
        $usuario = User::findOrFail($id);
        return view('pages.ventanas.EditarUsuarios', compact('usuario'));
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
        $datosUsuario = request()->except(['_token', '_method']);
        User::where('id', '=', $id)->update($datosUsuario);
        $usuario = User::findOrFail($id);
        return view('pages.ventanas.EditarUsuarios', compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('usuarios');
    }


    public function buscarUsuarios(Request $request)
    {
        $term = $request->get('term');
        $querys = User::where('name', 'LIKE', '%' . $term)->get();
        $data = [];
        foreach ($querys as $query) {
            #code ...
            $data[] = [
                'label' => $query->name
            ];
            return $data;
        }



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
                    ->orderBy('cedula', 'desc')
                    ->get();
            } else {
                $data = medicos::orderBy('nombre', 'desc')
                    ->get();
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

    public function userSearch(Request $request)
    {
        $usuarios = [];

        if ($request->has('q')) {
            $search = $request->q;
            $usuarios = user::select("id", "name", "apellido", "apellidoM")
                ->where('name', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($usuarios);
    }
}