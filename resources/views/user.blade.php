<h1>Hello User</h1>
{!! Form::open(['route'=>'logout', 'method'=>'POST']) !!}
{!! Form::submit('Log out') !!}
{!! Form::close() !!}