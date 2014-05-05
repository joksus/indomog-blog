@extends('layout')
@include('user_nav')
@section('body-section')
@section('body-section')
	@if(Session::has('message'))
		<div class="alert alert-danger">{{ Session::get('message') }}</div>
	@endif

	{{Form::open(array('action' =>array('IndexController@login'),  'method' => 'post'))}}
	{{ Form::label('username','Username : ')}}
	{{ Form::text('username', '', array('class' => 'form-control'))}} <br>
	{{ Form::label('password','Password : ')}}
	{{ Form::text('password', '',array('class' => 'form-control'))}} <br>
	{{ Form::submit('Submit', array('class' => 'btn')) }}

	{{ Form::close() }}
@stop