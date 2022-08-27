<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes, HasTranslations;

    protected $fillable =
    [
        'name',
        'description',
        'price',
        'quantity',

    ];

    protected $guarded =
    [
        'category_id',
        'currency_id',
        'area_id',
        'owner_id',
    ];

    public $translatable = ['name','description'];

    public function scopeOfCategory($query, $category)
    {
        return $query->where('category_id', $category->id);
    }

    public function scopeOfRate($query, $category)
    {
        $rate_points = Rate::where('rateable_id',$category->id)->count('rating');
        return $query->where($rate_points, $category->id);
    }

    public function scopeOfRateSort($query, $category)
    {
        $rate_points = Rate::all()->orderbydesc();
        return $rate_points;
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
