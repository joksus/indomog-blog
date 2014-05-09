@extends('layout')
@include('user_nav')
@section('body-section')
<div class='content'>
        {{Form::open(array('action' => 'IndexController@postComment', 'method' => 'post'))}}
        <li style='visibility: hidden;'> {{ Form::text('id_post', $post->id) }} </li>
        <h1> {{ $post->title }} </h1>
        <p class='lead'> by {{ $post->author }} </p>
        <hr>

        <p> <span class='glyphicon glyphicon-time'></span> {{ $post->created_at }} <p>
        <hr>
        <p> {{ $post->body_content }} <p> 
        <hr>
        <div class='well'>
					{{ $errors->first('comment') }}
                    <h4>Leave a Comment:</h4>
                    <form role='form'>
                        <div class='form-group'>
                        	{{ Form::textarea('comment','', array('class' => 'form-control', 'rows' => '3')) }}
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
</div>
@stop
