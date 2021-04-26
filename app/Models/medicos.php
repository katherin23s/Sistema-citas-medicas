<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicos extends Model
{
    use HasFactory;

    protected $primaryKey = "idMedicos";
    protected $table = 'medicos';
    public $timestamps = true;

    protected $fillable = [
        'idMedicos',
        'cedula',
        'nombre',
        'apellido',
        'apellidoM',
        'direccion',
        'telefono',
        'edad',
        'email',
        'sexo',
        'fechaNacimiento',
        'registro',
        'id_especializacion',
        'id_consultorio',
        'id_horario',
        'status',
        'activo',
    ];

    public function citas()
    {
        return $this->hasMany(citas::class, "idCita", "idMedicos");
    }
}