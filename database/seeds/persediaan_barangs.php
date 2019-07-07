<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class persediaan_barangs extends Seeder
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
            DB::table('persediaan_barangs')->insert([
                'nama_barang' => $faker->word,
                'satuan' => $faker->fileExtension,
                'tanggal_spk' => $faker->date('Y-m-d','now'),
                'nomor_spk' => $faker->numberBetween(1000,9999),
                'tanggal_barang_masuk' => $faker->date('Y-m-d','now'),
                'jumlah_barang_masuk' => $faker->numberBetween(1,100)
            ]);
        }
    }
}
