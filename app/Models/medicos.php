<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicos extends Model
{
    use HasFactory;

    protected $primaryKey = "idMedico";
    protected $table = 'medicos';
    public $timestamps = true;

    protected $fillable = [
        'idMedico',
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
}