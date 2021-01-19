<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Carbon;
use App\Proveedor;

class ProveedorController extends Controller
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
        $user = DB::table('proveedor as u')
        ->select('u.id','u.nombre', 'u.email', 'u.direccion','u.telefono', 'u.usuario')
        ->where('u.status','=', '1')
        ->get();
        return view('proveedor.index', ['proveedor'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $pro = new Proveedor();
            $pro->nombre = $request->get('nombre');
            $pro->email = $request->get('email');
            $pro->telefono = $request->get('telefono');
            $pro->direccion = $request->get('direccion');
            $pro->status = "1";
            $pro->fecha = Carbon::now('America/La_Paz')->toDateTimeString();
            $pro->usuario = $request->get('usuario');
            $pro->save();
            return response()->json(['sms'=>"Proveedor agregado."]);
        } catch (\Throwable $th) {
            return response()->json(['sms'=>"Error al guardar."]);
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
        $prove = Proveedor::findOrFail($id);
        return view('proveedor.show', ['proveedor'=>$prove]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prove = Proveedor::findOrFail($id);
        return view('proveedor.edit', ['proveedor'=>$prove]);
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
        try {
            $pro = Proveedor::findOrFail($id);
            $pro->nombre = $request->get('nombre');
            $pro->email = $request->get('email');
            $pro->telefono = $request->get('telefono');
            $pro->direccion = $request->get('direccion');
            $pro->status = "1";
            $pro->update();
            return response()->json(['sms'=>"Proveedor Actualizado."]);
        } catch (\Throwable $th) {
            return response()->json(['sms'=>"Error al actualizar."]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prove = Proveedor::findOrFail($id);
        $prove->status = "0";
        $prove->update();
        return response()->json(['sms'=>"Proveedor Suspendido"]);
    }
}
