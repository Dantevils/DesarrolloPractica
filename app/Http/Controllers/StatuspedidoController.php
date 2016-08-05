<?php namespace App\Http\Controllers;

use App\Centro_costo;
use App\Traza_movimiento;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StatuspedidoController extends Controller {

	public function index()
	{
		$mov =  Traza_movimiento::all();
		//	return view('partials.nuevopedido',['coc'=>Centro_costo::all(),'user' => User::all(),'subpartida'=>Subpartida::all()]);
		$coc =  Centro_costo::all();
		return view('partials.pedido.statuspedido',['mov'=>$mov,'coc'=>$coc]);
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
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show() //$id
	{
		//
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
