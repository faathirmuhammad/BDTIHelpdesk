<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=0;$i<=50;$i++){
            DB::table('petugas')->insert([
                'nama' => $faker->name,
                'phone' => $faker->phoneNumber,
                'spesialisasi' => $faker->jobTitle
            ]);
        }
    }
}
