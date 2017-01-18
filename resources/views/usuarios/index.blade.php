@extends('templates.main')
@section('tittle','Lista de Usuarios')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
            <div class="panel-heading"><h3>Lista de Usuarios</h3></div>
          
                <div class="panel-body">
 <a href="{{ route('usuarios.create')}}" class="btn btn-info">Agregar usuarios</a>
 <br>
	<table class="table table-striped">
        <thead>
          <tr>
              <th data-field="name">Nombre</th>
              <th data-field="name">Correo</th>
              <th data-field="name"> Tipo de Usuario</th>
              <th data-fiekd="opciones"> Opciones</th>
          </tr>
        </thead>

        <tbody>
        @foreach ($user as $element)
        	<tr>
            <td>{{ $element->name}}</td>
            <td>
              {{ $element->email}}
            </td>
            <td>
              {{ $element->type}}
            </td>
            <td>
              <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#e{{ $element->id }}" ><span class="glyphicon glyphicon-trash"></span></a>
              {{-- <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#s{{ $element->id }}" ><span class="glyphicon glyphicon-trash"></span></a> --}}
              <a href="{{ route('usuarios.edit', $element->id) }}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
            </td>
          </tr>
          <div class="modal fade" id="e{{ $element->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Eliminar usuario</h4>
                </div>
                <div class="modal-body">
                  <h4>Esta apunto de eliminar el Usuario "{{$element->name}}" ¿Desea continuar?</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <a href="{{route('usuarios.destroy',$element->id)}}" class="btn btn-success">Confirmar</a>
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
      {!! $user->render() !!}
@endsection