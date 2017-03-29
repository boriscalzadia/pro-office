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

Route::group(['prefix' => 'admin','middleware'=>'auth'], function(){
	Route::resource("clientes",'ClienteController');
	Route::get("clientes/{id}/destroy",[
		'uses'	=>	'ClienteController@destroy',
		'as'	=>	'clientes.destroy'
		]);
	Route::post('clientes/{id}/asignar',[
		'uses'	=>	'ClienteController@asisala',
		'as'	=>	'clientes.asisala'
		]);
	Route::post('clientes/{id}/desocupar',[
		'uses'	=>	'ClienteController@desocupar',
		'as'	=>	'clientes.desocupar'
		]);
	Route::post('clientes/{id}/addservicios',[
		'uses'	=>	'ClienteController@addservice',
		'as'	=>	'clientes.addservice'
		]);
	Route::resource("salas",'SalasController');
	Route::get("salas/{id}/destroy",[
		'uses'	=>	'SalasController@destroy',
		'as'	=>	'salas.destroy'
		]);
	Route::get("salas/{id}/amueblar",[
		'uses'	=>	'SalasController@amueblar',
		'as'	=>	'salas.amueblar'
		]);
	Route::post("salas/{id}/asignar",[
		'uses'	=>	'SalasController@asignar',
		'as'	=>	'salas.asignar'
		]);
	Route::post("salas/{id}/administramuebles",[
		'uses'	=>	'SalasController@administramuebles',
		'as'	=>	'salas.administramuebles'
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
	Route::resource("usuarios",'UserController');
	Route::get("usuarios/{id}/destroy",[
		'uses'	=>	'UserController@destroy',
		'as'	=>	'usuarios.destroy'
		]);
	Route::resource("inmuebles",'InmueblesController');
	Route::get("inmuebles/{id}/destroy",[
		'uses'	=>	'InmueblesController@destroy',
		'as'	=>	'inmuebles.destroy'
		]);
	Route::resource("ofiusuarios",'OfiUsuariosController');
	Route::get("ofiusuarios/{id}/destroy",[
		'uses' => 'OfiUsuariosController@destroy',
		'as'   => 'ofiusuarios.destroy'
		]);
	
	
	// Route::resource("detalles-salas",'DetalleSalasController');
	// Route::get('detalles-salas/{id}/destroy',[
	// 	'uses'	=>	'DetalleSalasController@destroy',
	// 	'as'	=>	'detalles-salas.destroy'
	// 	]);
});


Route::get('login',[
	'uses'	=>	'Auth\LoginController@showLoginForm',
	'as'	=>	'auth.login'
	]);

Route::post('login',[
	'uses'	=>	'Auth\LoginController@login',
	'as'	=>	'auth.login'
	]);

Route::post('logout',[
	'uses'	=>	'Auth\LoginController@logout',
	'as'	=>	'auth.logout'
	]);

Route::get('register',[
		'uses'	=>	'UserController@register',
		'as'	=>	'usuarios.register'
		]);
Route::post('register',[
		'uses'	=>	'UserController@stores',
		'as'	=>	'usuarios.stores'
		]);