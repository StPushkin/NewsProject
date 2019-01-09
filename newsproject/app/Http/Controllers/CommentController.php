<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
