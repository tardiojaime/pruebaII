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
    public function index()
    {
        $user = DB::table('users as u')
        ->select('u.id','u.name', 'u.email', 'u.avatar','u.rol','u.telefono')
        ->where('u.status','!=', '0')
        ->get();
        return view('users.index', ['users'=>$user]);
    }
    public function create()
    {
        return view("users.create");
    }
    public function store(Request $request)
    {
        $user =  new User();
        $user->name = $request->get('nombre');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        if($request->hasfile('avatar')){
            $file = $request->file('avatar')->store('public/image/avatars');
            $user->avatar = self::suprimir($file);
        }
        $user->rol = $request->get('rol');
        $user->telefono = $request->get('telefono');
        $user->status = "1";
        $user->save();
        return response()->json(['sms'=>'Usuario Agregado.']);
    }
    public function show($id)
    {
        $users = User::findOrFail($id);
        return view('users.show', ['user'=>$users]);
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user'=>$user]);
    }
    public function update(Request $request, $id)
    {
         $user= User::findOrFail($id);
         $user->name = $request->get('nombre');
         $user->email = $request->get('email');
         if($request->hasfile('avatar')){
             $avt = $request->file('avatar')->store('public/image/avatars');
             $user->avatar = self::suprimir($avt);
         }
         $user->telefono = $request->get('telefono');
         $user->rol = $request->get('rol');
         $user->update();
         return response()->json(['sms'=>'Usuario Actualizado.']);
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
        $user->status = "0";
        $user->update();
        
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
