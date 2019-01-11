<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
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
