<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function welcom()
    {
        return view('pagess/welcom');
    }

    public function articles() 
    {
        $articles=\DB::select('select * from article order by article_title');
        $cat=\DB::select('select * from category');
        return view('pagess.articles',compact('articles','cat'));
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
    public function journal() 
    {
        $journal=\DB::select('select * from journalist order by journalist_name');
        return view('pagess.article',compact('journal'));
    }
 
  
    public function articlesById($id)
    {
        $art=\App\Article::find($id);
        return view('pagess.articles', compact('art'));
    }


}
