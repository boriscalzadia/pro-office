@extends('templates.main')
@section('tittle','Editar Espacio')
@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
            <div class="panel-heading"> <h3>Editar Espacio </h3> </div>
          
                <div class="panel-body">
    {!! Form::open(['route'=>['salas.update',$salas->id], 'method' =>'PUT']) !!}
        <div class="row">
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('nombre_sala','Nombre del Espacio') !!}
                {!! Form::text('nombre_sala',$salas->nombre_sala,['class'=>'form-control','placeholder'=>'Nombre de la sala'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('capacidad_sala','Capacidad de personas en el Espacio') !!}
                {!! Form::number('capacidad_sala',$salas->capacidad_sala,['class'=>'form-control','placeholder'=>'Capacidad de personas de la sala'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('uadicional','Unidad Adicional') !!}
                {!! Form::number('uadicional',$salas->uadicional,['class'=>'form-control','placeholder'=>'Unidad Adicional'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('mts2_sala','Metros cuadrados ') !!}
                {!! Form::number('mts2_sala',$salas->mts2_sala,['class'=>'form-control','placeholder'=>'00.00'])!!}
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