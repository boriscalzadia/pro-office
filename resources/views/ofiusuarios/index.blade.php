@extends('templates.main')
@section('tittle','Lista de Usuarios de Oficinas')
@section('content')

<div class="container">
   <div class="panel panel-warning">
     <div class="panel-heading"><h3>Usuarios de Oficina</h3></div>
     <div class="panel-body">
         <a href="{{ route('ofiusuarios.create')}}" class="btn btn-info">Agregar Usuario de Oficina</a>

    <!-- Busqueda de Empresas -->

    {!! Form::open(['route' => 'ofiusuarios.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
    <div class="input-group"> 
      {!! Form::text ('id_cliente', null, ['class' =>'form-control', 'placeholder' => 'Buscar Empresa..', 'aria-describedby' =>'search']) !!}
      <span class="input-group-addon" id="search"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
    </div>

    {!! Form::close() !!}

    <!-- Fin del Buscador -->
@if (count($clientes)>0)
<br>
      <table class="table table-striped">

        <thead>
          <tr>
              <th> Nombre del Usuario </th>
              <th> Direccion </th>
              <th> Municipio </th>
              <th> Nombre de la Empresa</th>
              <th> Opciones</th>


           </tr>

           </thead>

           <tbody>

        @foreach($ofiusuarios as $element)
        <tr>
          <td> {{$element->name_ofiusuarios}}</td>
          <td> {{$element->direccion_ofiusuarios}}</td>
          <td> {{$element->municipio_ofiusuarios}}</td>
          <td> @foreach ($clientes as $elements)
              @if ($element->id_cliente==$elements->id)
                {{$elements->razon_cliente}}
              @endif
            @endforeach 
          </td>

          <td>

               <a href="{{ route('ofiusuarios.edit', $element->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" ><span class="glyphicon glyphicon-edit"></span></a>
               <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#e{{ $element->id }}" ><span class="glyphicon glyphicon-trash"></span></a>
              
            </td>
          </tr>
          <div class="modal fade" id="e{{ $element->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4>
                </div>
                <div class="modal-body">
                  <h4>Esta apunto de eliminar el Usuario "{{$element->name_ofiusuarios}}" ¿Desea Continuar?</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <a href="{{route('ofiusuarios.destroy',$element->id)}}" class="btn btn-success">Confirmar</a>
                </div>
              </div>
            </div>
          </div>
          </tr>
          @endforeach
          </tbody>
        </table>

        </div>
        </div>
        </div>
        {!! $ofiusuarios->render() !!}
        @else
         <center><h3>No hay Usuarios registrados</h3></center>
       @endif

</div>
</div>
</div>

@endsection