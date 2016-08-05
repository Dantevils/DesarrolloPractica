<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro_costo extends Model {

    //Modelo centro_costo
    protected $table = 'centro_costo';

    //Declaracion Clave Primaria
    protected $primaryKey = 'cc_id';
    /*Campo de uso */
    protected $fillable = ['cc_id', 'cc_nombre', 'cc_nickname','cc_direccion','cc_estado'];

    /*Un Centro de costo Puede tener 1 o N Usuarios*/
    public function users(){
        return $this->hasMany('App\User','cc_id', 'cc_id');
    }
    /*Un Centro de Costo esta en 1 o N */
    public function trazamovimiento(){
        return $this->belongsTo('App\Traza_movimiento','tra_id','tra_id');
    }
    /*Una a grupacion pertenece a 1 o N centros de costos*/
    public function Agrupacion(){
        return $this->belongsTo('App\Agrupacion','cc_id','cc_id');
        
    }
}
