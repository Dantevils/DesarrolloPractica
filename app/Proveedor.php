<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model {

    //Modelo conetado a proveedor

    protected $table = 'proveedor';
    protected $primaryKey = 'pro_id';
    /*Campo de uso */
    protected $fillable = ['pro_id','pro_nombre','pro_rut','pro_contacto','pro_telefono','pro_celular','pro_email'];

    /*Un proveedor pertenese a 1 o varias traza_movimiento*/
    public function trazamovimiento(){
        return $this->belongsTo('App\Traza_movimiento','tra_id','tra_id');
    }

}
