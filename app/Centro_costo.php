<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro_costo extends Model {

	//Modelo Conectado Centro_costo to centro_costo

    protected $table = 'centro_costo';

    /*Campo de uso */
    protected $fillable = ['cc_id', 'cc_nombre', 'cc_nickname','cc_direccion','cc_estado'];

   /*Campo oculto*/
    //protected $hidden = ['password', 'remember_token'];


}
