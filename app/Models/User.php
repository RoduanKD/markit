<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use willvincent\Rateable\Rateable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, Rateable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'is_male',
        'birthdate',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function delivery_task()
    {
        return $this->hasMany(DeliveryTask::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function coverd_area()
    {
        return $this->hasMany(CoverdArea::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }

    public function support()
    {
        return $this->hasMany(Support::class);
    }
}
