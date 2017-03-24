@extends('templates.main')
@section('tittle','Lista de clientes')
@section('content')


 <div class="container">
   <div class="panel panel-warning">
     <div class="panel-heading"><h3>Clientes</h3></div>
     <div class="panel-body">
         <a href="{{ route('clientes.create')}}" class="btn btn-info">Agregar Cliente</a>
      <br>
       @if (count($clientes)>0)
      <table class="table table-striped">

        <thead>
          <tr>
              <th data-field="name">Razón Social</th>
              <th data-field="name">Nombre </th>
              <th data-field="name">Estado Legal</th>
              <th data-field="tipo">Tipo contrato</th>
              <th data-field="nencargado">Encargado</th>
              <th data-field="telefono">Teléfono</th>
              <th data-fiekd="opciones"> Opciones</th>
          </tr>
        </thead>

        <tbody>
        @foreach ($clientes as $element)

        	
            <td>{{ $element->razon_cliente}}</td>
            <td>{{ $element->nombre_cliente}}</td>
            <td>{{ $element->type_cliente}}</td>            
            <td>
              @if ($element->tcontrato_cliente == "V")
                <span>Virtual</span>
              @else
                <span>Fisico</span>
              @endif
            </td>
            <td> {{ $element->oencargado_cliente}}</td>
            <td>{{ $element->teldirecto_cliente}}</td>
            <td> 
              <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#e{{ $element->id }}"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Eliminar"></span></a>
              <a href="{{route('clientes.show',$element->id)}}" class="btn btn-success btn-xs"data-toggle="tooltip" data-placement="top" title="Detalles" ><span class="glyphicon glyphicon-list-alt"></span></a>
              <a href="{{ route('clientes.edit', $element->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" ><span class="glyphicon glyphicon-edit"></span></a>
              <a href="{{route('ofiusuarios.index')}}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-target="#{{ $element->id }}"><span class="glyphicon glyphicon-user" data-toggle="tooltip" data-placement="top" title="Agregar Usuario"></span></a>
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
                  <h4>Esta apunto de Eliminar el cliente {{$element->razon_cliente}} ¿desea continuar?</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <a href="{{route('clientes.destroy',$element->id)}}" class="btn btn-success">Confirmar</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </tbody>
      </table>

      </div>
      </div>
      </div>
      </div>
      </div>
    
      {!! $clientes->render() !!}
       @else
         <h5>No hay clientes registrados</h5>
       @endif
     </div>
   </div>
 </div>
@endsection