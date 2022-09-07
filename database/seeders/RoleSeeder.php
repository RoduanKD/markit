<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role=Role::create(['name'=>'SuperAdmin']);
        $role->permissions()->attach([1,2]);

        $role=Role::create(['name'=>'Moderator']);
        $role->permissions()->attach([10,11,12,13]);

        $role=Role::create(['name'=>'Guest']);

        $role=Role::create(['name'=>'Support']);

        $role=Role::create(['name'=>'Customer']);
        $role->permissions()->attach([14]);

        $role=Role::create(['name'=>'Editor']);
        $role->permissions()->attach([10]);

        $role=Role::create(['name'=>'Delivery']);
        $role->permissions()->attach([15,16]);

        $role=Role::create(['name'=>'Admin']);
        $role->permissions()->attach([3,4,5,6,7,8,9,2]);
    }
}
