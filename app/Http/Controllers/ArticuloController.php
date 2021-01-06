<?php

namespace App\Http\Controllers;
use DB;
use App\Articulo;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = DB::table('articulo as a')
        ->where('a.status', "=", '1')->get();
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
        $art->usuario = $request->get('usuario');
        if($request->hasfile('imagen')){
            $img = $request->file('imagen')->store('public/image/articulos');
            $art->imagen = self::suprimir($img);
        }
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
    protected function suprimir($file){
        $num = strlen($file)-7;
        $img = substr($file, -$num);
        return $img;
    }
}
