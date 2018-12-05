<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'last_name',
		'middle_name',
		'itesm_id',
		'email',
		'password',
		'type',
		'work_area'
	];
	
	protected $casts = [
		'type' => 'boolean',
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *	
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function students(){
		return $this->hasMany('App\Student','user_id','id');
	}
}
