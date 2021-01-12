<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_i extends Model
{
    protected $table = "detallei";

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    protected $fillable = [
        'articulo',
        'ingreso',
        'precio',
        'cantidad'
    ];
}
