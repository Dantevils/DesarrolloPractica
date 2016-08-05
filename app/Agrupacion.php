<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Agrupacion extends Model {

   //Modelo Tabla agrupacion Mysql
    protected $table = 'agrupacion';

    protected $primaryKey = 'agr_id';

    protected $fillable = ['agr_id', 'agr_nombre', 'agr_fechaini', 'agr_fechater', 'agr_um', 'agr_cantidad', 'agr_precioventa', 'agr_preciocosto', 'agr_totalavancedinero', 'agr_totalavancepor', 'cc_id'];

    /*Una Agrupacion tiene 1 o N Partidas*/
    public function partidas()
    {
        return $this->hasMany('App\Partida','agr_id','agr_id');
    }
    
    /*Una agrupacion tiene 1 o N centros de costos*/
    public function centro_costos()
    {
        return $this->hasMany('App\Centro_costo','cc_id','cc_id');
    }
    
    
    
    
}
