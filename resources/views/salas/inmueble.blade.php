@extends('templates.main')
@section('tittle','lista de clientes')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">Inmubeles de la sala</div>
					<div class="panel-body">
					@if (count($detalles)>0)
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Cantidad</th>
								</tr>
							</thead>
							<tbody>
								
									
							
							@foreach ($detalles as $element)
							<tr>
								@foreach ($inmuebles as $ins)
									@if ($ins->id==$element->inmueble_id)
										<td><span>{{$ins->nombre}}</span></td><td><strong>{{$element->inmueble_cant}}</strong></td>
									@endif
								@endforeach								
								</tr>
							@endforeach
							</tbody>
						</table>
					@else
						<h4>Esta sala aun no esta amueblada</h4>
					@endif
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">Agregar inmueble</div>
					<div class="panel-body">
					@if (count($disp)>0)
						{!!Form::open(['route'=>['salas.asignar',$sala],'method'=>'POST'])!!}
								<div class="form-group col-md-6">
									{!!Form::label('nombre','Inmueble')!!}
									{!!Form::select('inmueble_id',$disp,0,['class'=>'form-control'])!!}
								</div>
								<div class="form-group col-md-6 col-sm-12 col-lg-6">
									{!!Form::label('cantidad','Cantidad')!!}
									{!!Form::number('cantidad',0,['class'=>'form-control','placeholder'=>'eje: 10','min'=>'0'])!!}
								</div>
								<div class="col-md-12">
									{{Form::submit('Agregar',['class'=>'btn btn-success'])}}
								</div>
						{!!Form::close()!!}
					@else
						<h5>Esta sala ya cuenta con <strong>todos</strong> los inmuebles disponibles</h5>
					@endif
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-danger">
					<div class="panel-heading">Editar inmuebles</div>
					<div class="panel-body">
						{!! Form::open(['route'=>['salas.administramuebles',$sala],'method'=>'post']) !!}
							@foreach ($detalles as $elem)
								@foreach ($inmuebles as $el)
									@if ($el->id==$elem->inmueble_id)
										<div class="col-md-6 form-group">
											{!!Form::label('cantidad',$el->nombre)!!}
											{!!Form::number('cantidad[]',$elem->inmueble_cant,['class'=>'form-control'])!!}
											<input type="hidden" name="inmueble_id[]" value="{{$elem->inmueble_id}}">
										</div>
									@endif
								@endforeach
							@endforeach
							<div class="col-md-12">
						{{Form::submit('Enviar',['class'=>'btn btn-success'])}}
					</div>
						{!! Form::close()!!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection