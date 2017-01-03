@extends('templates.main')
@section('tittle','Crear Usuario')
@section('content')
<a href="{{ route('provedores.create')}}" class="btn btn-info">Agregar proveedor</a>
 <br>
    <table class="table table-striped text-center">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>servicio</th>
              <th>Nit</th>
              <th> Opciones</th>
          </tr>
        </thead>

        <tbody>
        @foreach ($pros as $element)
            <tr>
            <td>{{ $element->pnom_proveedor}} {{ $element->papel_proveedor}}</td>
            <td>
            @foreach ($ser as $elements)
              @if ($element->servicio_id==$elements->id)
                <span class="label label-success">{{$elements->servicio}}</span>
              @endif
            @endforeach
            </td>
            <td>{{ $element->nit_proveedor}}</td>
            <td>
              <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#e{{ $element->id }}" ><span class="glyphicon glyphicon-trash"></span></a>
              <a href="{{ route('provedores.edit', $element->id) }}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
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
                  <a href="{{route('provedores.destroy',$element->id)}}" class="btn btn-success">Confirmar</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </tbody>
      </table>
      {!! $pros->render() !!}
@endsection