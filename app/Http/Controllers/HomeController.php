<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromView;
use Barryvdh\DomPDF\Facade;
use Illuminate\Http\Request;
use App\Exports\ExportArticulos;
use App\Exports\ExportIngresos;
use App\Exports\ExportProveedores;
use App\Exports\ExportUsers;
use App\Exports\ExportVentas;
use Barryvdh\DomPDF\Facade as PDF;


use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fecha = getdate();
        $ano = $fecha['year'];
        $dia = $fecha['mday'];
        $mes = $fecha["mon"];
        if($mes != 1){
            $mes = $mes - 1;
        }else{
            $mes = 12;
            $ano = $ano-1;
        }
        $modificado = $ano."-".$mes."-".$dia;
        $ventas = DB::select('SELECT sum(d.cantidad) as cantidad, date(v.fecha) as fecha from venta v INNER JOIN detallev d ON d.venta=v.id WHERE v.fecha BETWEEN '.$modificado.' AND date(now()) GROUP BY date(v.fecha) ORDER BY v.fecha DESC LIMIT 5');
        $articulos = DB::select('SELECT a.nombre, sum(d.cantidad) as cantidad, a.cantidad as disponibles  FROM articulo a INNER JOIN detallev d ON a.id = d.articulo  GROUP BY a.id, a.nombre, a.cantidad ORDER BY sum(d.cantidad) DESC LIMIT 5');
        return view('main/index', ['ventas'=>$ventas, 'Article'=>$articulos]);
    }
    public function estadistica(){
        $estadis = DB::table('estadistica as s')->get();
        $articulos = DB::table('articulo as a')->where('a.status', '=', '1')->count();
        $vendedor = DB::select('SELECT v.usuario, count(v.usuario) as vendidos FROM venta v GROUP BY (v.usuario) ORDER BY COUNT(v.usuario) DESC LIMIT 1');
        return view('estadistica.index', ['datos'=>$estadis, 'articulos'=>$articulos, 'vendedor'=>$vendedor]);
    }

    public function ExcelExport($datos){ 
        
        switch ($datos){
            case "articulos":
                return Excel::download(new ExportArticulos, 'articulos.xlsx');                
            break;
            case "ventas":
                return Excel::download(new ExportVentas, 'ventas.xlsx');
            break;
            case "ingresos":
                return Excel::download(new Exportingresos, 'ingresos.xlsx');
            break;
            case "proveedores":
                return Excel::download(new ExportProveedores, 'Proveedores.xlsx');
            break;
            case "usuarios":
                return Excel::download(new ExportUsers, 'usuarios.xlsx');
            break;
        }
    }
    public function PdfVentas($id){  
        try {
            $venta = DB::select('SELECT * FROM venta WHERE id = '.$id);
            $detalle = DB::select('SELECT d.id, a.nombre, d.cantidad, d.precio FROM detallev d INNER JOIN articulo a ON a.id = d.articulo WHERE d.venta ='.$id);
            $pdf = PDF::loadView('exports.pdfventa',[
            'venta' => $venta, 'detalle'=>$detalle]);
            return $pdf->stream('venta.pdf');
        } catch (\Throwable $th) {
            return Redirect('home');
        } 
    }
    public function PdfIngresos($id){
        try {
            $ingreso = DB::select('SELECT i.id, i.precio, i.fecha, p.nombre, p.email, i.usuario  FROM ingreso i INNER JOIN proveedor p ON p.id = i.proveedor WHERE i.id = '.$id);
            $detalle = DB::select('SELECT d.id, a.nombre, d.cantidad, d.precio FROM detallei d INNER JOIN articulo a ON a.id = d.articulo WHERE d.ingreso ='.$id);
            $pdf = PDF::loadView('exports.pdfingreso',[
            'ingreso' => $ingreso, 'detalle'=>$detalle]);
            return $pdf->stream('ingreso.pdf');
        } catch (\Throwable $th) {
            return Redirect('home');
        }   
        }
}