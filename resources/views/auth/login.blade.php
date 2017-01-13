@extends('templates.main')
@section('tittle','Inicio de session')
@section('content')


    {!! Form::open(['route'=>'auth.login','method'=>'POST']) !!}
        <div class="form-group col-md-12 col-sm-12 col-lg-12">
                {!! Form::label('email','Nombre de usuario') !!}
                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Nombre de usuario'])!!}
        </div>
        <div class="form-group col-md-12 col-sm-12 col-lg-12">
                {!! Form::label('password','contraseña') !!}
                {!! Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña'])!!}
            </div>
            <div class="col-sm-12">
                      {!! Form::submit('Crear', ['class' => 'btn btn-success ' ] ) !!}
            </div>
    {!! Form::close()!!}
@endsection
