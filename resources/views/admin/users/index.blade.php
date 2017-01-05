@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Lista de Usuarios</div>
          
                <div class="panel-body">
	<a href="{{ route('admin.users.create')}}" class="btn btn-success"> Registrar Nuevo Usuario</a> <hr>
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user -> id}} </td>
					<td>{{ $user -> name}}</td>
					<td>{{ $user -> email}}</td>
					<td>
						@if($user ->type =="admin")
							<span class="label label-success"> {{ $user -> type }}</span>
						@else
							<span class="label label-info"> {{ $user -> type }}</span>
						@endif

					</td>
					<td>
					<a href="{{ route ('admin.users.edit', $user-> id)}}" onclick="return confirm('¿Editar Registro?')" class="btn btn-primary"> <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> 
					<a href="{{ route ('admin.users.destroy', $user->id)}}" onclick="return confirm('¿Eliminar Registro?')" class="btn btn-danger"> <span class="glyphicon glyphicon-remove-circle"  aria-hidden="true"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	</div>
	{!! $users -> render()!!}
@endsection