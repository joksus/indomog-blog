@extends('layout')
@include('admin_nav')
@section('body-section')
	{{Form::open(array('action' =>array('IndexController@postUpdate', 'id'=>$post->id),  'method' => 'post'))}}
	
	{{ Form::textarea('body_content',$post->body_content, array('class' => 'form-control', 'rows' => '15')) }}
	<hr>
	{{ Form::submit('Update', array('class' => 'btn')) }}
	{{ Form::close() }}
@stop