@extends('layout')
@include('user_nav')
@section('body-section')
@section('body-section')
<br>
<br>
<br>
@if(Session::has('pesan'))
	<div class="alert alert-success">{{ Session::get('pesan') }}</div>
@endif
{{Form::open(array('action' => 'LoginControl@authen', 'method' => 'post')) }}
	{{ Form::hidden('csrf_token', Session::getToken()) }}
	{{Form::label('username', 'Username') }}{{$errors->first('username')}}
	{{Form::text('username','',array('class' => 'form-control','placeholder'=>'Input your username'))}}
	
	{{Form::label('password', 'Password') }}{{$errors->first('password')}}
	{{Form::password('password',array('class' => 'form-control','placeholder'=>'Input your password'))}}
	<hr>
	
	{{Form::submit('Login') }}
{{Form::close() }}
@stop