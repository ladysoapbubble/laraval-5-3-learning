@extends('layouts.app')
@section('content')
<h1>{{$article->name}}</h1>
    <p>
        {{$article->text}}
    </p>

@stop