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
Route::get('/Proveedores', 'UserController@proveedores');