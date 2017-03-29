@extends('templates.main')
@section('tittle','Lista de Muebles')
@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
            <div class="panel-heading"> <h3>Muebles </h3> </div>
          
                <div class="panel-body">
					<a href="{{route('inmuebles.create')}}" class="btn btn-success">Nuevo Muebles</a>
					<br>
					@if (count($inm)>0)
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Cantida</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
							 @foreach ($inm as $element)
							 	<tr>
									<td>{{$element->nombre}}</td>
									<td>{{$element->cantidad}}</td>
									<td>
										<a  href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#e{{ $element->id }}" ><span class="glyphicon glyphicon-trash"></span></a>
										<a href="{{ route('inmuebles.edit', $element->id) }}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
										<a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#d{{ $element->id }}" ><span class="glyphicon glyphicon-zoom-in"></span></a>
									</td>
								</tr>
								<div class="modal fade" id="e{{ $element->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Eliminar Mueble</h4>
                </div>
                <div class="modal-body">
                  <h4>Esta apunto de eliminar el mueble {{$element->nombre}} ¿desea continuar?</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <a href="{{route('inmuebles.destroy',$element->id)}}" class="btn btn-success">Confirmar</a>
                </div>
              </div>
            </div>
          </div>
							 @endforeach
							</tbody>
						</table>
					@else
						<h3 class="text-center">No hay muebles registrados</h3>
					@endif
				</div>
			</div>
			</div>
		</div>
	</div>
@endsection
