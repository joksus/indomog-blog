 @if(Session::has('pesan_error'))
   <div class="alert alert-danger">{{ Session::get('pesan_error') }}</div>
 @endif
{{Form::open(array('action' => 'LoginControl@authen', 'method' => 'get')) }}
{{Form::label('username', 'Username') }}
{{Form::text('username')}}<br>
{{Form::label('password', 'Password') }}
{{Form::password('password')}}
{{Form::submit('Login') }}
{{Form::close() }}