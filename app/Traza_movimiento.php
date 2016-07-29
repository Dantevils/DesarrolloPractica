<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Traza_movimiento extends Model {

    //Modelo conectado a traza_moviemiento

    protected $table = 'traza_movimiento';

    /*Campo de uso */
    protected $fillable = ['tra_id','tra_odecerp','tra_fechasugerida','tra_materiales','tra_tipo','tra_estatus','tra_fecha','tra_cantidad','tra_precio','tra_um','tra_numero','tra_nomdocumento','pro_id','sub_id','cc_id'];
    /*Campo oculto*/
    //protected $hidden = ['password', 'remember_token'];




}
