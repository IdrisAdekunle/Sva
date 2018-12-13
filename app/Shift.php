<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = ['name'];

    public function ShiftSchedule()
    {
        return $this->hasMany('App\ShiftSchedule');
    }

}
