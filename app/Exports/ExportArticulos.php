<?php

namespace App\Exports;
use DB;
use App\Articulo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class ExportArticulos implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    }
    public function view(): View{
        $articulos = DB::select('SELECT * FROM articulo');
        return view('exports.articulos', ['articulos'=>$articulos]);
    }
}
