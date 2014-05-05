<!DOCTYPE html>
<html>
<head>
	<title>Edit Post</title>
</head>
<body>
<h2 align="center"> Edit Post </h2>
<center>
	{{Form::open(array('action'=>'PostControl@postEdit','method'=>'post'))}}
	
	{{Form::label('body_content','Content')}}
	{{Form::textarea('body_content')}}
	<br>
	{{Form::submit('Edit')}}
	{{Form::close() }}
	
</center>
</body>
</html>
