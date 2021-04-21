<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class especializacion extends Model
{
    use HasFactory;

    protected $primaryKey = "idEspecializacion";
    protected $table = 'especializacion';
    public $timestamps = true;

    protected $fillable = [
        'idEspecializacion',
        'nombreEspecializacion',
        'descripcion',
        'activo'
    ];
}