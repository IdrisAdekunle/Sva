<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class date extends Model
{
    protected $fillable = [

        'year',
        'month',
        'day',
        'date',
        'department_id'


    ];

    public $timestamps = false;

    public function ShiftSchedule(){

        return $this->hasMany('App\ShiftSchedule');

    }
    public function department(){

        return $this->belongsTo('App\department');

    }

    protected $dates = [

        'date'
    ];
}
