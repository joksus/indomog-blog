<!DOCTYPE html>
<html>
<head>
	<title>Add New Post</title>
</head>
<body>
<h2 align="center"> Add New Post </h2>
<center>
	{{Form::open(array('action'=>'PostControl@savePost','method'=>'post'))}}
	{{Form::label('title','Title')}}
	{{Form::text('title')}}
	<br>
	{{Form::label('author','Author')}}
	{{Form::text('author')}}
	<br>
	{{Form::label('body_content','Content')}}
	{{Form::textarea('body_content')}}
	<br>
	{{Form::submit('save')}}
	{{Form::close() }}
	{{Form::open(array('action' => 'PostControl@showHomeBlog', 'method' => 'get')) }}
	{{Form::submit('Home')}}
	{{Form::close() }}
</center>
</body>
</html>
