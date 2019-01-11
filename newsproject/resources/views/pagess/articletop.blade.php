@extends('layouts.app')   
    @section('content')
    <h1 class="text-center bg-primary">Top Articles</h1>
        @foreach ($articles as $article)
            <div class="list-group">
                <a  class="list-group-item list-group-item-info" href="view/{{$article->id}}">{{ $article->article_title }}</a>  
            </div>
        @endforeach
@stop