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
        Role::create(['id'=>'1','name'=>'supervisor']);
        Role::create(['id'=>'2','name'=>'superadmin']);
        Role::create(['id'=>'3','name'=>'editor']);
        Role::create(['id'=>'4','name'=>'guest']);
        Role::create(['id'=>'5','name'=>'customer']);
        Role::create(['id'=>'6','name'=>'support']);
        Role::create(['id'=>'7','name'=>'delivery']);
    }
}
