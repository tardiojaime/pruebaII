<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_v extends Model
{
    protected $table = 'detallev';

    protected  $primaryKey = 'id';

    public $timestamps  = false;

    protected $fillable = [
        'articulo',
        'venta',
        'cantidad',
        'precio'
    ];
}
