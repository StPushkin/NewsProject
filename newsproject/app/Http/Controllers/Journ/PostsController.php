<?php

namespace App\Http\Controllers\Journ;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        
            $posts = Article::latest()->paginate($perPage);
        

        return view('journalist.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('journalist.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Article::create($requestData);

        return redirect('journalist/posts')->with('flash_message', 'Post added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $post = Article::findOrFail($id);

        return view('journalist.posts.show', compact('post'));
    }
    public function cate() 
    {   
        $jr=\DB::select('select * from journalist');
        $cate=\DB::select('select * from category');
        return view('journalist.posts.create',compact('cate','jr'));
    }
    public function cateid($id) 
    {
        $cat = Article::findOrFail($id);
        $cate=\DB::select('select * from category');
        return view('journalist.posts.create',compact('cate','cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $post = Article::findOrFail($id);

        return view('journalist.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $post = Article::findOrFail($id);
        $post->update($requestData);

        return redirect('journalist/posts')->with('flash_message', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Article::destroy($id);

        return redirect('journalist/posts')->with('flash_message', 'Post deleted!');
    }
}
