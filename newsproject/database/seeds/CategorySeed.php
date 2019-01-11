<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'category_name' =>'Cosmology',
        ]);
        DB::table('category')->insert([
            'category_name' =>'Astronomy',
        ]);
        DB::table('category')->insert([
            'category_name' =>'Health',
        ]);
        DB::table('category')->insert([
            'category_name' =>'Earth',
        ]);
        DB::table('category')->insert([
            'category_name' =>'Ecosystems',
        ]);
    }
}
