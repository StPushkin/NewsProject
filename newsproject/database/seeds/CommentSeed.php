<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
            'comment_text' =>'Wikipedia seems to think hydrazine freezes at 2°C. Just what sort of snow are you shovelling that is still frozen at 2°C?',
           
        ]);
    }
}
