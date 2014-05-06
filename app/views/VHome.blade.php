@extends('layout')
@include('user_nav')
@section('body-section')
@foreach ($post as $post)
	{{Form::open()}}
		<li style='visibility: hidden;'> {{ Form::text('id_post', $post->id) }} </li>
		<h1> {{ $post->title }} </h1>
		<p class="lead"> by {{ $post->author }} </p>
		<hr>
			<p> <span class="glyphicon glyphicon-time"></span> {{ $post->created_at }} <p>
		<hr>
		<p> {{ $post->body_content }} <p>
			<hr>	
	{{ Form::close() }}
	@foreach ($post->comment as $c)
		<h3> Animous <small>{{ $c->created_at}}</small></h3>
		<p> {{ $c->comment }} </p>
		<hr>
	@endforeach
@endforeach
@stop
