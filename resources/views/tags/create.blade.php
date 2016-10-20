@extends('layouts.app')

@section('page_title') New tag @stop
@section('content')

@include('errors.list')
{!! Form::open(['url'=> 'tags']) !!}
@include('tags._form', ['submitBtnText' => 'Create'])
{!! Form::close() !!}
@stop