@extends('app')

@section('content')
	
<!--<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>-->

{!! Form:: open(array('url'=>'/auth/register'))!!}
{!! Form:: label('name','Name')!!}
{!! Form:: text('name',null,['class'=>'form-control']) !!}

{!! Form:: label('email','Email')!!}
{!! Form:: email('email',null,['class'=>'form-control']) !!}

{!! Form:: label('password','Password')!!}
{!! Form:: password('password',null,['class'=>'form-control']) !!}

{!! Form:: label('password_confirmation','Confirme Senha')!!}
{!! Form:: password('password_confirmation',null,['class'=>'form-control']) !!}

{!! Form:: submit('Registrar',['class'=>'btn btn-success glyphicon glyphicon-ok','style'=>'float: right'])!!}


{!! Form:: close()!!}


@stop