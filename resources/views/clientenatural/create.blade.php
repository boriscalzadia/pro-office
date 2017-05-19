@extends('templates.main')
@section('tittle','Crear Cliente')
@section('content') 
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
            <div class="panel-heading"> <h3>Persona Natural </h3> </div>
          
                <div class="panel-body">
        {!! Form::open(['route' =>'clientenatural.store', 'method'=>'POST']) !!}

    <center><h3> Datos Generales</h3></center>

        <div class="form-group col-md-6">
        {!! Form::label('type_cliente', 'Estado Legal')!!}
        {!!Form::select('type_cliente',  [ 'Natural' =>'Persona Natural'], null, ['class' => 'form-control']) !!}            
        </div>
<<<<<<< HEAD

        <div id="Juridico">
        <div  class="form-group col-md-6">
=======
    
        <div  id="Juridico" class="form-group col-md-6">
>>>>>>> 1925cd95807c4cb5237644436d908daed0b1e41b
            {!! Form::label('razon_cliente', 'Nombre de la Empresa ')!!}
            {!! Form::text('razon_cliente', null, ['class' => 'validate form-control', 'placeholder'=> 'Ejemplo S.A de C.V'])!!}
        </div>

<<<<<<< HEAD
        <div  class="form-group col-md-6">
        {!! Form::label('nit_comercial_cliente','Nit de la Sociedad')!!}
        {!! Form::text('nit_comercial_cliente',null,['class' => 'validate form-control','placeholder'=>'00000000000000']) !!}
        </div>
        </div>

=======
>>>>>>> 1925cd95807c4cb5237644436d908daed0b1e41b
        <div class="form-group col-md-6">
        {!! Form::label('nombre_comercial_cliente', 'Nombre Comercial')!!}
        {!! Form::text('nombre_comercial_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre Comercial']) !!}
        </div>

<<<<<<< HEAD
=======
        <div class="form-group col-md-6">
        {!! Form::label('nit_comercial_cliente','Nit de la Sociedad')!!}
        {!! Form::text('nit_comercial_cliente',null,['class' => 'validate form-control','placeholder'=>'00000000000000']) !!}
        </div>
>>>>>>> 1925cd95807c4cb5237644436d908daed0b1e41b

        <div class="form-group col-md-6">
        {!! Form::label('riva_cliente','Registro IVA')!!}
        {!! Form::text('riva_cliente',null,['class' => 'validate form-control','placeholder'=>'0000000']) !!}
        </div>


        <div class="form-group col-md-6">
        {!! Form::label('giro_cliente','Giro')!!}
        {!! Form::text('giro_cliente',null,['class' => 'validate form-control','placeholder'=>'Giro']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('nombre_representante_natural_cliente','Persona Natural')!!}
        {!! Form::text('nombre_representante_natural_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre Completo']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('docu_cliente', 'Tipo de Documento')!!}
        {!!Form::select('docu_cliente',  [ ''=> 'Seleccione Tipo de Documento..', 'DUI' => 'DUI', 'Otra Identificacion' =>'Otra Identificacion'], null, ['class' => 'form-control']) !!}            
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('numdocumento_cliente','Numero de Identificación')!!}
        {!! Form::text('numdocumento_cliente',null,['class' => 'validate form-control','placeholder'=>'Documento de Identificación','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-6">
        {!! Form::label('nit_cliente','Nit')!!}
        {!! Form::text('nit_cliente',null,['class' => 'validate form-control','placeholder'=>'00000000000000','required' => 'required']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('direccion_cliente', 'Direccion')!!}
            {!! Form::text('direccion_cliente', null,['class' => 'validate form-control', 'placeholder' =>'Direccion'])!!}
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


        <div class="form-group col-md-6">
        {!! Form::label ('fechain_cliente','Fecha de Inicio del Contrato')!!}
        {{Form::date('fechain_cliente', \Carbon\Carbon::now(),['class'=>'form-control'])}}
        </div>

        <div class="form-group col-md-6 col-sm-12 col-lg-6">
        {{Form::label('plazo_cliente','Plazo/Meses')}}
        {{Form::number('plazo_cliente',null,['class'=>'form-control','placeholder'=>'eje: 6'])}}
        </div>
        

        <div class="form-group col-md-6">
        {!! Form::label('estado_cliente', 'Estado del Cliente')!!}
        {!!Form::select('estado_cliente',  [ 'Activo' => 'Activo', 'Suspendido' => 'Suspendido'], null, ['class' => 'form-control']) !!}            
        </div>
        
        <div id=Suspedido class="form-group col-md-6">
        {!! Form::label('observacion_cliente','Motivo del Cambio de Estado')!!}
        {!! Form::text('observacion_cliente',null,['class' => 'validate form-control','placeholder'=>'Nombre Completo']) !!}
        </div>
        

        <div class="form-group col-md-12">   
            {!! Form::submit ('Guardar', ['class' => 'btn btn-success'])!!}
        </div>
    
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#Juridico').hide();

            });


            $(document).ready(function(){
                $('#Suspendido').hide();

                var select = $ ('#estado_cliente');

                select.change(function(){
                    select.val();
                    if (select== 'Activo') {
                        $('#Suspendido').hide();
                    }

                    else {
                        $ ('#Suspendido').show();
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