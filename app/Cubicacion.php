<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cubicacion extends Model {

	//Modelo conectado a cubicacion
    protected $table = 'cubicacion';

    //Modelo 
    protected $primaryKey = 'cub_id';
    /*Campo de uso */

    protected $fillable = ['cub_id', 'cub_material', 'cub_um','cub_cantidad','cub_precio','cub_total','cub_tipo'];

    /*Campo oculto*/
    //protected $hidden = ['password', 'remember_token'];



}
