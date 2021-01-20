<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Carbon;
use App\Ventas;
use App\Detalle_v;


class VentasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = DB::table('venta as v')
        ->select('v.id', 'v.precio','v.fecha','v.usuario')
        ->get();
        return view('ventas.index', ['venta'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulos = DB::table('articulo as a')
        ->select('a.id','a.nombre', 'a.precio', 'a.stock')
        ->where('a.status', '=', '1')
        ->get();
        return view('ventas.create', ['articulo'=>$articulos]);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $venta = new Ventas();
            $venta->precio = $request->get('totalv');
            $venta->fecha = Carbon::now('America/La_Paz')->toDateTimeString();
            $venta->usuario = $request->get('vendedor');

            $venta->save();
            
            $ids = $request->get('articulos');
            $cantidades = $request->get('cantidad');
            $precios = $request->get('preciov');
            $count = count($ids);
            $i = 0;

            while ($i < count($ids)) {
                $dtv = new Detalle_v();
                $dtv->articulo = $ids[$i];
                $dtv->venta = $venta->id;
                $dtv->cantidad = $cantidades[$i];
                $dtv->precio = $precios[$i];
                $dtv->save();
                $i++;
            }
            
            DB::commit();
            return response()->json(['sms'=>$count." Articulos Vendidos."]);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['sms'=>"Se Produjo un error."]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta = Ventas::findOrFail($id);
        $detalle = DB::table('detallev as dv')
        ->join('articulo as a', 'a.id', '=', 'dv.articulo')
        ->select('dv.id','dv.precio', 'dv.cantidad', 'a.nombre')
        ->where('dv.venta', '=', $id)
        ->get();
        return view('ventas.show', ['venta'=>$venta, 'detalle'=>$detalle]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {           
        try {
        DB::beginTransaction();
        $datos = DB::select('SELECT * FROM detallev d WHERE d.venta ='.$id);
        $numero = count($datos);
        if($numero != 0){
            foreach($datos as $info){
                $eliminar = Detalle_v::findOrFail($info->id);
                $eliminar->delete();
            }
        }
        $dato = Ventas::findOrFail($id);
        $dato->delete();
        DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
        }
    }
}