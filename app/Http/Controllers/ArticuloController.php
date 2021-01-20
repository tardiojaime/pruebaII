<?php

namespace App\Http\Controllers;
use DB;
use App\Articulo;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class ArticuloController extends Controller
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
        $db = DB::table('articulo as a')
        ->where('a.status', "=", '1')
        ->get();
        return view('articulo.index', ['articulos'=>$db]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $art = new Articulo();
        $art->nombre = $request->get('nombre');
        $art->descripcion = $request->get('descripcion');
        $art->precio = $request->get('precio');
        $art->stock = 0;
        $art->usuario = $request->get('usuario');
        $art->fecha = Carbon::now('America/La_Paz')->toDateTimeString();
        $art->status = "1";
        $art->save();
        return response()->json(["sms"=>$art->nombre]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos = Articulo::findOrFail($id);
        return view("articulo.show", ['datos'=>$datos]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = Articulo::findOrFail($id);
        return view("articulo.edit", ["datos"=>$datos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
    //lluminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $art = Articulo::findOrFail($id);
        $art->nombre = $request->get('nombre');
        $art->descripcion = $request->get('descripcion');
        $art->precio = $request->get('precio');
        $art->status = $request->get('status');
        $art->update();
        /* return response()->json(["sms"=>$art->nombre]); */
        return Redirect('Articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = Articulo::findOrFail($id);
        $nombre = $datos->nombre;
        $datos->status = '0';
        $datos->update();
        return response()->json(['sms'=>$nombre]);
    }

}
