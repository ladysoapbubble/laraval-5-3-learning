@extends('layouts.app')

@section('page_title') Edit article @stop
@section('content')

@include('errors.list')
{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
@include('articles._form', ['submitBtnText' => 'Update'])
{!! Form::close() !!}
@stop