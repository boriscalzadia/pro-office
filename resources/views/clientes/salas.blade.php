@extends('templates.main')
@section('tittle','Gestion de contratos')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">Contratos establecidos</div>
					<div class="panel-body">
					
					@if (count($salaso)>0)
						<table class="table table-striped">
						<thead>
							<tr style="background: #BFBFBF;font-size: 14px;">
								<th>Nombre</th>
								<th>Precio sin IVA</th>
								<th>IVA</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td colspan="3" class="text-center" style="background: #DADFE1;font-size: 14px;">Salas</td>
						</tr>
						@foreach ($salaso as $sala)
							<tr>
								<td>{{$sala->nombre_sala}}</td>
								<td>{{'$'.number_format($sala->precio,2)}}</td>
								<td>{{'$'.number_format(0.13*$sala->precio,2)}}</td>
								
							</tr>
						@endforeach
						<tr>
							<td colspan="3" class="text-center" style="background: #DADFE1;font-size: 14px;">Servicios Predeterminados</td>
						</tr>
						@foreach ($contratos as $contra)
							@foreach ($servcontros as $servs)
								<tr>								
									@foreach ($allserv as $e)
										@if ($contra->id==$servs->contrato_id)
											@if ($servs->servicio_id==$e->id) 
													<td>{{$e->servicio}}</td>
													<td>{{'$'.number_format($e->precio,2)}}</td>
													<td>{{'$'.number_format(0.13*$e->precio,2)}}</td>
											 	@endif
										@endif
									@endforeach
								</tr>
							@endforeach
						@endforeach
						<tr>
							<td><strong>Total</strong></td>
							<td>
								@foreach ($contratos as $contra)
									{{'$'.number_format($contra->pago,2)}}
								@endforeach
							</td>
							<td>
								@foreach ($contratos as $contra)
									{{'$'.number_format(0.13*$contra->pago,2)}}
								@endforeach
							</td>
						</tr>
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
					@if (count($salas)>0&&count($servicio)>0)
						{{Form::open(['route'=>['clientes.asisala',$cliente->id],'method'=>'POST'])}}
							<div class="form-group ">
								{{Form::label('id','Elija la sala')}}
								{{Form::select('id',$salas,null,['class'=>'form-control'])}}
							</div>
							<div class="form-group">
								{!! Form::label('servicios', 'Elija sus servicios') !!}
		        				{!! Form::select('servicios[]', $servicio,null,['class'=>'form-control','multiple'=>'','size'=>'5']) !!}
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
						@if (count($salas)==0)
							<p class="text-justify">En este momento todas las salas estan ocupadas registre otra sala para poder asignarsela al cliente</p>
							<a href="{{route('salas.create')}}" class="btn col-md-6 btn-success">Crear sala</a>
							<a href="{{route('clientes.index')}}" class="btn col-md-6 btn-warning">Regresar al menu de clientes</a>
						@endif
						@if (count($servicio)==0)
							<p class="text-justify">En este momento no existe ningun servicio existente <br><strong>¿Que desea hacer?</strong></p>
							<a href="{{route('servicios.create')}}" class="btn col-md-6 btn-success">Crear servicio</a>
							<a href="{{route('clientes.index')}}" class="btn col-md-6 btn-warning">Regresar al menu de clientes</a>
						@endif
					@endif
					
				</div>
					
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">Servicios Adicionales del mes</div>
					<div class="panel-body">
						@if (count($serviadd)>0)
							<?php $i=0; ?>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Precio sin IVA</th>
										<th>Cantidad</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
								@foreach ($serviadd as $serva)									
									<tr>
									@foreach ($allserv as $all)
										@if ($all->id==$serva->servicio_id)
											<td>{{$all->servicio}}</td>
											<td>{{'$'.number_format($all->precio,2)}}</td>
											<td>{{$serva->cantidad}}</td>
											<td>{{'$'.number_format($all->precio*$serva->cantidad,2)}}</td>
											<?php
												$i = $i+ $all->precio*$serva->cantidad;
											?>
										@endif
									@endforeach
										
									</tr>
								@endforeach
								<tr>
									<td colspan="2"/>
									<td><strong>Sub-Total</strong></td>
									<td>{{'$'.number_format($i,2)}}</td>
								</tr>
								<tr>
									<td colspan="2"/>
									<td><strong>IVA</strong></td>
									<td>{{'$'.number_format($i*0.13,2)}}</td>
								</tr>
								<tr>
									<td colspan="2"/>
									<td><strong>Total</strong></td>
									<td>{{'$'.number_format($i*1.13,2)}}</td>
								</tr>
								</tbody>
							</table>
		                @else
		                    <span>Ninguna</span>
		                @endif
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-warning">
					<div class="panel-heading">Agregar servicios</div>
					<div class="panel-body">
					{!!Form::open(['route'=>['clientes.addservice',$cliente->id],'method'=>'POST'])!!}
						<div class="form-group">
							{!! Form::label('servicios', 'Elija su servicio') !!}
	        				{!! Form::select('servicio', $servicio,null,['class'=>'form-control','required'=>'']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('cantidad', 'Cantidad')!!}
							{!! Form::number('cantidad',null,['class'=>'form-control','required'=>'']) !!}
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success" value="Confirmar">
						</div>
					{{Form::close()}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection