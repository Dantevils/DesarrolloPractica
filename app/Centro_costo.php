<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro_costo extends Model {

    //Modelo centro_costo
    protected $table = 'centro_costo';

    //Declaracion Clave Primaria
    protected $primaryKey = 'cc_id';
    /*Campo de uso */
    protected $fillable = ['cc_id', 'cc_nombre', 'cc_nickname','cc_direccion','cc_estado'];

   /*Campo oculto*/
    //protected $hidden = ['password', 'remember_token'];


}
