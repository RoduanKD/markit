<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoveredArea extends Model
{

    protected $table = 'covered_areas';
    public $timestamps = false;
    protected $fillable = ['employee_id','area_id'];



    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }

}
