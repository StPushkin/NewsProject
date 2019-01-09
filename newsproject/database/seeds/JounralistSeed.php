<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JounralistSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('journalist')->insert([
            'login' => 'testjourn',
            'email' => 'journal'.'@gmail.com',
            'password' => '654321',
            'journalist_name' => 'Jhon',
            'journalist_surname' => 'Doe',
            'journalist_biography' => 'Testing journalist account',
        ]);
    }
}
