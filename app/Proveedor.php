<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model {

    //Modelo conetado a proveedor

    protected $table = 'proveedor';

    /*Campo de uso */
    protected $fillable = ['pro_id','pro_nombre','pro_rut','pro_contacto','pro_telefono','pro_celular','pro_email'];
    /*Campo oculto*/
    //protected $hidden = ['password', 'remember_token'];




}
