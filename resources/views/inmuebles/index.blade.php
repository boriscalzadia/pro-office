@extends('templates.main')
@section('tittle','lista de inmuebles')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{route('inmuebles.create')}}" class="btn btn-success">Crear Inmuebles</a>
			</div>
			<br>
			<br>
			<br>
			<div class="col-md-12">
				<div class="panel panel-success">
				<div class="panel-heading">inmubles</div>
				<div class="panel-body text-center">
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
                  <h4 class="modal-title" id="myModalLabel">Eliminar Cliente</h4>
                </div>
                <div class="modal-body">
                  <h4>Esta apunto de eliminar el cliente {{$element->nombre}} ¿desea continuar?</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <a href="{{route('inmuebles.destroy',$element->id)}}" class="btn btn-success">Confirmar</a>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="d{{ $element->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Salas ocupadas por el cliente</h4>
                </div>
                <div class="modal-body">
                  <h4>
                    {{-- @if (count($element->salas)>0)
                      @foreach ($element->salas as $salas)
                        {{ $salas->nombre_sala }}
                      @endforeach
                    @else
                        <span>Ninguna</span>
                    @endif --}}
                  </h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Continuar</button>
                </div>
              </div>
            </div>
          </div>
							 @endforeach
							</tbody>
						</table>
					@else
						<h3>No hay inmuebles registrados</h3>
					@endif
				</div>
			</div>
			</div>
		</div>
	</div>
@endsection