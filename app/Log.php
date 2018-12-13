<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
     protected $fillable =  [
         'staff_id',
        'staff_fname',
        'staff_lname',
        'staff_department',
        'staff_shift',
        'viewed_by'

        ];

  //  public $timestamps = false;

}
