<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Centro_costo;
use App\Partida;
use App\Insumo;
use App\Traza_movimiento;
use phpDocumentor\Reflection\Types\This;

class NuevopedidoController extends Controller {

	public function index()
	{
		$coc = new Centro_costo();
		$user =  new User();
		$partida = new Partida();

	return view('partials.pedido.nuevopedido',
		['coc'=>$coc::all(),
		'user'=>$user::all(),
		'partida'=>$partida::all()]);
	}

	public function create()
	{
		//
	}

	public function store()
	{
		$rules = array(
			'tra_id'       => 'required',
			'tra_materiales'      => 'required',
			'tra_um' => 'required|numeric',
			'tra_cantidad' => 'required',

		);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			Session::flash('message', 'Error en datos');
		}else {
			// Guardar datos a traza movimento
			$mov = new Traza_movimiento();
			$mov->tra_id = Input::get('tra_id');
			$mov->tra_materiales = Input::get('tra_materiales');
			$mov->tra_um = Input::get('tra_um');
			$mov->tra_cantidad = Input::get('tra_cantidad');
			$mov->save();
			Session::flash('message', 'Enviado Con Exito');
			return Redirect::to('partials.nuevopedido');
		}
			//Guardar datos en Cubicacion


			// Redireccionamiento








		//
	}


	public function show($cub_id)
	{
		$cub = new Insumo();
		$mov = new Traza_movimiento();
		return view('partials.cubicacion',['cubicacions'=>$mov::all()]);
		//$mov = new Traza_movimiento();
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
