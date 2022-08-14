<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;



    protected $table = 'cities';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('country_id','name');
    protected $guarded = [];




    public function country()
    {
        return $this->belongsTo('Country', 'country_id');
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

}
