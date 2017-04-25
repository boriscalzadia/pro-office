@extends('templates.main')
@section('tittle','Crear Cliente')
@section('content') 
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
            <div class="panel-heading"> <h3>Nuevo Cliente </h3> </div>
          
                <div class="panel-body">
        {!! Form::open(['route' =>'clientes.store', 'method'=>'POST']) !!}

    <center><h3> Datos Generales</h3></center>

        <div class="form-group col-md-6">
        {!! Form::label('type_cliente', 'Estado Legal')!!}
        {!!Form::select('type_cliente',  [ 'Natural' => 'Persona Natural', 'Juridico' =>'Persona Juridica'], null, ['class' => 'form-control']) !!}            
        </div>
    
        <div id="Juridico">
        <div class="form-group col-md-6">
            {!! Form::label('razon_cliente', 'Nombre de la Empresa  ')!!}
            {!! Form::text('razon_cliente', null, ['class' => 'validate form-control', 'placeholder'=> 'Ejemplo S.A de C.V'])!!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('riva_cliente','Registro IVA')!!}
        {!! Form::text('riva_cliente',null,['class' => 'validate form-control','placeholder'=>'0000000']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('registrosociedad_cliente', 'Numero de Registro de la Sociedad')!!}
        {!! Form::text('registrosociedad_cliente',null,['class' => 'validate form-control','placeholder'=>'Numero de Registro']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('registrocredencial_cliente','Registro Credencial')!!}
        {!! Form::text('registrocredencial_cliente',null,['class' => 'validate form-control','placeholder'=>'Numero de Registro']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('nitsociedad_cliente','Nit de la Sociedad')!!}
        {!! Form::text('nitsociedad_cliente',null,['class' => 'validate form-control','placeholder'=>'00000000000000']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('numresgcontribuyente_cliente','Registro del Contribuyente')!!}
        {!! Form::text('numresgcontribuyente_cliente',null,['class' => 'validate form-control','placeholder'=>'']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('giro_cliente','Giro')!!}
        {!! Form::text('giro_cliente',null,['class' => 'validate form-control','placeholder'=>'Giro']) !!}
        </div>
        </div>

        <div id="Natural">
        <div class="form-group col-md-6">
        {!! Form::label('nombre_cliente','Nombre Persona Natural/Juridica')!!}
        {!! Form::text('nombre_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre Completo','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('nit_cliente','Nit')!!}
        {!! Form::text('nit_cliente',null,['class' => 'validate form-control','placeholder'=>'00000000000000','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('docu_cliente', 'Tipo de Documento')!!}
        {!!Form::select('docu_cliente',  [ ''=> 'Seleccione Tipo de Documento..', 'DUI' => 'DUI', 'Otro Documento' =>'Otro Documento'], null, ['class' => 'form-control']) !!}            
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('numdocumento_cliente','Numero de Identificación')!!}
        {!! Form::text('numdocumento_cliente',null,['class' => 'validate form-control','placeholder'=>'Documento de Identificación','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('direccion_cliente','Direccion')!!}
        {!! Form::text('direccion_cliente',null,['class' => 'validate form-control','placeholder'=>'Dirección Completa','required' => 'required']) !!}
        </div>


        <div class="form-group col-md-6">
        {!! Form::label('teldirecto_cliente','Telefono directo')!!}
        {!! Form::text('teldirecto_cliente',null,['class' => 'validate form-control','placeholder'=>'2222-2222','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('celular_cliente','Celular')!!}
        {!! Form::text('celular_cliente',null,['class' => 'validate form-control','placeholder'=>'7777-7777','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('correo_cliente','Correo Electronico')!!}
        {!! Form::text('correo_cliente',null,['class' => 'validate form-control','placeholder'=>'ejemplo@ejemplo','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('oencargado_cliente','Nombre del encargado de la Oficina')!!}
        {!! Form::text('oencargado_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre del encargado de la oficina','required' => 'required']) !!}
        </div>
        <br>
        <br>

        <div class="form-group col-md-12">
        <center><h3> Refencias Familiares</h3></center>
        </div>


        <div class="form-group col-md-3">
        {!! Form::label('ref1nombre_cliente','Nombre')!!}
        {!! Form::text('ref1nombre_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre Completo','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref1parentesco_cliente','Parentesco')!!}
        {!! Form::text('ref1parentesco_cliente',null,['class' => 'validate form-control','placeholder'=>'Mamá/Papá/etc.','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref1telefono_cliente','Telefono')!!}
        {!! Form::text('ref1telefono_cliente',null,['class' => 'validate form-control','placeholder'=>'2222-2222','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref1celular_cliente','Celular')!!}
        {!! Form::text('ref1celular_cliente',null,['class' => 'validate form-control','placeholder'=>'7777-7777','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref2nombre_cliente','Nombre')!!}
        {!! Form::text('ref2nombre_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre Completo']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref2parentesco_cliente','Parentesco')!!}
        {!! Form::text('ref2parentesco_cliente',null,['class' => 'validate form-control','placeholder'=>'Mamá/Papá/etc.']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref2telefono_cliente','Telefono')!!}
        {!! Form::text('ref2telefono_cliente',null,['class' => 'validate form-control','placeholder'=>'2222-2222']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref2celular_cliente','Celular')!!}
        {!! Form::text('ref2celular_cliente',null,['class' => 'validate form-control','placeholder'=>'7777-7777']) !!}
        </div>

        <div class="form-group col-md-12">
        <center><h3> Refencias Personales</h3></center>
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('ref1per_nombre_cliente','Nombre Completo')!!}
        {!! Form::text('ref1per_nombre_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre Completo','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref1per_telefono_cliente','Telefono')!!}
        {!! Form::text('ref1per_telefono_cliente',null,['class' => 'validate form-control','placeholder'=>'2222-2222','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref1per_celular_cliente','Celular')!!}
        {!! Form::text('ref1per_celular_cliente',null,['class' => 'validate form-control','placeholder'=>'7777-7777','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('ref2per_nombre_cliente','Nombre Completo')!!}
        {!! Form::text('ref2per_nombre_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre Completo']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref2per_telefono_cliente','Telefono')!!}
        {!! Form::text('ref2per_telefono_cliente',null,['class' => 'validate form-control','placeholder'=>'2222-2222']) !!}
        </div>

        <div class="form-group col-md-3">
        {!! Form::label('ref2per_celular_cliente','Celular')!!}
        {!! Form::text('ref2per_celular_cliente',null,['class' => 'validate form-control','placeholder'=>'7777-7777']) !!}
        </div>


        <div class="form-group col-md-12">
        <center><h3> Datos de Oficina </h3></center>
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('tcontrato_cliente', 'Tipo de contrato') !!}
        {!! Form::select('tcontrato_cliente', [''=> 'Seleccione Tipo de Contato..','V'=> 'Virtual', 'F' => 'Fisico'],null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('saludoper_cliente','Saludo Personalizado')!!}
        {!! Form::text('saludoper_cliente',null,['class' => 'validate form-control','placeholder'=>'Saludo']) !!}
        </div>

        <div class="form-group col-md-6 col-sm-12 col-lg-6">
        {{Form::label('plazo_cliente','Plazo/Meses')}}
        {{Form::number('plazo_cliente',null,['class'=>'form-control','placeholder'=>'eje: 6'])}}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label ('fechain_cliente','Fecha de Inicio del Contrato')!!}
        {{Form::date('fechain_cliente', \Carbon\Carbon::now(),['class'=>'form-control'])}}
        </div>

        
        <div class="form-group col-md-12">   
            {!! Form::submit ('Guardar', ['class' => 'btn btn-success'])!!}
        </div>
        </div>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#Juridico').hide();

                var select  = $('#type_cliente');

                select.change(function(){
                    select.val();
                    if (select == 'Natural') {                        
                        $ ('#Juridico').hide();
                    }

                    else {
                        $ ('#Juridico').show();
                    }

                    
                });
            });
        </script>


 </div>
 </div>    
 </div>
 </div>
 </div>
        {!! Form::close()!!}

@endsection