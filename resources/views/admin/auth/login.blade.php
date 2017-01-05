@extends('admin.template.main')

@section('title', 'Login')

@section('content')

	{!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST']) !!}
		<div class="container">
   			 <div class="row">
       		 <div class="col-md-8 col-md-offset-2">
          	  <div class="panel panel-default">
          	  <div class="panel-heading">Login</div>
               <div class="panel-body">

		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico')!!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=> 'example@example.com', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Contraseña')!!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder'=> '**************', 'required'])!!}
		</div>

		<div class="form-group">
		
			{!! Form::submit ('Login', ['class' => 'btn btn-success'])!!}
		</div>


       </div>
       </div>
	{!! Form::close() !!}


@endsection