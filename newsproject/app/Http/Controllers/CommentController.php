<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
class CommentController extends Controller
{
    public function addComment(Request $request) {
        $this->validate($request,[
            'comment_text'=>'required',
            'comment_user_id'=>'required',
            'comment_article_id'=>'required'
        ]);
        $comment=new Comment;
        $comment->comment_text=$request->comment_text;
        $comment->comment_user_id=$request->comment_user_id;
        $comment->comment_article_id=$request->comment_article_id;
        $comment->save();
		return back();
    }
    public function store(Request $request, Article $article) {

        $this->validate($request, [
            'body' => 'required|min:2',
            'author' => 'required',
        ]);
        $article = Article::find($request->id);

        $article->comments()->create([
            'body' => $request->comment_text,
            'author' => $request->comment_user_id,
            'comment_article_id' => $request->comment_article_id,
        ]);

        

    }

    public function destroy(Comment $comment) {
        $comment->delete();
        return back();
    }

    

}
