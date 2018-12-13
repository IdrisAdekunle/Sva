<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $table = 'staff';

    protected $fillable = [
        'sap_no',
        'name',
        'department_id',
        'gender',
        'image'
        ];


    public function ShiftSchedule()
    {
        return $this->hasMany('App\ShiftSchedule');
}

    public function department()
    {
        return $this->belongsTo('App\department');
}

    public function getRouteKeyName()
    {
        return 'name';
    }

}



