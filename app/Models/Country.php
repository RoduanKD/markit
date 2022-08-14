<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{

    protected $table = 'countries';
    public $timestamps = true;

    use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['deleted_at'];


    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
