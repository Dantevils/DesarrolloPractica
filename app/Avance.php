<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class avance extends Model {

	//Modelo avance Mysql
    protected $table = 'avance';
    protected $primaryKey = 'ava_id';
    protected $fillable = ['ava_id', 'ava_acumuladoanterior', 'ava_diario','ava_historico','ava_fechahist','ava_avancefechante','sub_id'];

    public function partida(){
        return $this->belongsTo('App\partida','par_id','par_id');
    }
}
