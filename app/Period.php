<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model {

    protected $table = 'periods';
    protected $fillable = [
        'semester',
        'deadline_to_finish_service',
        'deadline_to_rate_students',
        'deadline_to_hand_in_file'
    ];

}
