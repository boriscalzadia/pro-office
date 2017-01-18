@extends('templates.main')
@section('tittle','Lista de clientes')
@section('content')
<<<<<<< HEAD


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
            <div class="panel-heading"> <h3>Lista de Clientes </h3> </div>
          
                <div class="panel-body">
 <a href="{{ route('clientes.create')}}" class="btn btn-info">Agregar Cliente</a>
 <br>
	<table class="table table-striped">
=======
 <div class="container">
   <div class="panel panel-success">
     <div class="panel-heading"><h4>Clientes</h4></div>
     <div class="panel-body">
       @if (count($clientes)>0)
         <a href="{{ route('clientes.create')}}" class="btn btn-info">Agregar Cliente</a>
      <br>
      <table class="table table-striped">
>>>>>>> 6de9318f3ed4cc1b16ebfab4eb9bbae1546f9c92
        <thead>
          <tr>
              <th data-field="name">Razón Social</th>
              <th data-field="nencargado">Encargado</th>
              <th data-field="name">Estado Legal</th>
              <th data-field="tipo">Tipo contrato</th>
              <th data-field="correo">Correo</th>
              <th data-fiekd="opciones"> Opciones</th>
          </tr>
        </thead>

        <tbody>
        @foreach ($clientes as $element)
<<<<<<< HEAD
        	<tr>
            <td>{{ $element->razon_cliente}}</td>
=======
          <tr>
            <td>{{ $element->nombre_cliente}}</td>
            <td>{{ $element->ncomercial_cliente}}</td>
>>>>>>> 6de9318f3ed4cc1b16ebfab4eb9bbae1546f9c92
            <td>{{ $element->oencargado_cliente}}</td>
            <td>{{ $element->type_cliente}}</td>
            <td>
              @if ($element->tcontrato_cliente == "V")
                <span>Virtual</span>
              @else
                <span>Fisico</span>
              @endif
            </td>
            <td>{{ $element->correo_cliente}}</td>
            <td>
              <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#e{{ $element->id }}" ><span class="glyphicon glyphicon-trash"></span></a>
              <a href="{{route('clientes.show',$element->id)}}" class="btn btn-success btn-xs" ><span class="glyphicon glyphicon-list-alt"></span></a>
              <a href="{{ route('clientes.edit', $element->id) }}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
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
                  <h4>Esta apunto de eliminar el cliente {{$element->razon_cliente}} ¿desea continuar?</h4>
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