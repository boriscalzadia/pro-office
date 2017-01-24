@extends('templates.main')
@section('tittle','Primer usuario')
@section('content')
	<div class="panel panel-warning">
  <div class="panel-heading"><h3>Crear Usuarios </h3></div>
  <div class="panel-body">
    	{!! Form::open(['route'=>'usuarios.stores', 'method' =>'POST']) !!}
    		<div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('name','Nombre del usuario') !!}
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del usuario'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('email','Correo del usuario') !!}
                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'usuario@usuario.com'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('password','Contraseña') !!}
                {!! Form::password('password',['class'=>'form-control','placeholder'=>'**********'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
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