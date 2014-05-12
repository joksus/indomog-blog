@extends('layout')
@include('nav')
@section('body-section')

	@foreach ($post as $p)
	<div class='content'>
		{{Form::open(array('action' => 'IndexController@postComment', 'method' => 'post'))}}
		<li style='visibility: hidden;'> {{ Form::text('id_post', $p->id) }} </li>
		<h1> {{ link_to_route('single', $p->title, array('id' => $p->id)) }}</h1>
		<p> by {{ $p->author }}  <span class='glyphicon glyphicon-time'></span> {{ $p->created_at }}  </p>
		<hr>
		<p> {{ substr($p->body_content, 0 , 325); }} <p> 
			{{ link_to_route('single', 'read more', array('id' => $p->id), array('class' => 'btn btn-info')) }} 
	</div>	
	@endforeach
	{{ $post->links() }}
@stop

