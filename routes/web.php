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

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'admin'], function(){
	Route::resource("clientes",'ClienteController');
	Route::get("clientes/{id}/destroy",[
		'uses'	=>	'ClienteController@destroy',
		'as'	=>	'clientes.destroy'
		]);
	Route::resource("salas",'SalasController');
	Route::get("salas/{id}/destroy",[
		'uses'	=>	'SalasController@destroy',
		'as'	=>	'salas.destroy'
		]);
	Route::resource("servicios",'ServiciosController');
	Route::get("servicios/{id}/destroy",[
		'uses'	=>	'ServiciosController@destroy',
		'as'	=>	'servicios.destroy'
		]);
	Route::resource("provedores",'PrveedoresController');
	Route::get("provedores/{id}/destroy",[
		'uses'	=>	'PrveedoresController@destroy',
		'as'	=>	'provedores.destroy'
		]);
});


Auth::routes();

Route::get('/home', 'HomeController@index');
