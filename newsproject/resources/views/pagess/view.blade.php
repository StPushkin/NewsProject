@extends('layouts.app')


{{-- Content --}}
@section('content')
    
 
@foreach ($articles as $articl)
    @foreach ($journal as $journ)
    @if($articl->article_journalist_id==$journ->id && $article->id==$articl->id)
            <div class="list-group">
            <a   >name journalist: </a> 
                <a  class="list-group-item list-group-item-info" >{{ $journ->journalist_name }}</a>   
                 
                <a   >ARTICLE: </a> <a>{!! $article->article_text !!}</a>
    
            </div>
            @foreach($comment as $comm)
            @if($comm->comment_article_id==$articl->id)
            <a   >COMMENT: </a> 
            <a  class="list-group-item list-group-item-info" >{{ $comm->comment_text }}</a>   
            @endif
            @endforeach
            @endif
        @endforeach
        @endforeach
@endsection
