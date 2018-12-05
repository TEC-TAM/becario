<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class AuthenticateAdmin {
	/* referencia al objeto Guard */
	protected $auth;
	/* constructor */
	/**
	 * @param Guard  $auth -> permite el acceso al usuario (saber si está logueado o no)
	 * */
	public function __construct(Guard $auth){
		$this->auth = $auth;
	}
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		/* Si no es adminitrador */
		if($this->auth->user()->type != true){
			/* redirige a home */
			return redirect()->back();
		}
		return $next($request);
	}

}
