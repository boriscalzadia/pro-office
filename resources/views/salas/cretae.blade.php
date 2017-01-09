@extends('templates.main')
@section('tittle','Crear Usuario')
@section('content')
<div class="container">
    <div class="panel panel-default">
    <div class="panel-heading">Nueva Sala</div>
    <div class="panel-body">
    
    {!! Form::open(['route'=>'salas.store', 'method' =>'POST']) !!}
        <div class="row">
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('nombre_sala','Nombre de la sala') !!}
                {!! Form::text('nombre_sala',null,['class'=>'form-control','placeholder'=>'Nombre de la sala'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('capacidad_sala','Capacidad de personas de la sala') !!}
                {!! Form::number('capacidad_sala',null,['class'=>'form-control','placeholder'=>'Capacidad de personas de la sala'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('uadicional','Unidad Adicional') !!}
                {!! Form::number('uadicional',null,['class'=>'form-control','placeholder'=>'Unidad Adicional'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('mts2_sala','Metros cuadrados ') !!}
                {!! Form::number('mts2_sala',null,['class'=>'form-control','placeholder'=>'00.00'])!!}
            </div>
            <div class="col-sm-12">
                      {!! Form::submit('Crear', ['class' => 'btn btn-success ' ] ) !!}
            </div>
        </div>
    {!! Form::close() !!}
    </div>
    </div>
</div>
@endsection