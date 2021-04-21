<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultorios extends Model
{
    use HasFactory;

    protected $primaryKey = "idConsultorio";
    protected $table = 'consultorios';
    public $timestamps = true;

    protected $fillable = [
        'idConsultorio',
        'noConsultorio',
        'status',
        'activo'
    ];
}