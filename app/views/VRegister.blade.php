@if(Session::has('pesan'))
  <div class="alert alert-success">{{ Session::get('pesan') }}</div>
  @endif
{{Form::open(array('action'=>'RegistrasiControl@store'))}}
{{Form::label('username','Username')}}
{{Form::text('username')}}
<br>
{{Form::label('password','Password')}}
{{Form::password('password')}}
<br>
{{Form::label('email','Email')}}
{{Form::text('email')}}
<br>
{{Form::submit('Registrasi',array('class'=>'btn btn-primary'))}}
{{Form::close()}}