@extends('templates.main')
@section('tittle','Crear Usuario')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<div class="panel panel-info">
				<div class="panel-heading">Salas que actualmente ocupa</div>
				<div class="panel-body">
				@if (count($salaso)>0)
					@foreach ($salaso as $sala)
					<li>{{ $sala->nombre_sala }}</li>
					@endforeach
                @else
                    <span>Ninguna</span>
                @endif
				</div>
			</div>
		</div>
		<div class="col-md-5 col-md-offset-1">
			<div class="panel panel-success">
			<div class="panel-heading">Asignar sala</div>
			<div class="panel-body">
				@if (count($salas)>0)
					{{Form::open(['route'=>['clientes.asisala',$cliente->id],'method'=>'POST'])}}
				<div class="form-group ">
					{{Form::label('id','Elija la sala')}}
					{{Form::select('id',$salas,null,['class'=>'form-control'])}}
				</div>
					{{Form::submit('asignar',['class'=>'btn btn-success'])}}
				{{Form::close()}}
				@else
					<p class="text-justify">En este momento todas las salas estan ocupadas registre otra sala para poder asignarsela al cliente</p>
					<a href="{{route('salas.create')}}" class="btn col-md-6 btn-success">Crear sala</a>	<a href="{{route('clientes.index')}}" class="btn col-md-6 btn-warning">Regresar al menu de clientes</a>
				@endif
				
			</div>
				
			</div>
		</div>
		<div class="col-md-12">
			<div class="panel panel-danger">
				<div class="panel-heading">Desocupar salas</div>
				<div class="panel-body">
					@if (count($salaso)>0)
					{{Form::open(['route'=>['clientes.desocupar',$cliente->id],'method'=>'POST'])}}
						@foreach ($salaso as $sala)
						<div class="checkbox">
						    <label>
						      {{Form::checkbox('id[]', $sala->id, false)}}<span> {{$sala->nombre_sala}}</span>
						    </label>
						</div>
						@endforeach
						{{Form::submit('Desocupar',['class'=>'btn btn-danger'])}}
					{{Form::close()}}
	                @else
	                    <span>Ninguna</span>
	                @endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection