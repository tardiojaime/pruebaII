<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = "proveedor";

    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'email',
        'direccion',
        'telefono',
        'status'
    ];

}
