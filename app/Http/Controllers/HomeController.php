<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        /* $this->middleware('auth'); */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hoy = date("Y-m-d"); 
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
        $datos = DB::table('venta as v')
        ->whereBetween('v.fecha', [$modificado,$hoy])->get();
        /* return $datos;  */
        return view('main/index');
    }
    
}
