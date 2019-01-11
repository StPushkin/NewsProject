<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function welcom()
    {
        $articles=\DB::select('select * from article order by article_title');
        return view('pagess/welcom',compact ('articles'));
    }

    public function articles() 
    {
        $articles=\DB::select('select * from article order by article_creatingdate');
        return view('pagess.articles',compact('articles','cat'));
    }
   
    
    public function articlesByCategory($id)
    {
        $articles=\App\Category::where('id', $id)->first()->articles()->get();
        return view('pagess.articles',compact('articles'));
    }

    public function articlesByTop()
    {
        $articles=\App\Article::where('article_istop', 1)->get();
        return view('pagess.articletop',compact('articles'));
    }

    public function categories()
    {
        $categories=\App\Category::all();
        return view('pagess.categories',compact('categories'));
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
