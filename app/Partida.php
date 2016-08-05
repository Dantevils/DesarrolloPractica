<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{

    //Modelo Tabla partida Mysql
    protected $table = 'partida';
    protected $primaryKey = 'par_id';
    protected $fillable = ['par_id', 'par_nombre', 'par_fechaini', 'par_fechater', 'par_precio', 'par_cantidad', 'par_um', 'agr_id','par_pptovta'];

    /*Relaciones*/

    /*Una Partida Tiene 1 a 1 avance*/
    public function avances()
    {
        return $this->hasOne('App\Avance','par_id','par_id');
    }
    
    /*Una Partida Tiene 1 a n Insumos*/
    public function insumos()
    {
        return $this->hasMany('App\Insumo','par_id','par_id');
    }

    /*Una Partida Pertenece a 1 agrupacion*/
    public function agrupacion()
    {
        return $this->belongsTo('App\Agrupacion','agr_id','agr_id');
    }

    /*Un Partida Pertence a 1 Traza_movimiento*/
    public function trazamovimiento()
    {
    return $this->belongsTo('App\Traza_movimiento','tra_id','tra_id');
    }


}





