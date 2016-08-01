<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{

    //Modelo conectado a Partida

    protected $table = 'partida';

    protected $primaryKey = 'par_id';
    /*Campo de uso */
    protected $fillable = ['par_id', 'par_nombre', 'par_fechaini', 'par_fechater', 'par_um', 'par_cantidad', 'par_precioventa', 'par_preciocosto', 'par_totalavancedinero', 'par_totalavancepor', 'cc_id'];

    /*Campo oculto*/
    //protected $hidden = ['password', 'remember_token'];
}
