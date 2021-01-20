<?php

namespace App\Http\Controllers;
use App\ingresos;
use App\Detalle_i;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use DB;
class IngresosController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datos = DB::table('ingreso as i')
        ->join('users as u', 'u.id', '=','i.proveedor')
        ->select('i.id', 'i.precio','i.fecha', 'i.usuario', 'u.email')
        ->get();
        return view('ingresos.index', ['ingresos'=>$datos]);
    }

    public function create()
    {
        $proveedores = DB::table('proveedor as u')
        ->select('u.id', 'u.nombre')
        ->where('u.status', '=', '1')
        ->get();
        $articulos = DB::table('articulo as a')
        ->select('a.id','a.nombre')
        ->where('a.status', '=', '1')
        ->get();
        return view('ingresos.create', ['proveedores'=>$proveedores, 'articulos'=>$articulos]);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $ingreso = new ingresos();
            $ingreso->precio = $request->get('totalv');
            $ingreso->fecha = Carbon::now('America/La_Paz')->toDateTimeString();
            $ingreso->usuario = $request->get('usuario');
            $ingreso->proveedor = $request->get('proveedor');
            $ingreso->save();
            
            $ids = $request->get('articulos');
            $cantidades = $request->get('cantidad');
            $precios = $request->get('precioi');
            $numero = count($ids);
            $i = 0;

            while ($i < count($ids)) {
                $detalle = new Detalle_i();
                $detalle->articulo = $ids[$i];
                $detalle->ingreso = $ingreso->id;
                $detalle->precio = $precios[$i];
                $detalle->cantidad = $cantidades[$i];
                $detalle->save();
                $i++;
            }
            
            DB::commit();
            return response()->json(['sms'=>$numero." Articulos Adquiridos."]);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['sms'=>"Error al guardar."]);
        }
    }

    public function show($id)
    {
        $ingreso = DB::table('ingreso as i')
        ->join('proveedor as p', 'p.id', '=', 'i.proveedor')
        ->select('i.precio', 'i.fecha', 'i.usuario', 'p.nombre')
        ->where('i.id', '=', $id)
        ->first();
        $detalle = DB::table('detallei as di')
        ->join('articulo as a', 'a.id', '=', 'di.articulo')
        ->select('di.id','di.precio', 'di.cantidad', 'a.nombre')
        ->where('di.ingreso', '=', $id)
        ->get();
        return view('ingresos.show', ['ingreso'=>$ingreso, 'detalle'=>$detalle]);

    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $datos = DB::select('SELECT * FROM detallei d WHERE d.ingreso ='.$id);
            $numero = count($datos);
            if($numero != 0){
                foreach($datos as $info){
                    $eliminar = Detalle_i::findOrFail($info->id);
                    $eliminar->delete();
                }
            }
            $dato = Ingresos::findOrFail($id);
            $dato->delete();
            DB::commit();
            } catch (\Throwable $th) {
                DB::rollback();
            }
    }
}
