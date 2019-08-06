<?php

use Illuminate\Database\Seeder;

class jenis_tikets extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_tikets')->insert([
            'jenis' => 'Nota Dinas',
        ]);
        DB::table('jenis_tikets')->insert([
            'jenis' => 'Phone',
        ]);
        DB::table('jenis_tikets')->insert([
            'jenis' => 'Whatsapp',
        ]);
        DB::table('jenis_tikets')->insert([
            'jenis' => 'Langsung',
        ]);
    }
}
