@extends('templates.main')
@section('tittle','Agregar horas')
@section('content')
<div class="col-md-12">
	<div class="panel panel-success">
		<div class="panel-heading">Reservar espacios</div>
		<div class="panel-body">
			{!! Form::open(['route' =>'historial.store', 'method'=>'POST']) !!}
			<div class="form-group col-md-6">
				{!!Form::label('hora','Hora de Inicio')!!}
				{!!Form::time('hora',\Carbon\Carbon::now()->toTimeString(),['class'=>'form-control'])!!}
			</div>
			@if ($inises==1)
				<div class="form-group col-md-6">
				{!!Form::label('cliente_id','Cliente')!!}
				{!!Form::select('cliente_id',$clin,null,['class'=>'form-control'])!!}
			</div>
			@endif
			<div class="form-group col-md-6">
				{!!Form::label('fecha','Fecha de Inicio')!!}
				{!!Form::date('fecha', \Carbon\Carbon::now(),['class'=>'form-control'])!!}
			</div>
			<div class="form-group col-md-6">
				{!!Form::label('tiempo','Tiempo de ocupacion')!!}
				{!!Form::number('tiempo', null,['class'=>'form-control','min'=>1,'max'=>10,'required'])!!}
			</div>
			<div class="form-group col-md-6">
				{!!Form::label('sala_id','Sala a ocupar')!!}
				{!!Form::select('sala_id',$salas,null,['class'=>'form-control'])!!}
			</div>
				{!!Form::submit('Reservar',['class'=>'btn btn-success'])!!}
				{!!Form::close()!!}
			</div>
	</div>
</div>
@endsection