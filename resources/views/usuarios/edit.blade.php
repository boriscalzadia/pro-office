@extends ('templates.main')

@section ('title','Editar Usuario'. $user -> name)

@section('content')

	

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Editar Usuario</div>
          
                <div class="panel-body">

 {!! Form::open(['route' => ['usuarios.update', $user], 'method' => 'PUT']) !!}
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
		{!!Form::select('type',  [ ''=> 'Seleccione un Nivel..', 'Usuario' => 'Usuario', 'Administrador' =>'Administrador','Cliente' => 'Cliente'], null, ['class' => 'form-control'])!!}			
		</div>
		
		<div class="form-group">
			{!! Form::submit ('Editar', ['class' => 'btn btn-success'])!!}
		</div>
		</div>
		</div>

	{!! Form::close() !!}


@endsection