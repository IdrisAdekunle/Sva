<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShiftSchedule extends Model
{
    protected $fillable =[
      'staff_id',
      'department_id',
      'shift_id',
      'date_id'

    ];

    public function staff(){

        return $this->belongsTo('App\staff');
    }
    public function Shift(){

        return $this->belongsTo('App\Shift');
    }
    public function department(){

        return $this->belongsTo('App\department');
    }
    public function date(){

        return $this->belongsTo('App\date');
    }

   public $timestamps = false;
}
