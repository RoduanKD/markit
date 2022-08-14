<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory,InteractsWithMedia,SoftDeletes;

    protected $fillable =
    [
        'name',
        'description',
        'price',
        'quantity',
        'category_id',
        'currency_id',
        'area_id',
        'owner_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    // public function Invoices()
    // {
    //     return $this->belongsToMany(Invoice::class);
    // }
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
