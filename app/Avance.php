<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class avance extends Model {

	//Modelo avance
    protected $table = 'avance';

    //Declaracion de Clave Primaria
    protected $primaryKey = 'ava_id';

    /*Campo de uso */
    protected $fillable = ['ava_id', 'ava_acumuladoanterior', 'ava_diario','ava_historico','ava_fechahist','ava_avancefechante','sub_id'];

    /*Campo oculto*/
    //protected $hidden = ['password', 'remember_token'];



}
