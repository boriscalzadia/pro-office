@extends('templates.main')
@section('tittle','Primer usuario')
@section('content')
	<div class="panel panel-default">
  <div class="panel-heading">Crear Usuarios</div>
  <div class="panel-body">
    	{!! Form::open(['route'=>'usuarios.stores', 'method' =>'POST']) !!}
    		<div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('name_us','Nombre del usuario') !!}
                {!! Form::text('name_us',null,['class'=>'form-control','placeholder'=>'Nombre del usuario'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('email_us','Correo del usuario') !!}
                {!! Form::email('email_us',null,['class'=>'form-control','placeholder'=>'usuario@usuario.com'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('password_us','Contraseña') !!}
                {!! Form::password('password_us',['class'=>'form-control','placeholder'=>'**********'])!!}
            </div>
            <div class="form-group">
        {!! Form::label('type', 'Tipo')!!}
        {!!Form::select('type',  [ ''=> 'Seleccione un Nivel..', 'Usuario' => 'Usuario', 'Administrador' =>'Administrador', 'Cliente' => 'Cliente'], null, ['class' => 'form-control'])!!}            
        </div>
            <div class="col-sm-12">
                      {!! Form::submit('Crear', ['class' => 'btn btn-success ' ] ) !!}
            </div>
    	{!! Form::close()!!}
  </div>
</div>
@endsection