<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model{

    //Modelo Tabla insumo Myslq
    protected $table = 'insumo';

    protected $primaryKey = 'ins_id';

    protected $fillable = ['ins_id', 'ins_material', 'ins_um','ins_cantidad','ins_precio','ins_total','ins_tipo','par_id'];


    /*Relacion de Retorno*/
    public function partida(){
        return $this->belongsTo('App\Partida','par_id','par_id');
    }
    
}