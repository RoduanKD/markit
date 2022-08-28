<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(['id'=>'1','country_id'=>'1','name'=>['en'=>'damascus','ar'=>'دمشق']]);
        City::create(['id'=>'2','country_id'=>'1','name'=>['en'=>'homs','ar'=>'حمص']]);
        City::create(['id'=>'3','country_id'=>'1','name'=>['en'=>'aleppo','ar'=>'حلب']]);
        City::create(['id'=>'4','country_id'=>'2','name'=>['en'=>'Beirut','ar'=>'بيروت']]);
        City::create(['id'=>'5','country_id'=>'2','name'=>['en'=>'saida','ar'=>'صيدا']]);
    }
}
