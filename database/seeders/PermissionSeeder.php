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
        // permissions for super admin
            Permission::create(['name'=>'CRUD_Admins']);
            Permission::create(['name'=>'update_website_settings']);
        // permissions for  admin
        Permission::create(['name'=>'read_customers']);
        Permission::create(['name'=>'update_customers']);
        Permission::create(['name'=>'read_products']);
        Permission::create(['name'=>'update_products']);
        Permission::create(['name'=>'CRUD_countries']);
        Permission::create(['name'=>'CRUD_cities']);
        Permission::create(['name'=>'CRUD_areas']);
        // permissions for  moderator
        Permission::create(['name'=>'create_posts']);
        Permission::create(['name'=>'edit_posts']);
        Permission::create(['name'=>'delete_posts']);
        Permission::create(['name'=>'edit_profile']);
        // permissions for customer
        Permission::create(['name'=>'create_products']);
        // permissions for delivery
        Permission::create(['name'=>'read_delivery_tasks']);
        Permission::create(['name'=>'update_delivery_tasks']);
    }
}
