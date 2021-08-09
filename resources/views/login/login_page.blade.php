@if (Auth::check())
    <h2>You are logged in </h2>
    {!! Form::open(['route'=>'logout', 'method'=>'POST']) !!}
    {!! Form::submit('Log out') !!}
    {!! Form::close() !!}
@else
    
{!! Form::open(['route'=>'login', 'method'=>'POST']) !!}

{!! Form::label('email', 'Email', ['class'=>'form-control']) !!}
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'example@example.com']) !!}

<br>
{!! Form::label('password', 'Password', ['class'=>'form-control']) !!}
{!! Form::password('password', ['class'=>'form-control']) !!}
<br>

{!! Form::label('remember', 'remember me', ['class'=>'form-control']) !!}
{!! Form::checkbox('remember', '1', true, ['class'=>'form-control']) !!}
<br>

{!! Form::submit('Login', ['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}
@endif
