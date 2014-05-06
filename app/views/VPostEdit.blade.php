@extends('layout')
@include('admin_nav')
@section('body-section')
@section('body-section')
	{{Form::open(array('action' =>array('PostControl@postEdit', 'id'=>$post->id), 'method' => 'post'))}}

	{{ Form::textarea('body_content',$post->body_content, array('class' => 'form-control', 'rows' => '15')) }}{{$errors->first('body_content')}}
<hr>
	{{ Form::submit('Update', array('class' => 'btn')) }}
	{{ Form::close() }}
	
	@stop
