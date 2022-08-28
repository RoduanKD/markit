<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Country extends Model
{
    use SoftDeletes;
    use HasTranslations;

    public $translatable = ['name'];

    protected $fillable = ['name'];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'name' => 'array',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
