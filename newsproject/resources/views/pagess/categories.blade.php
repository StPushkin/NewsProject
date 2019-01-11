@extends('layouts.app')   
    @section('content')
    <h1 class="text-center bg-primary">Categories</h1>
        @foreach ($categories as $category)
            <div class="list-group">
                <a  class="list-group-item list-group-item-info" href="categories/{{$category->id}}">{{ $category->category_name}}</a>  
            </div>
        @endforeach
@stop