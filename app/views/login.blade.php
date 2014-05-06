@extends('layout')
@include('user_nav')
@section('body-section')
@section('body-section')
	@if(Session::has('message'))
		<div class="alert alert-danger">{{ Session::get('message') }}</div>
	@endif
	
	{{Form::open(array('action' =>array('IndexController@login'),  'method' => 'post'))}}
	{{ Form::label('username','Username : ')}} {{ $errors->first('username') }}
	{{ Form::text('username', '', array('class' => 'form-control'))}} <br>
	{{ Form::label('password','Password : ')}} {{ $errors->first('password') }}
	{{ Form::password('password', array('class' => 'form-control'))}} <br>
	{{ Form::submit('Submit', array('class' => 'btn')) }}

	{{ Form::close() }}
@stop