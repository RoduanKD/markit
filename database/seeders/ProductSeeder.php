<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
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
    }
}
