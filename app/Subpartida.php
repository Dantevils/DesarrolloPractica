<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subpartida extends Model {

    //Modelo conetado a proveedor

    protected $table = 'subpartida';
    protected $primaryKey = 'sub_id';
    /*Campo de uso */
    protected $fillable = ['sub_id','sub_nombre','sub_fechaini','sub_fechater','sub_precio','sub_cantidad','sub_um','par_id'];
    /*Campo oculto*/
    public function Subpartida_Cubicacion(){
        
        return $this->hasMany('App\Cubicacion');
        
    }
    
    
    

}
