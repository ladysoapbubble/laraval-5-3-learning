@extends('layouts.app')

@section('page_title') New article @stop
@section('content')

@include('errors.list')
{!! Form::open(['url'=> 'articles']) !!}
@include('articles._form', ['submitBtnText' => 'Create'])
{!! Form::close() !!}
@stop