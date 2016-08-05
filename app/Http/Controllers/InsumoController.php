<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Laracasts\Flash\Flash;

use App\Traza_movimiento;
use App\Partida;
use App\Insumo;
use App\Agrupacion;


class InsumoController extends Controller {


	public function index($id)
	{
	//	return view('partials.nuevopedido',['coc'=>Centro_costo::all(),'user' => User::all(),'subpartida'=>Subpartida::all()]);
	  return view('home');
	}


	public function create()
	{

	}

	public function store($id)
	{   /*Seccion de Centro_costo*/
		$partida = new Partida();
		$partida = $partida::find($id)->agrupacion;
		$cc_id = $partida->cc_id;
		$mov =  Traza_movimiento::all()->max('tra_numero')+1; /*Valor unico para los pedidos*/

		$ins_material= $_POST['ins_material'];
		$ins_um= $_POST['ins_um'];
		$ins_cantidad= $_POST['ins_cantidad'];
		$ins_fecha= $_POST['fecha'];


		/*Materiales Extras en la Traza*/
		$extra_material= $_POST['extra_material'];
		$extra_um= $_POST['extra_um'];
		$extra_cantidad= $_POST['extra_cantidad'];
		$extra_fecha= $_POST['extra_fecha'];
		

		foreach ($extra_material as $key=>$ext_mate) {
			if ($extra_cantidad[$key] > 0) {
				$Traza = new Traza_movimiento();
				$Insumo = new Insumo();

				$Insumo->ins_material = $ext_mate;
				$Insumo->ins_um = $extra_um[$key];
				$Insumo->ins_cantidad = $extra_cantidad[$key];
				$Insumo->par_id = $id; //Default TRAER DATOS DE LA PARTIDA

				$Insumo->save();

				$Traza->tra_fechasugerida = $extra_fecha[$key];

				$Traza->tra_materiales = $extra_material[$key];
				$Traza->tra_um = $extra_um[$key];
				$Traza->tra_cantidad = $extra_cantidad[$key];
				$Traza->par_id = $id;//DEFAULT
				$Traza->tra_estatus = 'PED';/*Queda en estado Pendiente*/
				$Traza->tra_tipo = 'PED';
				$Traza->tra_fecha = \Carbon\Carbon::today();
				$Traza->cc_id = $cc_id;/*Coneccion con el Centro_costo*/
				$Traza->tra_numero = $mov;

				$Traza->save();

			}
		}

		foreach ($ins_material as $key=>$ins_mate) {
			if ($ins_cantidad[$key] > 0) {
				//CONDICION PARA LOS MATERIALES QUE YA EXISTEN EN LA PARTIDA
				$TrazaInsumos = new Traza_movimiento();

				$TrazaInsumos->tra_materiales = $ins_mate;
				$TrazaInsumos->tra_um = $ins_um[$key];
				$TrazaInsumos->tra_cantidad = $ins_cantidad[$key];
				$TrazaInsumos->tra_fechasugerida = $ins_fecha[$key];
				$TrazaInsumos->par_id = $id;//DEFAULT
				$TrazaInsumos->tra_estatus = 'PED';/*Queda en estado Pendiente*/
				$TrazaInsumos->tra_tipo = 'PED';
				$TrazaInsumos->tra_fecha = \Carbon\Carbon::today();
				$TrazaInsumos->cc_id = $cc_id;/*Coneccion con el Centro_costo*/
				$TrazaInsumos->tra_numero = $mov;

				$TrazaInsumos->save();


			}
		}
		if ( Traza_movimiento::all()->max('tra_numero') == $mov) {
			Flash('Su pedido se a realizado satisfactoriamente', 'success')->important();
		}else{
			Flash('No se a podido crear su pedido', 'warning')->important();
		}
		return redirect()->route('home');


	}


	public function show($id)
	{//$data = Subpartida::find($id)->cubicacions();
	//If(variables vacias retornar nada-> asi solo mostrara los datos de los items a agregar)
		$partida = new Partida();



		return view('partials.pedido.insumos',
			['agrupacion'=>$partida::find($id)->agrupacion,'insumos'=>$partida::find($id)->insumos,'partida'=>$partida::find($id)]);
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
