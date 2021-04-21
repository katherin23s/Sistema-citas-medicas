<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facturacion extends Model
{
    use HasFactory;

    protected $primaryKey = "idFacturacion";
    protected $table = 'facturacion';
    public $timestamps = true;

    protected $fillable = [
        'idFacturacion',
        'clave',
        'fecha_factura',
        'id_cita',
        'cantidad',
        'iva',
        'importe',
        'total'
    ];
}