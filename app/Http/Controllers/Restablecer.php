<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class Restablecer extends Controller
{
    public function verificacion(Request $request){
        $email = $request->get('email');
        $telefono = $request->get('telefono');
        $datos = DB::table('users')->select('id')
        ->where('email', '=', $email)
        ->where('telefono', '=', $telefono)
        ->get();
        if(count($datos) == 1){
            foreach($datos as $dat){
                $dato = $dat->id;
                $cambiar = User::findOrFail($dato);
                $numero = rand(5000, 10000);
                $cambiar->password = $numero;
                $cambiar->update();
            }
            return response()->json(['sms'=>true, 'codigo'=>$numero, 'id'=>$dato]);
        }
        else{
            return response()->json(['sms'=>false]);            
        } 
    }
    public function cambiar(Request $request){
        $id = $request->get('codigo');
        $token = $request->get('idusuario');
        $contra = $request->get('password');
        $consulta = DB::table('users')->select('id')
        ->where('id', '=', $id)
        ->where('password', '=', $token)
        ->get();
        if(count($consulta) == 1){
            foreach($consulta as $idu){
                $ids = $idu->id;
                $user = User::findOrFail($ids);
                $user->password = Hash::make($contra);
                $user->update();
            }
        return redirect('login');
        }else{            
            return "<h3 style='color:red;text-align: center;'>Tokens Incorrectos</h3><a href='/'>Iniciar session</a>";
        }
    }
}