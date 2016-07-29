<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiene extends Model {

	//
    //Modelo a relacion tiene

    protected $table = 'tiene';

    /*Campo de uso */
    protected $fillable = ['sub_id','par_id'];
    /*Campo oculto*/
    //protected $hidden = ['password', 'remember_token'];




}
