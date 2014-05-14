@extends('layout')
@include('nav')
@section('body-section')
<div class='content'>
	@if(Session::has('message'))
		<div class="alert alert-danger">{{ Session::get('message') }}</div>
	@endif
	
	{{Form::open(array('action' =>array('IndexController@login'),  'method' => 'post'))}}
	{{ Form::label('username','Username : ')}}
	{{ "<span class='label label-warning'>",$errors->first('username'),"</span>" }}
	{{ Form::text('username', '', array('class' => 'form-control'))}} <br>
	{{ Form::label('password','Password : ')}}
	{{ "<span class='label label-warning'>",$errors->first('password'),"</span>" }}
	{{ Form::password('password', array('class' => 'form-control'))}} <br>
	{{ Form::submit('Submit', array('class' => 'btn')) }}

	{{ Form::close() }}
</div>
@stop