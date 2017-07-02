<?php

use Illuminate\Database\Seeder;

class TokenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('token')->insert([
            'nip' => rand(0,1555555555),
            'token' => rand(0,9999999),
        ]);
    }
}
