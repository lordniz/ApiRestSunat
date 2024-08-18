<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgenteRet extends Model
{
    use HasFactory;

    protected$table = 'agenteret';

    protected $fillable =[
        'ruc',
        'nombre_razon_social',
        'fecha_inicio',//ejemplo(01/10/2023)
        'resolucion_sunat'
    ];
}
