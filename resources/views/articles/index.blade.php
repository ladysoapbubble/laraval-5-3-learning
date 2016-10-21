@extends('layouts.app')
@section('content')
<div class="title">Articles</div>


    @foreach( $articles as $article)
        <div class="blog-post">
            <h2 class="blog-post-title"> <a href="{{ url('/articles', $article->id) }}"> {{$article->name}}</a>
            @if(Auth::check())

            <a href="{{ url('/articles/'. $article->id . '/edit') }}" class="btn btn-warning btn-xs ">Edit</a>
            @endif
            </h2>

            <p class="blog-post-meta">{{$article->published_at->diffForHumans()}} </p>
            <p class="blog-post-meta">{{$article->user->name}}, {{$article->user->email}} </p>

            @foreach($article->tags as $tag)
                <span class="label label-default">{{$tag->name}}</span>
            @endforeach

        </div>

    @endforeach
@stop