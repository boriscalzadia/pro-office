@extends('templates.main')
@section('tittle','Crear Espacio')
@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
            <div class="panel-heading"> <h3>Crear Espacio </h3> </div>
          
                <div class="panel-body">
    
    {!! Form::open(['route'=>'salas.store', 'method' =>'POST']) !!}
        <div class="row">
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('nombre_sala','Nombre de Espacio') !!}
                {!! Form::text('nombre_sala',null,['class'=>'form-control','placeholder'=>'Nombre de la sala'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('capacidad_sala','Capacidad de personas en el Espacio') !!}
                {!! Form::number('capacidad_sala',null,['class'=>'form-control','placeholder'=>'Capacidad de personas de la sala'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('uadicional','Unidad Adicional') !!}
                {!! Form::number('uadicional',null,['class'=>'form-control','placeholder'=>'Unidad Adicional','min'=>'0'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('mts2_sala','Metros cuadrados ') !!}
                {!! Form::number('mts2_sala',null,['class'=>'form-control','placeholder'=>'00.00','step'=>'any','min'=>'0'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('precio','Precio') !!}
                {!! Form::text('precio',null,['class'=>'form-control','placeholder'=>'$20.00','step'=>'any','min'=>'0'])!!}
            </div>
            <div class="col-sm-12">
                      {!! Form::submit('Guardar', ['class' => 'btn btn-success ' ] ) !!}
            </div>
        </div>
    {!! Form::close() !!}
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
@endsection