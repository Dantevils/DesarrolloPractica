<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
/*
Desarrollo de Grupo de rutas para la autentificacion de Tipo de usuarios
 */

//Residente
Route::group(
	['middleware'=>['auth','Residente'],'prefix'=>'res'],function(){
	Route::get('/',function(){
		return view('#');
	});
	}
);

//Bodegero
Route::group(
	['middleware'=>['auth','Bodegero'],'prefix'=>'bod'],function(){
	Route::get('/',function(){
		return view('#');
	});
}
);

//Compras
Route::group(
	['middleware'=>['auth','Compras'],'prefix'=>'com'],function(){
	Route::get('/',function(){
		return view('compras');
	});
}
);

//Supervisor
Route::group(
	['middleware'=>['auth','Supervisor'],'prefix'=>'Sup'],function(){
	Route::get('/',function(){
		return view('#');
	});
}
);

/*Ruta de prueba para la coneccion de datos con MySql*/
//Route::get('prueba','PruebaController@index');

//Route::post('nuevopedido','PruebaController@mostarusuarios');

Route::get('nuevopedido','NuevopedidoController@index'); //OK

Route::get('insumos/{cub_id}','InsumoController@show');//OK

Route::get('statuspedido','ComprasStatusPedidoController@index');//ok

Route::get('odecemitidas','OdecEmitidasController@index');

Route::get('status','StatuspedidoController@index');//Reload


Route::post('lala/{cub_id}','InsumoController@store');






Route::get('estadodepedido','EstadodepedidoController@index');
