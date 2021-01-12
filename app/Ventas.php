<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table = "venta";

    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable = [
        'precio',
        'fecha',
        'usuario'
    ];

}
