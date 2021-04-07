<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citas extends Model
{
    use HasFactory;
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
}