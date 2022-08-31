<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=>'create_post']);
        Permission::create(['name'=>'edit_post']);
        Permission::create(['name'=>'create_user']);
        Permission::create(['name'=>'delete_posts']);
        Permission::create(['name'=>'write_comment']);
        Permission::create(['name'=>'block_user']);
        Permission::create(['name'=>'buy_products']);
    }
}
