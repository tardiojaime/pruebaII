<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;

class ExportVentas implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    }
    public function view():View
    {
        $datos = DB::select('SELECT v.id, v.precio, v.fecha, SUM(d.cantidad) as vendidos, v.usuario FROM venta v INNER JOIN detallev d ON d.venta = v.id GROUP BY v.id, v.precio, v.fecha, v.usuario, d.venta');
        return view('exports.ventas', ['ventas'=>$datos]);
    }
}
