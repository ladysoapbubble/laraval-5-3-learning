@extends('layouts.app')
@section('content')
<div class="title">Tags</div>


    @foreach( $tags as $tag)
        <div class="blog-post">
            <h2 class="blog-post-title"> <a href="{{ url('/tags', $tag->id) }}"> {{$tag->name}}</a></h2>
        </div>
    @endforeach
@stop