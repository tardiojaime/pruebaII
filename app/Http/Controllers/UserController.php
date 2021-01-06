<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users as u')
        ->select('u.id','u.name', 'u.email', 'u.avatar','u.rol','u.telefono')
        ->orderBy('u.id', 'desc')
        ->paginate(6);
        return view('users.index', ['users'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user =  new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        if($request->hasfile('avatar')){
            $file = $request->file('avatar')->store('public/image/avatars');
            $user->avatar = self::suprimir($file);
        }
        if($request->hasfile('background')){
            $file = $request->file('background')->store('public/image/backgrounds');  
            $user->fondo = self::suprimir($file);
        }
        $user->rol = $request->get('rol');
        $user->telefono = $request->get('telefono');
        $user->save();
        return Redirect::to('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = DB::table('users as u')
        ->leftjoin('config as c', 'c.id', '=', 'u.id')
        ->select('u.id', 'u.name', 'u.email', 'u.avatar', 'u.fondo', 'telefono', 'c.nombre')
        ->where('u.id', '=', $id)
        ->first();
        return view('users.show', ['user'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $config = DB::table('config')->get();
        return view('users.edit', ['user'=>$user, 'config'=>$config]);
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
         $user= User::findOrFail($id);
         $user->name = $request->get('name');
         $user->email = $request->get('email');
         $user->password = Hash::make($request->get('password'));
         if($request->hasfile('avatar')){
             $avt = $request->file('avatar')->store('public/image/avatars');
             $user->avatar = self::suprimir($avt);
         }
         if($request->hasfile('background')){
             $back = $request->file('background')->store('public/image/backgrounds');
             $user->fondo = self::suprimir($back);
         }
         $user->telefono = $request->get('telefono');
         if($request->get('config')){
            $user->config = $request->get('config');
         }
         $user->update();
         return Redirect::to('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        return response()->json([
            'sms' => $user->email
        ]);
    }
    protected function suprimir($file){
        $num = strlen($file)-7;
        $img = substr($file, -$num);
        return $img;
    }
}
