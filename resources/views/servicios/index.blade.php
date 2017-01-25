@extends('templates.main')
@section('tittle','lista de clientes')
@section('content')
  <div class="panel panel-success">
    <div class="panel-heading"><h3 class="text-center">Servicios</h3></div>
    <div class="panel-body">
    <a href="{{ route('servicios.create')}}" class="btn btn-info">Agregar servicios</a>
    <br>
      @if (count($servicios)>0)
        <table class="table table-striped">
        <thead>
          <tr>
              <th data-field="name">Nombre</th>
              <th data-field="name">Precio</th>
              <th data-fiekd="opciones"> Opciones</th>
          </tr>
        </thead>

        <tbody>
        @foreach ($servicios as $element)
          <tr>
            <td>{{ $element->servicio}}</td>
            <td>${{ $element->precio}}</td>
            <td>
              <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#e{{ $element->id }}" ><span class="glyphicon glyphicon-trash"></span></a>
              {{-- <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#s{{ $element->id }}" ><span class="glyphicon glyphicon-list-alt"></span></a> --}}
              <a href="{{ route('servicios.edit', $element->id) }}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
            </td>
          </tr>
          <div class="modal fade" id="e{{ $element->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Eliminar servicio</h4>
                </div>
                <div class="modal-body">
                  <h4>Esta apunto de eliminar el servicio "{{$element->servicio}}" ¿desea continuar?</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <a href="{{route('servicios.destroy',$element->id)}}" class="btn btn-success">Confirmar</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </tbody>
      </table>
      {!! $servicios->render() !!}
      @else
        <h4 class="text-center">No existe ningun servicio</h4>
      @endif
    </div>
  </div>
 
	
@endsection