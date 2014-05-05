<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<h2 align="center">Silahkan Login</h2>
<center>
@if(Session::has('pesan_error'))
<div class="alert alert-danger">{{ Session::get('pesan_error') }}</div>
@endif
{{Form::open(array('action' => 'LoginControl@authen', 'method' => 'post')) }}
{{Form::label('username', 'Username') }}
{{Form::text('username')}}
<br>
{{Form::label('password', 'Password') }}
{{Form::password('password')}}
<br>
{{Form::submit('Login') }}
{{Form::close() }}
</center>
</body>
</html>
 