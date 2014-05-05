<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<center>
	<h2>Silahkan Login</h2>
	@if(Session::has('pesan'))
	<div class="alert alert-success">{{ Session::get('pesan') }}</div>
	@endif
</center>
<table align="center">
{{Form::open(array('action' => 'LoginControl@authen', 'method' => 'post')) }}

	<tr>
		<td>{{Form::label('username', 'Username') }}</td>
		<td>{{Form::text('username',Input::old('username'),array('placeholder'=>'Input your username'))}}</td>
	</tr>
	<tr>
		<td>{{Form::label('password', 'Password') }}</td>
		<td>{{Form::password('password',array('placeholder'=>'Input your password'))}}</td>
	</tr>
	<tr>
		<td align="right">{{Form::submit('Login') }}</td>
		<td align="right"><a href="http://localhost/indomog-blog/public/">Home</a></td>
	</tr>
	{{Form::close() }}
	
</table>

</center>
</body>
</html>
 