@extends('layout')
@include('admin_nav')
@section('body-section')
	@foreach ($post as $post)
		{{Form::open(array('action' => 'IndexController@postComment', 'method' => 'post'))}}
		<li style='visibility: hidden;'> {{ Form::text('id_post', $post->id) }} </li>
		<h1> {{ $post->title }} </h1>
		<p class="lead"> by {{ $post->author }} </p>
		<hr>
		<p> <span class="glyphicon glyphicon-time"></span> {{ $post->created_at }} <p>
		<hr>
		<p> {{ $post->body_content }} <p>
			 {{ link_to_route('edit', 'edit', array('id' => $post->id), array('class' => 'btn btn-info')) }} 
			 {{ link_to_route('delete', 'delete', array('id' => $post->id), array('class' => 'btn btn-info')) }} 
		<hr>
		<div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                        	<textarea class="form-control" rows="3" id='comment'></textarea>
                        </div>
                        	{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
                    </form>
        </div> 
		{{ Form::close() }}
		@foreach ($post->comments as $c)
			<h3> Animous <small>{{ $c->created_at}}</small></h3>
			<p> {{ $c->comment }} </p>
			<hr>
		@endforeach
	@endforeach

@stop


