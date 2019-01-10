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
            'article_title' =>'Voyager 2 spacecraft enters interstellar space',
            'article_text' =>'Voyager 2 has entered interstellar space. The spacecraft slipped out of the huge bubble of particles that encircles the solar system on November 5, becoming the second ever human-made craft to cross the heliosphere, or the boundary between the sun and the stars.',
            'article_image' =>'C:\xampp\htdocs\NewsProject\newsproject\public\images\121018_LG_Voyager-2_feat.jpg',
            'article_istop' =>false,
            'article_category_id'=>'1',
            'article_journalist_id'=>'1'
        ]);
        DB::table('article')->insert([
            'article_title' =>'Voyager 3 spacecraft enters interstellar space',
            'article_text' =>'Voyager 3 has entered interstellar space. The spacecraft slipped out of the huge bubble of particles that encircles the solar system on November 5, becoming the second ever human-made craft to cross the heliosphere, or the boundary between the sun and the stars.',
            'article_image' =>'C:\xampp\htdocs\NewsProject\newsproject\public\images\121018_LG_Voyager-2_feat.jpg',
            'article_istop' =>false,
            'article_category_id'=>'1',
            'article_journalist_id'=>'1'
        ]);
    }
}
