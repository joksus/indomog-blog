<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
<h2 align="center">Form Registration</h2>
<center>
@if(Session::has('pesan'))
<div class="alert alert-success">{{ Session::get('pesan') }}</div>
@endif
<table align="center">
{{Form::open(array('action' => 'RegistrasiControl@store', 'method' => 'post')) }}

	<tr>
		<td>{{Form::label('username', 'Username') }}</td>
		<td>{{Form::text('username',Input::old('username'),array('placeholder'=>'Input your username'))}}</td>
	</tr>
	<tr>
		<td>{{Form::label('password', 'Password') }}</td>
		<td>{{Form::password('password',array('placeholder'=>'Input your password'))}}</td>
	</tr>
	<tr>
		<td>{{Form::label('email', 'email') }}</td>
		<td>{{Form::text('email',Input::old('email'),array('placeholder'=>'Input your email'))}}</td>
	</tr>
	<tr>
		<td align="right">{{Form::submit('Registrasi') }}</td>
		<td align="right"><a href="http://localhost/indomog-blog/public/">Home</a></td>
	</tr>
	{{Form::close() }}
	
</table>
</body>
</html>
