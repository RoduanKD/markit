<?php

namespace App\Models;

use Faker\Provider\ar_EG\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Area extends Model
{

    protected $table = 'areas';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('city_id');
    protected $guarded = [];



    public function city()
    {
        return $this->belongsTo('City');
    }


    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function covered_areas()
    {
        return $this->hasMany(CoveredArea::class);
    }


}
