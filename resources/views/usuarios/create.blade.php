@extends('templates.main')
@section('tittle','Crear usuario')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading"> <h4>Crear Usuario </h4> </div>
          
                <div class="panel-body">
        {!! Form::open(['route' =>'usuarios.store', 'method'=>'POST']) !!}
                           
        <div class="form-group">
            {!! Form::label('name', 'Nombre')!!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Nombre Completo', 'required'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Correo Electronico')!!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=> 'example@example.com', 'required'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Contraseña')!!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder'=> '**************', 'required'])!!}
        </div>

        <div class="form-group">
        {!! Form::label('type', 'Tipo')!!}
        {!!Form::select('type',  [ ''=> 'Seleccione un Nivel..', 'Usuario' => 'Usuario', 'Administrador' =>'Administrador', 'Cliente' => 'Cliente'], null, ['class' => 'form-control'])!!}            
        </div>
        
        <div class="form-group">
        
            {!! Form::submit ('Guardar', ['class' => 'btn btn-success'])!!}
        </div>
 </div>
 </div>
    	{!! Form::close()!!}

@endsection