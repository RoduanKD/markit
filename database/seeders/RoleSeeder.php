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
        Role::create(['name'=>'Admin']);
        Role::create(['name'=>'SuperAdmin']);
        Role::create(['name'=>'Moderator']);
        Role::create(['name'=>'Guest']);
        Role::create(['name'=>'Support']);
        Role::create(['name'=>'Customer']);
        Role::create(['name'=>'Editor']);
        Role::create(['name'=>'Delivery']);
    }
}
