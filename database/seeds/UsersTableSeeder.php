<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Token;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i=0;
        while ($i<1000){
            $name = str_random(10);
            User::create([
                'name' => $name,
                'fullname' => str_random(8).' '.str_random(10) ,
                'role' => 'student',
                'password' => bcrypt('secret'),
            ]);
            Token::create([
                'name' => $name,
                'token'=> dechex(rand(1111111111,2009999999)) ,
                'use_status'=>'unused',
            ]);
            $i++;
        }

    }
}
