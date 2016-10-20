@extends('layouts.app')
@section('content')
<h1>{{$tag->name}}</h1>
    <p>
        {{$tag->text}}
    </p>

@stop