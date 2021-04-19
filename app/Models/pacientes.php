<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pacientes extends Model
{
    use HasFactory;
    protected $primaryKey = "idPaciente";
    protected $table = 'pacientes';
    public $timestamps = true;

    protected $fillable = [
        'idPaciente',
        'nombre',
        'apellido',
        'apellidoM',
        'direccion',
        'registro',
        'telefono',
        'edad',
        'email',
        'sexo',
        'fechaNacimiento',
        'status',
        'activo',
    ];
}