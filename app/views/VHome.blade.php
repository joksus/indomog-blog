<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<div align="right" >
<a href="http://localhost/indomog-blog/public/login">Login</a>
<a href="http://localhost/indomog-blog/public/regis">Registrasi</a>
</div>
<h2 align="center">Home indomog blog</h2>
<table border="1" align="center">
	<tr>
		<td>Title</td>
		<td>Author</td>
		<td>Content</td>
	</tr>
	@foreach ($post as $po)
	<tr>
		<td>{{ $po->title }} </td>
		<td> {{ $po->author }} </td>
		<td> {{ $po->body_content }} 
	</tr>
	@endforeach
</table>
</body>
</html>
