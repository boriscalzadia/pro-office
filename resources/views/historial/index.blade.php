@extends('templates.main')
@section('tittle','historial de ocuapciones')
@section('content')

	<div class="col-md-12">
	<div>
		<a href="#" class="btn btn-warning">Nuevo</a>
	</div>
		<div class="panel panel-success">
			<div class="panel-heading">Inicio</div>
			<div class="panel-body">
				<table class=" table table-striped">
					<thead>
						<tr>
							<th>Cliente</th>
							<th>Horas Totales</th>
							<th>Horas Ocupadas</th>
							<th>Horas Restantes</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($reg as $element)
						<tr>
							<td>datos1</td>
							<td>datos2</td>
							<td>datos3</td>
							<td>datos4</td>
							<td>datos5</td>
						</tr>
					@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection