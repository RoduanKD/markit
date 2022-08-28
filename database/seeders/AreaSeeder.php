<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create(['id'=>'1','city_id'=>'1','name'=>['en'=>'mohajreen','ar'=>'مهاجرين']]);
        Area::create(['id'=>'2','city_id'=>'1','name'=>['en'=>'Bab Toma','ar'=>'باب توما']]);
        Area::create(['id'=>'3','city_id'=>'4','name'=>['en'=>'rawsha','ar'=>'الروشة']]);
        Area::create(['id'=>'4','city_id'=>'4','name'=>['en'=>'ALHamra Street','ar'=>'شارع الحمرا']]);
    }
}
