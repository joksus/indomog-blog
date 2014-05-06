
@foreach ($post as $post)

{{Form::open(array('action' => 'CommentController@postComment', 'method' => 'post'))}}
{{Form::text('id_post', $post->id)}}
	{{ $post->title }} 
	{{ $post->author }} 
	{{ $post->body_content }}


{{Form::label('comment', 'comment :')}}
{{Form::text('comment')}}
{{Form::submit('submit', array('class' => 'btn'))}}

{{Form::close()}}

	@foreach ($post->comment as $c)
	{{$c->comment}}
	@endforeach

@endforeach
