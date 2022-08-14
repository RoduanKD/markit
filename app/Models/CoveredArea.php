<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoveredArea extends Model
{
    protected $primaryKey = null;

    protected $fillable = ['employee_id', 'area_id'];

    public $incrementing = false;

    public $timestamps = false;

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }
}
