<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
            'article_title' =>'Hello world',
            'article_text' =>'booring article text',
            'article_creatingdate' =>'today',
            'article_image' =>'beautiful image',
            'article_istop' =>false,
        ]);
    }
}
