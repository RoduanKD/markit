<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function covered_areas()
    {
        return $this->hasMany(CoverdArea::class);
    }

    public function areas()
    {
        return $this->belongsToMany(Area::class, 'covered_areas', 'employee_id', 'area_id');
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function scopeRole($query, $roleName)
    {
        return $query->whereHas('roles', fn ($q) => $q->where('name', $roleName));
    }

    public function hasRole($roleName)
    {
        return (bool) $this->roles()->where('name', $roleName)->exists();
    }

    public function allPermissions(): Attribute
    {
        $permissions = $this->permissions->map(fn ($permission) => $permission->name);

        // get permission of roles
        foreach ($this->roles as $role) {
            $rolePermissions = $role->permissions->map(fn ($permission) => $permission->name);
            $permissions = $permissions->concat($rolePermissions);
        }

        return Attribute::make(
            get: fn () => $permissions->unique(),
        );
    }

    public function hasPermission($permissionName)
    {
        return $this->allPermissions->contains($permissionName);
    }
}
