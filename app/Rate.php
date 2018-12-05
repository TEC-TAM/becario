<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rates';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'service_rate',
        'reassigned'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'reassigned' => 'boolean'
    ];

    public function student()
    {
        return $this->belongsTo('App\Student','student_id');
    }
}
