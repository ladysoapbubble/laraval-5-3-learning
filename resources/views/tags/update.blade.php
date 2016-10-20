@extends('layouts.app')

@section('page_title') Edit tag @stop
@section('content')

@include('errors.list')
{!! Form::model($tag, ['method' => 'PATCH', 'action' => ['TagsController@update', $tag->id]]) !!}
@include('tags._form', ['submitBtnText' => 'Update'])
{!! Form::close() !!}
@stop