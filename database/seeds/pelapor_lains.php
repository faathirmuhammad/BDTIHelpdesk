<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class pelapor_lains extends Seeder
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
            DB::table('pelaporlains')->insert([
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
