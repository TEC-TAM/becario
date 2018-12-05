<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Import extends Model {

    protected $table = 'imports';
    protected $fillable = [
        'file_url',
        'description',
        'type',
        'used'
    ];

    protected $casts = [
        'type' => 'boolean',
        'used' => 'boolean'
    ];
    
    public function setFileUrlAttribute($file_url)
    {
        if(!empty($file_url)) {
            $name = Carbon::now()->second.'-'.Carbon::now()->minute.'-'.Carbon::now()->day.'-'. Carbon::now()->month.'-'. Carbon::now()->year.'-'. $file_url->getClientOriginalName();
            $this->attributes['file_url'] = $name;
            \Storage::disk('local')->put($name, \File::get($file_url));
        }
    }
}
