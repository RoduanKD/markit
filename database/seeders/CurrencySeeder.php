<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create(['id' => '1', 'name' => ['en' => 'syrian pounds', 'ar' => 'ليرة سورية'],'symbol' => 'SP','rate' => 1]);
        Currency::create(['id' => '2', 'name' => ['en' => 'us dollars', 'ar' => 'دولار أمريكي'],'symbol' => '$','rate' => 4500]);
    }
}
