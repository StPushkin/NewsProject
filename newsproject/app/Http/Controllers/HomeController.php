<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('pagess/welcom');
    }

    public function articles() 
    {
        $articles=\DB::select('select * from article order by article_title');
        return view('pagess.articles',compact('articles'));
    }
   
    
    public function articlesByCategory($id)
    {
        $articles=\App\Category::where('id', $id)->first()->articles()
               ->orderBy('article_creatingdate', 'desc')->get();
        return view();
    }

    public function articlesByTop()
    {
        $articles=\App\Article::where('article_istop', 1)->first()->articles()
                ->orderBy('article_creatingdate', 'desc')->get();
        return view();
    }

    public function categories()
    {
        $categories=\App\Category::all();
        return view();
    }
    


}
