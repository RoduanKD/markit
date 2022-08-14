<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoveredArea extends Model
{

    protected $table = 'covered_areas';
    public $timestamps = false;




    public function area()
    {
        return $this->belongsTo('Area', 'employee_id');
    }

    public function employee()
    {
        return $this->belongsTo('User', 'employee_id');
    }

}
