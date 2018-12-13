<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $fillable = ['name'];

    public function staff()
    {
        return $this->hasMany('App\staff');
    }
    public function ShiftSchedule()
    {
        return $this->belongsTo('App\ShiftSchedule');
    }

    public function date()
    {
        return $this->HasMany('App\date');
    }



}
