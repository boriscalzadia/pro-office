@extends('templates.main')
@section('tittle','Crear provedor')
@section('content')

	<div class="container">
    <div class="panel panel-default">
    <div class="panel-heading">Nuevo proveedor</div>
    <div class="panel-body">
    
    {!! Form::open(['route'=>'provedores.store', 'method' =>'POST']) !!}
        <div class="row">
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('pnom_proveedor','Primer Nombre') !!}
                {!! Form::text('pnom_proveedor',null,['class'=>'form-control','placeholder'=>'Nombre de la proveedor'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('snom_proveedor','segundo Nombre') !!}
                {!! Form::text('snom_proveedor',null,['class'=>'form-control','placeholder'=>'Nombre de la proveedor'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('papel_proveedor','Primer Apellido') !!}
                {!! Form::text('papel_proveedor',null,['class'=>'form-control','placeholder'=>'apellido de la proveedor'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('sapel_proveedor','Segundo Apellido') !!}
                {!! Form::text('sapel_proveedor',null,['class'=>'form-control','placeholder'=>'apellido de la proveedor'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('regfiscla_proveedor','Registro Fiscal') !!}
                {!! Form::text('regfiscal_proveedor',null,['class'=>'form-control','placeholder'=>'Nombre de la proveedor'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('nit_proveedor','Nit') !!}
                {!! Form::text('nit_proveedor',null,['class'=>'form-control','placeholder'=>'xxxx-xxxxxx-xxx-x'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('direc_proveedor','Dirección') !!}
                {!! Form::text('direc_proveedor',null,['class'=>'form-control','placeholder'=>'av.los almendros'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('tel_proveedor','Telefono') !!}
                {!! Form::text('tel_proveedor',null,['class'=>'form-control','placeholder'=>'7xxxxxxx/2xxxxxxx'])!!}
            </div>
            <div class="form-group col-md-6 col-sm-12 col-lg-6">
                {!! Form::label('tel_proveedor','Correo') !!}
                {!! Form::email('correo_proveedor',null,['class'=>'form-control','placeholder'=>'proveedor@empresa.com'])!!}
            </div>
            <div class="form-group col-md-6">
		        {!! Form::label('servicio_id', 'Servicio que provee') !!}
		        {!! Form::select('servicio_id', $ser,null,['class'=>'form-control']) !!}
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