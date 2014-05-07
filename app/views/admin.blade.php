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
		<p> {{ $post->body_content }} <p>
			 {{ link_to_route('edit', 'edit', array('id' => $post->id), array('class' => 'btn btn-default')) }} 
			 {{ link_to_route('delete', 'delete', array('id' => $post->id), array('class' => 'btn btn-primary')) }} 
		<hr>
		<div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                        {{ Form::textarea('comment','', array('class' => 'form-control', 'rows' => '3')) }}
                        </div>
                        	{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
                    </form>
        </div> 
		{{ Form::close() }}
		<hr>
		@foreach ($post->comments as $c)
			<h3> Animous <small>{{ $c->created_at}}</small></h3>
			<p> {{ $c->comment }} {{ link_to_route('delete_comment', 'Delete Komen', array('id' => $c->id), array('class' => 'pull-right')) }} </p> 

			<hr>
		@endforeach

	</div>
	@endforeach

@stop


