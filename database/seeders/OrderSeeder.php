<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
                     'buyer_id' => '1' ,
                     'seller_id' => '5' ,
                     'product_id' => '1',
                     'payment_method' => '2',
                     'status' => '2',
                     'quantity' => '2']);
        Order::create([
                        'buyer_id' => '3' ,
                        'seller_id' => '2' ,
                        'product_id' => '2',
                        'payment_method' => '1',
                        'status' => '1',
                        'quantity' => '1']);
    }
}
