<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function addArticle(Request $request) { 
        $this->validate($request,[
            'article_title'=>'required',
            'article_text'=>'required',
            'article_image',
            'article_category_id'=>'required',
            'article_journalist_id'=>'required'
        ]);
        $article=new Article;
        $article->article_title=$request->article_title;
        $article->article_text=$request->article_text;
        $article->article_image=$request->article_image;
        $article->article_category_id=$request->article_category_id;
        $article->aarticle_journalist_id=$request->article_journalist_id;
        $article->save();
		return back();
    }
    
    public function editArticle(Article $article) { 
		return view();
	}

    public function updateActor(Request $request, Article $actor) {
        $article->article_title=$request->article_title;
        $article->article_text=$request->article_text;
        $article->article_image=$request->article_image;
        $article->update();
		return redirect();
	} 
}
