<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class sigotas extends Seeder
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
            DB::table('sigotas')->insert([
                'nama' => $faker->name,
                'fraksi' => $faker->city,
                'gedung' => $faker->company,
                'lantai' => $faker->numberBetween(1,25),
                'ruang' => $faker->buildingNumber,
                'telp' => $faker->phoneNumber
            ]);
        }
    }
}
