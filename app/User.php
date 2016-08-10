<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{


	use Authenticatable, CanResetPassword;

	protected $table = 'users';
	protected $primaryKey = 'id';

	protected $fillable = ['name', 'email', 'password', 'cc_id', 'cargo'];

	protected $hidden = ['password', 'remember_token'];


	public function centro_costo()
	{
		return $this->belongsTo('App\Centro_costo', 'cc_id', 'cc_id');
	}


}
