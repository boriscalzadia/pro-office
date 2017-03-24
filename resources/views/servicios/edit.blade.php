@extends('templates.main')
@section('tittle','Editar Servicio')
@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
            <div class="panel-heading"> <h3> Editar Servicio </h3> </div>
          
                <div class="panel-body">
    
    {!! Form::open(['route'=>['servicios.update',$servicio->id], 'method' =>'PUT']) !!}
        <div class="row">
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('servicio','Nombre del tipo de servicio') !!}
                {!! Form::text('servicio',$servicio->servicio,['class'=>'form-control','placeholder'=>'Nombre del servicio'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('fijo','Fijo') !!}
                {!! Form::select('fijo', ['1' => 'Si', '0' => 'No'],$servicio->fijo,['class'=>'form-control']) !!}
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