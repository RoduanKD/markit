<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function isPermission($permissionName)
    {
        foreach ($this->permissions()->get() as $permission)
        {
            if ($permission->name == $permissionName)
            {
                return true;
            }
        }

        return false;
    }
}
