<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\contact;  // load model in seeding file


Use Faker\Factory as faker;

class contactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        // seeding 
        $data=new contact;
        $data->name="mahesh";
        $data->email="mahesh@gmail.com";
        $data->comment="demo comment";
        $data->save();
        
        */

       /*
       Faker is a PHP library that generates fake data for you. Whether you need to bootstrap 
       your database, create good-looking XML documents, fill-in your persistence to stress test 
       it, or anonymize data taken from a production service, Faker is for you.

       */
        
        for($i=1;$i<=100;$i++)
        {
            $faker= Faker::create();
            $data=new contact;
            $data->name=$faker->name;
            $data->email=$faker->email;
            $data->comment=$faker->address;
            $data->save();
        }
    }
}
