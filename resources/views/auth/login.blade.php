@extends('templates.main')
@section('tittle','Inicio de session')
@section('content')

 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
            <div class="panel-heading"> <h3>Iniciar Sesión </h3> </div>
          
                <div class="panel-body">

    {!! Form::open(['route'=>'auth.login','method'=>'POST']) !!}
        <div class="form-group col-md-12 col-sm-12 col-lg-12">
                {!! Form::label('email','Correo Electronico') !!}
                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'ejemplo@ejemplo.com'])!!}
        </div>
        <div class="form-group col-md-12 col-sm-12 col-lg-12">
                {!! Form::label('password','contraseña') !!}
                {!! Form::password('password',['class'=>'form-control','placeholder'=>'*********'])!!}
            </div>
            <div class="col-sm-12">
                      {!! Form::submit('Ingresar', ['class' => 'btn btn-success ' ] ) !!}
            </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    {!! Form::close()!!}
@endsection
