<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

<<<<<<< HEAD
use App\Models\Order;
=======
use App\Models\Product;
>>>>>>> d9d05d89c4d612cd0b2aacfe04e1c12032af33b4
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
         $this->call(OrderSeeder::class);
=======
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@markit.test',
        ]);

        $product = Product::create([
            'name' => [
                'en' => 'Product',
                'ar' => 'منتج',
            ],
            'description' => [
                'en' => 'Product',
                'ar' => 'منتج',
            ],
            'price' => 1000000,
            'quantity' => 1,
            'category_id' => 1,
            'currency_id' => 1,
            'area_id' => 1,
            'owner_id' => 1,
        ]);

        $this->call([
            CountrySeeder::class,
            CitySeeder::class,
            AreaSeeder::class,
        ]);
>>>>>>> d9d05d89c4d612cd0b2aacfe04e1c12032af33b4
    }
}
