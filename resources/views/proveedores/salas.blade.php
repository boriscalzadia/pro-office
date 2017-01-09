@extends('templates.main')
@section('tittle','Crear Usuario')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-info">
		  	<div class="panel-heading">En este momento todos los servicios se han asignado</div>
			  <div class="panel-body">
			    <p class="text-justify">Para crear un proveedor cree un nuevo servicio o verifique que el servicio que desea asignar no este ocupado</p> <br><br>
			    <a href="{{route('provedores.index')}}" class="btn btn-info col-md-5">Ver los proveedores</a><a href="{{route('servicios.create')}}" class="btn btn-success col-md-5 col-md-offset-2">Crear un nuevo servicio</a>
			  </div>
			</div>
		</div>
	</div>
</div>

@endsection