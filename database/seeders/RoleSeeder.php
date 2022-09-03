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

        $role=Role::create(['name'=>'Moderator']);

        $role=Role::create(['name'=>'Guest']);

        $role=Role::create(['name'=>'Support']);

        $role=Role::create(['name'=>'Customer']);
        $role=Role::create(['name'=>'Editor']);
        $role=Role::create(['name'=>'Delivery']);
        $role=Role::create(['name'=>'Admin']);
    }
}
