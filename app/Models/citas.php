<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citas extends Model
{
    use HasFactory;
    protected $primaryKey = "idCita";
    protected $table = 'citas';
    public $timestamps = true;
    protected $casts = [
        'costo' => 'float'
    ];

    protected $fillable = [
        'idCita',
        'noFolio',
        'nombre',
        'descripcion',
        'tipoCita',
        'id_paciente',
        'id_medico',
        'fecha_cita',
        'horaCita',
        'horaFinCita',
        'duracion',
        'status',
        'costo',
        'activo',
    ];

    public function paciente()
    {
        return $this->hasOne(pacientes::class, "idPaciente", "id_paciente");
    }

    public function medico()
    {
        return $this->hasOne(medicos::class, "idMedicos", "id_medico");
    }


    /*  public static function filtrarcitas($id)
    {
        return DB::table('citas')->where('idCita', $id)->get();
    }*/

    public static function updateCita($id, $datos)
    {
        DB::table('citas')->where('idCita', $id)->update($datos);
        return 'ok';
    }
}