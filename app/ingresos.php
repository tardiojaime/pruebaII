<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingresos extends Model
{
    protected $table = "ingreso";

    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable = [
        'precio',
        'fecha',
        'usuario',
        'proveedor'
    ];
}
