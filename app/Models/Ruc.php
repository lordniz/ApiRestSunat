<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruc extends Model
{
    use HasFactory;
    
    protected$table = 'ruc';

    protected $primaryKey = 'ruc';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable =[
        'ruc',
        'ubigeo',
        'tipo_via',
        'nombre_via',
        'codigo_zona',
        'tipo_zona',
        'numero',
        'kilometro',
        'interior',
        'lote',
        'departamento',
        'manzana'
    ];

}
