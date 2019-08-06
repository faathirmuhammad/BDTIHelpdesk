<?php

use Illuminate\Database\Seeder;

class daftar_kasuses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftar_kasuses')->insert([
            'kasus' => 'Internet dan Jaringan',
        ]);
        DB::table('daftar_kasuses')->insert([
            'kasus' => 'Sistem Operasi',
        ]);
        DB::table('daftar_kasuses')->insert([
            'kasus' => 'Hardware',
        ]);
        DB::table('daftar_kasuses')->insert([
            'kasus' => 'Software',
        ]);
        DB::table('daftar_kasuses')->insert([
            'kasus' => 'Aplikasi Internal',
        ]);
        DB::table('daftar_kasuses')->insert([
            'kasus' => 'Pengembangan Jaringan',
        ]);
        DB::table('daftar_kasuses')->insert([
            'kasus' => 'Lain-lain',
        ]);
    }
}
