<?php

namespace App\Exports;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportIngresos implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    }
    public function view():View{
        $ingresos = DB::select('SELECT i.id, i.precio, i.fecha, SUM(d.cantidad) as productos, p.nombre, i.usuario FROM ingreso i INNER JOIN detallei d ON d.ingreso = i.id INNER JOIN proveedor p ON p.id = i.proveedor GROUP BY i.id, i.precio, i.fecha,  p.nombre, i.usuario, d.ingreso');
        return view('exports.ingresos', ['ingresos'=>$ingresos]);
    }
}
