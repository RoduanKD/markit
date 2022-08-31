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
        Role::create(['name'=>'supervisor']);
        Role::create(['name'=>'superadmin']);
        Role::create(['name'=>'editor']);
        Role::create(['name'=>'guest']);
        Role::create(['name'=>'customer']);
        Role::create(['name'=>'support']);
        Role::create(['name'=>'delivery']);
    }
}
