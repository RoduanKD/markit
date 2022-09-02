<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;
use willvincent\Rateable\Rateable;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes, HasTranslations, Rateable;

    protected $fillable =
    [
        'name',
        'description',
        'price',
        'quantity',
        'owner_id',
        'category_id',
        'currency_id',
        'area_id',
    ];

    public $translatable = ['name', 'description'];

    public function scopeCategory($query, $category)
    {
        return $query->where('category_id', $category->id);
    }

    public function scopeRate($query)
    {
        return $query->whereHas('ratings');
    }

    public function scopeRateSort($query, $order = 'desc')
    {
        return $query->select('products.*')
        ->selectRaw('avg(rating) as avg_rate')
        ->leftJoin('ratings', function ($join) {
            $join->on('products.id', '=', 'ratings.rateable_id')
                ->where('rateable_type', 'App\Models\Product');
        })
        ->orderBy('avg_rate', $order)
        ->groupBy('products.id');
    }

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
