<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\user;
Use Faker\Factory as faker;


class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=100;$i++)
        {
            $faker= Faker::create();
            $data=new user;
            $data->name=$faker->name;
            $data->email=$faker->email;
            $data->password=$faker->password;
            $data->gender="Male";
            $data->lag="Hindi,English";
            $data->mobile="1234567891";
            $data->img="download.jpg";
            $data->cid="1";
            $data->save();
        }
    }
}
