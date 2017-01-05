@extends ('admin.template.main')

@section ('title','Crear Usuario')

@section('content')

	@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert"> 
			<ul>
			@foreach($errors -> all() as $error)
			<li>{{$error}}</li>
			@endforeach
			</ul>
		</div>
	@endif

	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
		<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Crear Usuario</div>
          
                <div class="panel-body">
                           
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
		{!!Form::select('type',  [ ''=> 'Seleccione un Nivel..', 'Empleado' => 'Empleado', 'Admin' =>'Administrador'], null, ['class' => 'form-control'])!!}			
		</div>
		
		<div class="form-group">
		
			{!! Form::submit ('Registrar', ['class' => 'btn btn-primary'])!!}
		</div>
 </div>
 </div>
	{!! Form::close() !!}


@endsection