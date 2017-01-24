@extends('templates.main')
@section('tittle','Editar Usuario '. $cliente->nombre_cliente)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
            <div class="panel-heading"> <h3>Lista de Clientes </h3> </div>
          
                <div class="panel-body">
    <h4>Editar cliente</h4>
    {!! Form::open(['route'=>['clientes.update',$cliente->id], 'method' =>'PUT']) !!}
    	<center><h3> Datos Generales</h3></center>

        <div class="form-group col-md-6">
            {!! Form::label('razon_cliente', 'Razon Social')!!}
            {!! Form::text('razon_cliente', $cliente->razon_cliente, ['class' => 'validate form-control', 'placeholder'=> 'Ejemplo S.A de C.V', 'required'])!!}
        </div>
        <div class="form-group col-md-6">
        {!! Form::label('nit_cliente','Nit del cliente')!!}
        {!! Form::text('nit_cliente',$cliente->nit_cliente,['class' => 'validate form-control','placeholder'=>'0000-000000-000-0','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-6">
        {!! Form::label('giro_cliente','Giro')!!}
        {!! Form::text('giro_cliente',$cliente->giro_cliente,['class' => 'validate form-control','placeholder'=>'Giro','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-6">
        {!! Form::label('riva_cliente','Registro IVA')!!}
        {!! Form::text('riva_cliente',$cliente->riva_cliente,['class' => 'validate form-control','placeholder'=>'Registro IVA','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('nombre_cliente','Nombre Completo')!!}
        {!! Form::text('nombre_cliente',$cliente->nombre_cliente,['class' => 'validate form-control','placeholder'=>'Nombre Completo','required' => 'required']) !!}
        </div>


        <div class="form-group col-md-6">
        {!! Form::label('type_cliente', 'Tipo')!!}
        {!!Form::select('type_cliente',  [ ''=> 'Seleccione Tipo de Cliente..', 'Representante Legal' => 'Representante Legal', 'Persona Natural' =>'Persona Natural'], $cliente->type_cliente, ['class' => 'form-control']) !!}            
        </div>
        <div class="form-group col-md-6">
        {!! Form::label('docu_cliente', 'Tipo de Documento')!!}
        {!!Form::select('docu_cliente',  [ ''=> 'Seleccione Tipo de Documento..', 'DUI' => 'DUI', 'Otro Documento' =>'Otro Documento'], $cliente->docu_cliente, ['class' => 'form-control']) !!}            
        </div>
        <div class="form-group col-md-6">
        {!! Form::label('numdocumento_cliente','Dui u Otro')!!}
        {!! Form::text('numdocumento_cliente',$cliente->numdocumento_cliente,['class' => 'validate form-control','placeholder'=>'Documento de Identificación','required' => 'required']) !!}
        </div>
                                   
        <div class="form-group col-md-6">
        {!! Form::label('direccion_cliente','Direccion')!!}
        {!! Form::text('direccion_cliente',$cliente->direccion_cliente,['class' => 'validate form-control','placeholder'=>'Dirección Completa','required' => 'required']) !!}
        </div>
        
        <div class="form-group col-md-6">
        {!! Form::label('teldirecto_cliente','Telefono directo')!!}
        {!! Form::text('teldirecto_cliente',$cliente->teldirecto_cliente,['class' => 'validate form-control','placeholder'=>'2222-2222','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-6">
        {!! Form::label('celular_cliente','Celular')!!}
        {!! Form::text('celular_cliente',$cliente->celular_cliente,['class' => 'validate form-control','placeholder'=>'7777-7777','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('correo_cliente','Correo Electronico')!!}
        {!! Form::text('correo_cliente',$cliente->correo_cliente,['class' => 'validate form-control','placeholder'=>'ejemplo@ejemplo','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-12">
        {!! Form::label('oencargado_cliente','Nombre del encargado de la oficina')!!}
        {!! Form::text('oencargado_cliente',$cliente->oencargado_cliente,['class' => 'validate form-control','placeholder'=>'Nombre del encargado de la oficina','required' => 'required']) !!}
        </div>

<center><h3> Refencias Familiares</h3></center>
        <div class="form-group col-md-3">
        {!! Form::label('ref1nombre_cliente','Nombre Completo')!!}
        {!! Form::text('ref1nombre_cliente',$cliente->ref1nombre_cliente,['class' => 'validate form-control','placeholder'=>'Nombre Completo','required' => 'required']) !!}
        </div>

       <div class="form-group col-md-3">
        {!! Form::label('ref1parentesco_cliente','Parentesco')!!}
        {!! Form::text('ref1parentesco_cliente',$cliente->ref1parentesco_cliente,['class' => 'validate form-control','placeholder'=>'Mamá/Papá/etc.','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref1telefono_cliente','Telefono')!!}
        {!! Form::text('ref1telefono_cliente',$cliente->ref1telefono_cliente,['class' => 'validate form-control','placeholder'=>'2222-2222','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-3">
        {!! Form::label('ref1celular_cliente','Celular')!!}
        {!! Form::text('ref1celular_cliente',$cliente->ref1celular_cliente,['class' => 'validate form-control','placeholder'=>'7777-7777','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-3">
        {!! Form::label('ref2nombre_cliente','Nombre Completo')!!}
        {!! Form::text('ref2nombre_cliente',$cliente->ref2nombre_cliente,['class' => 'validate form-control','placeholder'=>'Nombre Completo']) !!}
        </div>

       <div class="form-group col-md-3">
        {!! Form::label('ref2parentesco_cliente','Parentesco')!!}
        {!! Form::text('ref2parentesco_cliente',$cliente->ref2parentesco_cliente,['class' => 'validate form-control','placeholder'=>'Mamá/Papá/etc.']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref2telefono_cliente','Telefono')!!}
        {!! Form::text('ref2telefono_cliente',$cliente->ref2telefono_cliente,['class' => 'validate form-control','placeholder'=>'2222-2222']) !!}
        </div>
        <div class="form-group col-md-3">
        {!! Form::label('ref2celular_cliente','Celular')!!}
        {!! Form::text('ref2celular_cliente',$cliente->ref2celular_cliente,['class' => 'validate form-control','placeholder'=>'7777-7777']) !!}
        </div>


<center><h3> Refencias Personales</h3></center>

        <div class="form-group col-md-6">
        {!! Form::label('ref1per_nombre_cliente','Nombre Completo')!!}
        {!! Form::text('ref1per_nombre_cliente',$cliente->ref1per_nombre_cliente,['class' => 'validate form-control','placeholder'=>'Nombre Completo','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref1per_telefono_cliente','Telefono')!!}
        {!! Form::text('ref1per_telefono_cliente',$cliente->ref1per_telefono_cliente,['class' => 'validate form-control','placeholder'=>'2222-2222','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-3">
        {!! Form::label('ref1per_celular_cliente','Celular')!!}
        {!! Form::text('ref1per_celular_cliente',$cliente->ref1per_celular_cliente,['class' => 'validate form-control','placeholder'=>'7777-7777','required' => 'required']) !!}
        </div>
        <div class="form-group col-md-6">
        {!! Form::label('ref2per_nombre_cliente','Nombre Completo')!!}
        {!! Form::text('ref2per_nombre_cliente',$cliente->ref2per_nombre_cliente,['class' => 'validate form-control','placeholder'=>'Nombre Completo']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref2per_telefono_cliente','Telefono')!!}
        {!! Form::text('ref2per_telefono_cliente',$cliente->ref2per_telefono_cliente,['class' => 'validate form-control','placeholder'=>'2222-2222']) !!}
        </div>
        <div class="form-group col-md-3">
        {!! Form::label('ref2per_celular_cliente','Celular')!!}
        {!! Form::text('ref2per_celular_cliente',$cliente->ref2per_celular_cliente,['class' => 'validate form-control','placeholder'=>'7777-7777']) !!}
        </div>


<center><h3> Datos de Oficina </h3></center>

        <div class="form-group col-md-6">
        {!! Form::label('tcontrato_cliente', 'Tipo de contrato') !!}
        {!! Form::select('tcontrato_cliente', [''=> 'Seleccione Tipo de Contato..','V'=> 'Virtual', 'F' => 'Fisico'],$cliente->tcontrato,['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('saludoper_cliente','Saludo Personalizado')!!}
        {!! Form::text('saludoper_cliente',$cliente->saludoper_cliente,['class' => 'validate form-control','placeholder'=>'Saludo']) !!}
        </div>
        <div class="form-group col-md-3 col-sm-12 col-lg-6">
         {{Form::label('plazo_cliente','Plazo/Meses')}}
        {{Form::number('plazo_cliente',$cliente->plazo_cliente,['class'=>'form-control','placeholder'=>'eje: 6'])}}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label ('fechain_cliente','Fecha de Inicio del Contrato')!!}
        {{Form::date('fechain_cliente', \Carbon\Carbon::now(),['class'=>'form-control'])}}
        </div>
        

        <div class="form-group">   
            {!! Form::submit ('Editar', ['class' => 'btn btn-success'])!!}
        </div>
 </div>
 </div>
    {!! Form::close() !!}
</div>
@endsection