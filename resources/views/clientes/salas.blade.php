@extends('templates.main')
@section('tittle','Gestion de contratos')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">Contratos establecidos</div>
				<div class="panel-body">
				
				@if (count($salaso)>0)
					<table class="table table-striped">
					<thead>
						<tr>
							<th>Sala</th>
							<th>Precio</th>
							<th>Fecha de Pago</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($salaso as $sala)
						<tr>
							<td>{{$sala->nombre_sala}}</td>
							<td>{{$sala->precio}}</td>
							@foreach ($contratos as $contra)
							@if ($contra->sala_id==$sala->id)
								<td>{{$contra->fechapago}}</td>
							@endif
								
							@endforeach
							
						</tr>
					@endforeach
					</tbody>
				</table>
                @else
                    <span>Ninguna</span>
                @endif
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-success">
			<div class="panel-heading">Nuevo contrato</div>
			<div class="panel-body">
				@if (count($salas)>0)
					{{Form::open(['route'=>['clientes.asisala',$cliente->id],'method'=>'POST'])}}
				<div class="form-group ">
					{{Form::label('id','Elija la sala')}}
					{{Form::select('id',$salas,null,['class'=>'form-control'])}}
				</div>
				@if ($cliente->tcontrato_cliente == "V")
					<div class="form-group ">
						{{Form::label('tipo','Tipo contrato')}}
						{{Form::text('tipo','Virtual',['class'=>'form-control','disabled'=>'disabled'])}}
					</div>
					<div class="form-group">
						{{Form::label('horas','Cantidad de horas')}}
						{{Form::number('horas',null,['class'=>'form-control'])}}
					</div>
				@else
					<div class="form-group ">
						{{Form::label('tipo','Tipo contrato')}}
						{{Form::text('tipo','Fisico',['class'=>'form-control','disabled'=>'disabled'])}}
					</div>
				@endif
				
				<div class="form-group ">
					{{Form::label('fechaini','Fecha de Inicio')}}
					{{Form::date('fechaini', \Carbon\Carbon::now(),['class'=>'form-control'])}}
				</div>
				<div class="form-group ">
					{{Form::label('fechafin','Fecha de fin')}}
					{{Form::date('fechafin', \Carbon\Carbon::now(),['class'=>'form-control'])}}
				</div>
				<div class="form-group ">
					{{Form::label('fechapago','Fecha de Pago')}}
					{{Form::number('fechapago', null,['class'=>'form-control','min'=>1,'max'=>\Carbon\Carbon::now()->daysInMonth,'required'])}}
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