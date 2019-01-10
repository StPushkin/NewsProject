<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login' => 'test',
            'email' => 'test'.'@gmail.com',
            'password' => '123456',
        ]);
    }
}
