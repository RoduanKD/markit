<?php

namespace App\Models;

use Faker\Provider\ar_EG\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Area extends Model
{
    use SoftDeletes;
    use HasTranslations;

    protected $dates = ['deleted_at'];

    protected $fillable = ['city_id', 'name'];
    public $translatable = ['name'];

    protected $casts = [
        'name' => 'array',
    ];


    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function covered_areas()
    {
        return $this->hasMany(CoveredArea::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'covered_areas');
    }
}
