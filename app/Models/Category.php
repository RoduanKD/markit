<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory,SoftDeletes, HasTranslations;

    protected $fillable=[
        'name',
        'parent_id',
    ];

    public $translatable = ['name'];

    public function categoryParent()
    {
        return $this->belongsTo(Category::class,"parent_id");
    }

    public function categoryChilds()
    {
        return $this->hasMany(Category::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
