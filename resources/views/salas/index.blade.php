@extends('templates.main')
@section('tittle','lista de clientes')
@section('content')
  <div class="container">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h4>Salas</h4>
      </div>
      <div class="panel-body">
         <a href="{{ route('salas.create')}}" class="btn btn-info">Agregar sala</a>
 <br>
  <table class="table table-striped text-center">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Estado</th>
              <th>Capacidad</th>
              <th>Unidad Adicional</th>
              <th>Metros cuadrados</th>
              <th> Opciones</th>
          </tr>
        </thead>

        <tbody>
        @foreach ($salas as $element)
          <tr>
            <td>{{ $element->nombre_sala}}</td>
            <td>
              @if ($element->estado_sala==1)
                <span class="label label-success">Libre</span>
              @else
                <span class="label label-danger">Ocupada</span>
              @endif
            </td>
            <td>{{ $element->capacidad_sala}}</td>
            <td>{{ $element->uadicional}}</td>
            <td>{{ $element->mts2_sala}}</td>
            <td>
              <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#e{{ $element->id }}" ><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Eliminar"></span></a>
              <a href="{{ route('salas.edit', $element->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
              <a href="{{route('salas.amueblar',$element->id)}}" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Amueblar"><span class="glyphicon glyphicon-home"></span></a>
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
                  <h4>Esta apunto de eliminar la  "{{$element->nombre_sala}}" ¿desea continuar?</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <a href="{{route('salas.destroy',$element->id)}}" class="btn btn-success">Confirmar</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </tbody>
      </table>
      {!! $salas->render() !!}
      </div>
    </div>
  </div>
@endsection