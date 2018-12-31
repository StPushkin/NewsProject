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
            'login' => 'jounrnalist',
            'email' => 'journal'.'@gmail.com',
            'password' => '654321',
            'journalist_name' => 'jhon',
            'journalist_surname' => 'jonovits',
            'journalist_biography' => 'booring biography',
        ]);
    }
}
