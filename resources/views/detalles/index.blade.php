@extends('templates.main')
@section('tittle','Oficinas paquetes')
@section('content')

	<div class="container">
		<div class="row">
			<div class="panel panel-success text-center">
				<div class="panel-heading">
					<h4>Salas y paquetes</h4>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Sala</th>
								<th>Precio</th>
								<th>Descripcion</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($salas as $element)
								<tr>
									<th>{{$element->nombre_sala}}</th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
							@endforeach
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

@endsection