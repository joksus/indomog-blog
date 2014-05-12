@extends('layout')
@include('admin_nav')
@section('body-section')
	@foreach ($post as $post)
	<div class='content'>
		{{Form::open(array('action' => 'IndexController@postComment', 'method' => 'post'))}}
		<li style='visibility: hidden;'> {{ Form::text('id_post', $post->id) }} </li>
		<h1> {{ $post->title }} </h1>
		<p> by {{ $post->author }} <span class="glyphicon glyphicon-time"></span> {{ $post->created_at }} </p>
		<p>  <p>
		<hr>
			 {{ link_to_route('edit', 'edit', array('id' => $post->id), array('class' => 'btn btn-default')) }} 
			 {{ link_to_route('delete', 'delete', array('id' => $post->id), array('class' => 'btn btn-primary')) }}
			 {{ link_to_route('single', 'view', array('id' => $post->id), array(
			 																			'class' => 'btn btn-info',
			 																			'target' => '_blank')
			 																		)
			 																	}}
		{{ Form::close() }}
	</div>
	@endforeach
@stop

