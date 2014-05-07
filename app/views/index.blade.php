@extends('layout')
@include('user_nav')
@section('body-section')

	@foreach ($post as $post)
	<div class='content'>
		{{Form::open(array('action' => 'IndexController@postComment', 'method' => 'post'))}}
		<li style='visibility: hidden;'> {{ Form::text('id_post', $post->id) }} </li>
		<h1> {{ $post->title }} </h1>
		<p> by {{ $post->author }}  <span class="glyphicon glyphicon-time"></span> {{ $post->created_at }}  </p>
		<hr>
		<p> {{ substr($post->body_content, 0 , 325); }} <p> 
			{{ link_to_route('single', 'read more', array('id' => $post->id), array('class' => 'btn btn-info')) }} 
		<hr>
	</div>	
	@endforeach

@stop


