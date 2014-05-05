<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<div align="right" >
<a href="http://localhost/indomog-blog/public/">Logout</a>
</div>
<h2 align="center">Home indomog blog</h2>
<div align="left" >
<a href="http://localhost/indomog-blog/public/post/add">Add Post</a>
</div>
@foreach ($post as $post)
<ul>
{{Form::open(array('action' => 'CommentControl@addComment', 'method' => 'post'))}}
<li> {{ Form::text('id_post', $post->id) }} </li>
<li> {{ $post->title }} </li>
<li> {{ $post->author }} </li>
<li> {{ $post->body_content }} 
{{ link_to_route('edit', 'edit', array('id' => $post->id), array('class' => 'btn btn-info')) }} 
</li>
<ul>
        <li>
            {{ Form::label('comment', 'comment :') }}
            {{ Form::text('comment') }}
        </li>
        {{ Form::submit('Submit', array('class' => 'btn')) }}
    </ul>
{{ Form::close() }}
@foreach ($post->comment as $c)
{{ $c->comment }} <br>
@endforeach
</ul>
@endforeach
</body>
</html>
