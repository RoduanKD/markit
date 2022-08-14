<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permissions extends Model
{
    use HasFactory;

    public function role(){
        return $this->belongsToMany(Role::class);
    }
    public function user(){
        return $this->belongsToMany(User::class);
    }
}
