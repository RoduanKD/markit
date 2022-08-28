<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create(['id'=>'1','name'=>['en'=>'syria','ar'=>'سوريا']]);
        Country::create(['id'=>'2','name'=>['en'=>'lebanon','ar'=>'لبنان']]);
    }
}
