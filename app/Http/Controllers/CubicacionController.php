<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Cubicacion;
use App\Traza_movimiento;
use App\Partida;

class CubicacionController extends Controller {


	public function index()
	{
	//	return view('partials.nuevopedido',['coc'=>Centro_costo::all(),'user' => User::all(),'subpartida'=>Subpartida::all()]);
	  return view('home');
	}


	public function create()
	{

	}



	public function store()
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		//$rules = array(
		//'name' => 'required',
		//'email' => 'required|email',
		//'nerd_level' => 'required|numeric'
		//);
		//$validator = Validator::make(Input::all(), $rules);

		// process the login
		//if ($validator->fails()) {
			//return Redirect::to('nerds/create')
			//	->withErrors($validator)
			//	->withInput(Input::except('password'));
		//} else {
			// store

		/*Consultar si estan editados o no*/
		/*Consultar si pertenecesn*/
		$cubicacion = new Cubicacion();
		$cubicacion->cub_material = Input::get('name');
		$cubicacion->cub_um = Input::get('email');
		$cubicacion->cub_cantidad = Input::get('nerd_level');
		$cubicacion->save();


		$traza_movimiento = new Traza_movimiento();
		$traza_movimiento->tra_sub = Partida::find($cubicacion->par_id);
		$traza_movimiento->tra_materiales = Input::get('name');
		$traza_movimiento->tra_um = Input::get('email');
		$traza_movimiento->tra_cantidad = Input::get('nerd_level');
		$traza_movimiento->tra_fechasugerida = Input::get('nerd_level');
		$traza_movimiento->save();

		//Prueba para crear un material en la cubicacion
		$cubicacion2 = new Cubicacion();
		$cubicacion2->cub_id = 2;
		$cubicacion2->cub_matetial = 'Material2';
		$cubicacion2->cub_um = 'Litros';
		$cubicacion2->cub_cantidad = 100;
		$cubicacion2->save();

		// Redireccionar
		Session::flash('message', 'Pedido Guardadado!');
		return Redirect::to('home');/*a la misma tabla de cubicacion*/

		//}

	}


	public function show($id)
	{
		
	}


	public function edit($id)
	{
		//
	}


	public function update($id)
	{
		//
	}


	public function destroy($id)
	{
		//
	}

}
