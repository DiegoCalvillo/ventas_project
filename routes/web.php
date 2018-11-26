<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('/', 'PrincipalController'); 

/*Rutas de LoginController*/
Route::resource('/login', 'LoginController');
Route::post('login/store', ['as' => 'login/store', 'uses' => 'LoginController@store']);
Route::get('/logout', 'LoginController@logout');

/*Rutas de UsuariosController*/
Route::get('usuarios/create', ['as' => 'usuarios/create', 'uses' => 'UsuariosController@create']);
Route::post('usuarios/store', ['as' => 'usuarios/store', 'uses' => 'UsuariosController@store']);

/*Rutas de CategoriasController*/
Route::resource('/categorias', 'CategoriasController');
Route::get('categorias/create', ['as' => 'categorias/create', 'uses' => 'CategoriasController@create']);
Route::post('categorias/store', ['as' => 'categorias/store', 'uses' => 'CategoriasController@store']);
Route::get('categorias/{id}', ['as' => 'categorias/show', 'uses' => 'CategoriasController@show']);
Route::put('categorias/update', ['as' => 'categorias/update', 'uses' => 'CategoriasController@update']);
Route::get('categorias/{id}/edit', ['as' => 'categorias/edit', 'uses' => 'CategoriasController@edit']);
Route::get('categorias/destroy/{id}', ['as' => 'categorias/destroy', 'uses' => 'CategoriasController@destroy']);

/*Rutas de ArticulosController*/
Route::resource('/articulos', 'ArticulosController');
Route::get('articulos/create', ['as' => 'articulos/create', 'uses' => 'ArticulosController@create']);
Route::get('articulos/{id}', ['as' => 'articulos/show', 'uses' => 'ArticulosController@show']);
Route::post('articulos/store', ['as' => 'articulos/store', 'uses' => 'ArticulosController@store']);
Route::get('articulos/{id}/edit', ['as' => 'articulos/edit', 'uses' => 'ArticulosController@edit']);
Route::put('articulos/update', ['as' => 'articulos/update', 'uses' => 'ArticulosController@update']);
Route::get('articulos/destroy/{id}', ['as' => 'articulos/destroy', 'uses' => 'ArticulosController@destroy']);
Route::get('articulos/{id}/entrada_producto', ['as' => 'articulos/entrada_producto', 'uses' => 'ArticulosController@entrada_producto']);
Route::post('articulos/registrar_entrada_producto', ['as' => 'articulos/registrar_entrada_producto', 'uses' => 'ArticulosController@registrar_entrada_producto']);
Route::get('categoria_id/{id}', 'ArticulosController@getCategorias');

/*Rutas de ClientesController*/
Route::resource('/clientes', 'ClientesController');
Route::get('clientes/create', ['as' => 'clientes/create', 'uses' => 'ClientesController@create']);
Route::post('clientes/store', ['as' => 'clientes/store', 'uses' => 'ClientesController@store']);
Route::get('clientes/{id}', ['as' => 'clientes/show', 'uses' => 'ClientesController@show']);
Route::put('clientes/update', ['as' => 'clientes/update', 'uses' => 'ClientesController@update']);
Route::get('clientes/{id}/edit', ['as' => 'clientes/edit', 'uses' => 'ClientesController@edit']);
Route::get('clientes/destroy/{id}', ['as' => 'clientes/destroy', 'uses' => 'ClientesController@destroy']);
Route::get('clientes/{id}/ventas_hechas', ['as' => 'clientes/ventas_hechas', 'uses' => 'ClientesController@ventas_hechas']);

/*Rutas de VentasController*/
Route::resource('/ventas', 'VentasController');
Route::get('ventas/create', ['as' => 'ventas/create', 'uses' => 'VentasController@create']);
Route::get('articulo_id/{id}', 'VentasController@getArticulos');
Route::post('ventas/store', ['as' => 'ventas/store', 'uses' => 'VentasController@store']);
Route::get('ventas/{id}', ['as' => 'ventas/show', 'uses' => 'VentasController@show']);
Route::get('ventas/{id}/descargar_pdf', ['as' => 'ventas/descargar_pdf', 'uses' => 'VentasController@pdf']);

Auth::routes();