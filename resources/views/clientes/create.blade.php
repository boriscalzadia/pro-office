@extends('templates.main')
@section('tittle','Crear Usuario')
@section('content')
<div class="container">
    <h4>Nuevo cliente</h4>
    @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
        </div>
    @endif
    {!! Form::open(['route'=>'clientes.store', 'method' =>'POST']) !!}
    <div class="row">
    	<div class="form-group col-md-6">
        {!! Form::label('tcontrato_cliente', 'Tipo de contrato') !!}
        {!! Form::select('tcontrato_cliente', ['V' => 'Virtual', 'F' => 'Fisico'],null,['class'=>'form-control']) !!}
        </div>
    	<div class="form-group col-md-6">
    	{!! Form::label('nombre_cliente','Nombre Competo')!!}
        {!! Form::text('nombre_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre Completo','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-6">
    	{!! Form::label('ncomercial_cliente','Nombre Comercial')!!}
        {!! Form::text('ncomercial_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre Comercial','required' => 'required']) !!}
    	</div>
    	<div class="form-group col-md-6">
    	{!! Form::label('representante_cliente','Nombre del representente del cliente')!!}
        {!! Form::text('representante_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre del representente del cliente','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-6">
    	{!! Form::label('oencargado_cliente','Nombre del encargado de la oficina')!!}
        {!! Form::text('oencargado_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre del encargado de la oficina','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-6">
    	{!! Form::label('nit_cliente','Nit del cliente')!!}
        {!! Form::text('nit_cliente',null,['class' => 'validate form-control','placeholder'=>'Nit del cliente','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-6">
    	{!! Form::label('regfiscal_cliente','Numero de registro fiscal')!!}
        {!! Form::text('regfiscal_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre del encargado de la oficina','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-6">
    	{!! Form::label('direccion_cliente','direccion del cliente')!!}
        {!! Form::text('direccion_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre del encargado de la oficina','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-6">
    	{!! Form::label('telpersonalizado_cliente','telefono personalizado')!!}
        {!! Form::text('telpersonalizado_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre del encargado de la oficina','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-6">
    	{!! Form::label('teldirecto_cliente','telefono directo')!!}
        {!! Form::text('teldirecto_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre del encargado de la oficina','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-6">
    	{!! Form::label('telextencion_cliente','extencion')!!}
        {!! Form::text('telextencion_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre del encargado de la oficina','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-6">
    	{!! Form::label('correo_cliente','correo')!!}
        {!! Form::email('correo_cliente',null,['class' => 'validate form-control','placeholder'=>'cliente@cliente.com','required' => 'required']) !!}
        </div>
        <div class="center">
                      {!! Form::submit('Crear', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection