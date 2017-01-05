@extends ('admin.template.main')

@section ('title','Editar Usuario'. $user -> name)

@section('content')

	{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Editar Usuario</div>
          
                <div class="panel-body">
		<div class="form-group">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder'=> 'Nombre Completo', 'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico')!!}
			{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder'=> 'example@example.com', 'required'])!!}
		</div>

		<div class="form-group">
		{!! Form::label('type', 'Tipo')!!}
		{!!Form::select('type',  [ ''=> 'Seleccione un Nivel..', 'empleado' => 'Empleado', 'admin' =>'Administrador'], null, ['class' => 'form-control'])!!}			
		</div>
		
		<div class="form-group">
			{!! Form::submit ('Editar', ['class' => 'btn btn-primary'])!!}
		</div>
		</div>
		</div>

	{!! Form::close() !!}


@endsection