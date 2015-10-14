@extends('app')

@section('content')




{!! Form:: open(array('url'=>'/auth/login'))!!}
{!! Form:: label('email','Email')!!}
{!! Form:: text('email',null,['class'=>'form-control']) !!}

{!! Form:: label('password','Password')!!}
{!! Form:: password('password',null,['type'=>'password','class'=>'form-control']) !!}

{!! Form:: submit('Login',['class'=>'btn btn-success glyphicon glyphicon-ok','style'=>'float: right'])!!}



{!! Form:: close()!!}

<!--<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>-->

@stop