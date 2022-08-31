<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Currency extends Model
{
    use HasFactory,SoftDeletes, HasTranslations;

    protected $fillable = [
        'name',
        'symbol',
        'rate',
    ];

    public $translatable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
