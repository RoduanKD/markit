<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['firstName' =>'mhd','lastName'=>'dhmsa','email'=>'mhd@mhd.com','userName'=>'mhd10','phoNe'=>'0968462377','is_male'=>true,'birthdate'=>'2000-5-27','password'=>'123456654321']);
        User::create(['firstName' =>'hala','lastName'=>'sdasdas','email'=>'hala@mhd.com','userName'=>'hala','phoNe'=>'0968462378','is_male'=>false,'birthdate'=>'2000-6-27','password'=>'123456654324']);
        User::create(['firstName' =>'fthi','lastName'=>'dsfsdf','email'=>'fthi@mhd.com','userName'=>'fthi','phoNe'=>'0968462374','is_male'=>true,'birthdate'=>'2000-7-27','password'=>'123456654322']);
        User::create(['firstName' =>'samira','lastName'=>'sdfsdf','email'=>'smira@mhd.com','userName'=>'smira','phone'=>'0968462375','is_male'=>false,'birthdate'=>'2000-8-27','password'=>'123456654323']);
    }
}
