<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Traza_movimiento extends Model {

    //Modelo conectado a traza_moviemiento
    protected $primaryKey ='tra_id';
    
    protected $table = 'traza_movimiento';
    //protected $primaryKey = 'tra_id';
    /*Campo de uso */
    protected $fillable = ['tra_id','tra_odecerp','tra_fechasugerida','tra_materiales','tra_tipo','tra_estatus','tra_fecha','tra_cantidad','tra_precio','tra_um','tra_numero','tra_nomdocumento','pro_id','sub_id','cc_id'];

    /*Traza_movimiento Puede tener 1 a N Proveedores*/
    public function proveedors(){
        return $this->hasMany('App\Proveedor','tra_id','tra_id');
    }

    /*Traza_movimiento Puede tener 1 a N Partidas*/
    public function partidas(){
        return $this->hasMany('App\Partida','par_id','tra_id');
    }

    /*Traza_movimiento puede tener 1 a N Partidas*/
    public function centro_costos()
    {
    return $this->hasMany('App\Centro_costo','cc_id','cc_id');
    }
}
