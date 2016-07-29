<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class avance extends Model {

	//Modelo avance conectado a Avance
    protected $table = 'avance';

    /*Campo de uso */
    protected $fillable = ['ava_id', 'ava_acumuladoanterior', 'ava_diario','ava_historico','ava_fechahist','ava_avancefechante','sub_id'];

    /*Campo oculto*/
    //protected $hidden = ['password', 'remember_token'];



}
