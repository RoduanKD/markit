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
        Permission::create(['id'=>'1','name'=>'create_post']);
        Permission::create(['id'=>'2','name'=>'edit_post']);
        Permission::create(['id'=>'3','name'=>'create_user']);
        Permission::create(['id'=>'4','name'=>'delete_posts']);
        Permission::create(['id'=>'5','name'=>'write_comment']);
        Permission::create(['id'=>'6','name'=>'block_user']);
        Permission::create(['id'=>'7','name'=>'buy_products']);
    }
}
