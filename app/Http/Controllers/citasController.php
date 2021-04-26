<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Models\citas;
use App\Models\medicos;
use App\Models\pacientes;
use Illuminate\Support\Facades\DB;

class citasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $texto = ($request->get('buscar'));
        $citas = citas::with('paciente', 'medico')->where('noFolio', 'LIKE', '%' . $texto . '%')
            ->orWhere('descripcion', 'LIKE', '%' . $texto . '%')
            ->orderBy('noFolio')
            ->paginate(5);

        $pacientesModal = pacientes::all();

        $medicosModal = medicos::all();

        return view('pages.administrador.citas', compact('citas', 'texto', 'medicosModal', 'pacientesModal'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function mostrarPaciente($idPacientes)
    {
        $citaPaciente = pacientes::findOrFail($idPacientes);
        return response()->json($citaPaciente);
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
        //obtenemos los datos de Ajax y lo asignamos en data..
        //la parte izquierda representa el nombre de ajax
        //parece que los valores se deben llamar igual que los atributos de la BD!!!
        $data = $request->validate([
            'noFolio' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'tipoCita' => 'required',
            'id_paciente' => 'required',
            'id_medico' => 'required',
            'fecha_cita' => 'required',
            'horaCita' => 'required',
            'horaFinCita' => 'required',
            'duracion' => 'required',
            'status' => 'required',
            'costo' => 'required',
            'activo' => 'required',
        ]);

        $citas = citas::create($data);
        return response()->json($citas);
    }

    public function editarCita(Request $request)
    {
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
        //Seleccionar la cita
        $cita = citas::with('paciente', 'medico')->findOrFail($id);
        return response()->json($cita);
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
        /* $modificarCita = citas::updateCita($id, $datos);
        return response()->json($modificarCita);*/
        $data = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'tipoCita' => 'required',
            'id_paciente' => 'required',
            'id_medico' => 'required',
            'fecha_cita' => 'required',
            'horaCita' => 'required',
            'horaFinCita' => 'required',
            'duracion' => 'required',
            'status' => 'required',
            'costo' => 'required',
            'activo' => 'required',
        ]);
        //$noFolio = $request["noFolio"];
        $citasmodificar = citas::find($id);
        $citasmodificar->update($data);
        $citasmodificar->save();
        return response()->json($citasmodificar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        citas::find($id)->delete();
        return json_encode(array('statusCode' => 200));
    }


    public function cancelarCita(Request $request, $id)
    {
        $data = $request->validate([
            'status' => 'required',
            'activo' => 'required',
        ]);
        $citasmodificar = citas::find($id);
        $citasmodificar->update($data);
        $citasmodificar->save();
        return response()->json($citasmodificar);
    }

    public function pendienteCita(Request $request, $id)
    {
        $data = $request->validate([
            'status' => 'required',
            'activo' => 'required',
        ]);
        $citasmodificar = citas::find($id);
        $citasmodificar->update($data);
        $citasmodificar->save();
        return response()->json($citasmodificar);
    }

    public function pagadaCita(Request $request, $id)
    {
        $data = $request->validate([
            'costo' => 'required',
        ]);
        $citasmodificar = citas::find($id);
        $citasmodificar->update($data);
        $citasmodificar->save();
        return response()->json($citasmodificar);
    }


    public function validarFolio(Request $request)
    {
        $data = $request->validate([
            'noFolio' => 'required',
        ]);

        if (citas::where('noFolio', $data)->count() > 0) {
            return "true";
        } else {
            return "false";
        }
    }
}