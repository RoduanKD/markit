<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo('User' , 'owner_id');
    }

    public function price()
    {
        return $this->belongsTo(Currency::class);
    }

    public function areas()
    {
        return $this->belongsTo(Area::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
