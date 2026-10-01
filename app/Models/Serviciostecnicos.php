<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class ServiciosTecnicos extends Model  
{
    use HasFactory;

    protected $table = 'servicioslocal';

    protected $fillable = [
        'cliente',
        'telefono',
        'tipo_dispositivo',
        'cantidad',
        'servicio',
        'precio',
        'estado',
    ];
}