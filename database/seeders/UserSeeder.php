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
        User::create(['id'=>'1','firstname =>mhd','lastname=>dhmsa','email'=>'mhd@mhd.com','username'=>'mhd10','phone'=>'0968462377','is_male'=>'true','birthdate'=>'27/5/2000','password'=>'123456654321']);
        User::create(['id'=>'2','firstname =>hala','lastname=>sdasdas','email'=>'hala@mhd.com','username'=>'hala','phone'=>'0968462378','is_male'=>'false','birthdate'=>'27/6/2000','password'=>'123456654324']);
        User::create(['id'=>'3','firstname =>fthi','lastname=>dsfsdf','email'=>'fthi@mhd.com','username'=>'fthi','phone'=>'0968462374','is_male'=>'true','birthdate'=>'27/7/2000','password'=>'123456654322']);
        User::create(['id'=>'4','firstname =>samira','lastname=>sdfsdf','email'=>'smira@mhd.com','username'=>'smira','phone'=>'0968462375','is_male'=>'false','birthdate'=>'27/8/2000','password'=>'123456654323']);
    }
}
