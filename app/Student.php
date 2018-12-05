<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

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
        'career',
        'semester',
        'status',
        'confirmed',
        'rated'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'confirmed' => 'boolean',
        'rated' => 'boolean',
        'delivered' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function rate(){
        return $this->hasOne('App\Rate','student_id','id');
    }
}
