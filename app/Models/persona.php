<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $primaryKey = "idPersona";
    protected $table = 'persona';
    public $timestamps = true;

    protected $fillable = [
        'idPersona',
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