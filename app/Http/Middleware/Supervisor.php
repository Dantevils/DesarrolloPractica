<?php namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Contracts\Auth\Guard;

class Supervisor {
	protected $auth;

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}
	public function handle($request, Closure $next)
	{
		switch ($this->auth->user()->cargo){

			#Residente
			case 'RESIDENTE':
				return redirect()->to('#');
				break;
			#Compras
			case 'COMPRAS':
				return redirect()->to('#');
				break;
			#Supervisor
			case 'SUPERVISOR':
				//return redirect()->to('#');
				break;
			#Bodeguero
			case 'BODEGUERO':
				return redirect()->to('#');
				break;
		}
		return $next($request);
	}

}
