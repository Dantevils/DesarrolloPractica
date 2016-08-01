<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Centro_costo;
use App\Subpartida;
use App\Cubicacion;
use App\Traza_movimiento;
class NuevopedidoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('partials.nuevopedido',['coc'=>Centro_costo::all(),'user' => User::all(),'subpartida'=>Subpartida::all()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
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

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($cub_id)
	{
		
		return view('partials.cubicacion',['cubicacion'=>Cubicacion::find($cub_id),'subpartida'=>Subpartida::find($cub_id)]);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
