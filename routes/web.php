<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get("aa", function(){
    $nombre ="fdjkghsdfigjhdfojg";
    return substr($nombre, 0, 2);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/Articulos', 'ArticuloController');
Route::get('Articulos', 'ArticuloController@index')->name('articulo');
Route::resource('/Ventas', 'VentasController');
Route::resource('/Usuarios', 'UserController');
Route::post('/update/user', 'UserController@update');
Route::resource('/Ingresos', 'IngresosController');
Route::resource('/Proveedores', 'ProveedorController');

Route::get("/date", function(){
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
    return $datos; 
});