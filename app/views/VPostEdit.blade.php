<!DOCTYPE html>
<html>
<head>
	<title>Edit Post</title>
</head>
<body>
<h2 align="center"> Edit Post </h2>
<center>
	{{Form::open(array('action' =>array('PostControl@postEdit', 'id'=>$post->id), 'method' => 'post'))}}

	{{ Form::textarea('body_content',$post->body_content, array('class' => 'form-control', 'rows' => '15')) }}{{$errors->first('body_content')}}
<hr>
	{{ Form::submit('Update', array('class' => 'btn')) }}
	{{ Form::close() }}
	
</center>
</body>
</html>
