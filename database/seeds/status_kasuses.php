<?php

use Illuminate\Database\Seeder;

class status_kasuses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_kasuses')->insert([
            'status' => 'Open',
        ]);
        DB::table('status_kasuses')->insert([
            'status' => 'Pending',
        ]);
        DB::table('status_kasuses')->insert([
            'status' => 'On Hold',
        ]);
        DB::table('status_kasuses')->insert([
            'status' => 'Closed',
        ]);
    }
}
