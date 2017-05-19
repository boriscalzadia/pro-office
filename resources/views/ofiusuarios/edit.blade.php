@extends('templates.main')
@section('tittle','Editar Usuario de Oficina')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
            <div class="panel-heading"> <h3>Editar Usuario de Oficina </h3></div>
          
                <div class="panel-body">
      {!! Form::open(['route' =>['ofiusuarios.update', $ofiusuarios->id], 'method' =>'PUT']) !!}


       <center><h3> Datos Generales</h3></center>
        
        <div class="form-group col-md-12">
            {!! Form::label('id_cliente', 'Nombre Comercial de la Empresa')!!}
            {!! Form::select('id_cliente', $clientes,$ofiusuarios->id_cliente, ['class' => 'form-control', 'placeholder'=> 'Seleccione una Empresa', 'required'])!!}
        </div>
        <div class="form-group col-md-12">
            {!! Form::label('name_ofiusurios', 'Nombre Completo')!!}
            {!! Form::text('name_ofiusuarios', $ofiusuarios->name_ofiusuarios, ['class' => 'validate form-control', 'placeholder'=> 'Nombre Completo', 'required'])!!}
        </div>
        <div class="form-group col-md-6">
        {!! Form::label('DUI_ofiusuarios', 'Documento de Indentidad')!!}
        {!! Form::text('DUI_ofiusuarios', $ofiusuarios->DUI_ofiusuarios,['class' => 'validate form-control', 'placeholder' => 'Documento de Identidad', 'required'])!!}
        </div>
        <div class="form-group col-md-6">
        {!! Form::label('NIT_ofiusuarios', 'NIT del Usuario')!!}
        {!! Form::text('NIT_ofiusuarios',$ofiusuarios->NIT_ofiusuarios,['class' => 'validate form-control', 'placeholder' => '0000-000000-000-0','required']) !!}
        </div>
       <div class= "form-group col-md-6">
       {!! Form::label('fechanac_ofiusuarios', 'Fecha de Nacimiento')!!}
       {{ Form::date('fechanac_ofiusuarios', $ofiusuarios->fechanac_ofiusuarios,['class' => 'form-control'])}}
       </div>

       <div class="form-group col-md-6">
       {!! Form::label('email_ofiusuarios', 'Correo Electronico')!!}
       {!! Form::email('email_ofiusuarios', $ofiusuarios->email_ofiusuarios, ['class' => 'validate form-control', 'placeholder' => 'ejemplo@ejemplo.com', 'required'])!!}
       </div>

       <div class="form-group col-md-6">
       {!! Form::label('direccion_ofiusuarios', 'Direccion')!!}
       {!! Form::text('direccion_ofiusuarios', $ofiusuarios->direccion_ofiusuarios, ['class'=> 'validate form-control', 'placeholder' => 'Direccion', 'required'])!!}
       </div>

       <div class="form-group col-md-6">
       {!! Form::label('municipio_ofiusuarios', 'Municipio')!!}
       {!! Form::text('municipio_ofiusuarios', $ofiusuarios->municipio_ofiusuarios, ['class' => 'validate form-control', 'placeholder'=> 'Municipio', 'required'])!!}
       </div>

       <div class="form-group col-md-6">
       {!! Form::label('departamento_ofiusuarios', 'Departamento')!!}
       {!! Form::select('departamento_ofiusuarios', ['' => 'Seleccione un Departamento..', 'Ahuachapán'=> 'Ahuachapán', 'Santa Ana' => 'Santa Ana', 'Sonsonate'=> 'Sonsonate', 'Usulután'=>'Usulután', 'San Miguel'=>'San Miguel', 'Morazán'=>'Morazán', 'La Unión'=>'La Unión', 'La Libertad'=> 'La Libertad', 'Chalatenango'=>'Chalatenango', 'Cuscatlán'=>'Cuscatlán', 'San Salvador'=>'San Salvador', 'La Paz'=>'La Paz', 'Cabañas'=>'Cabañas','San Vicente'=>'San Vicente'], $ofiusuarios->departamento_ofiusuarios,['class' =>'validate form-control'])!!}
       </div>
       <div class="form-group col-md-6">
       {!! Form::label('telcasa_ofiusuarios','Telefono Domiciliar')!!}
       {!! Form::text('telcasa_ofiusuarios',$ofiusuarios->telcasa_ofiusuarios, ['class' => 'validate form-control', 'placeholder' => '2222-2222', 'required'])!!}
       </div>

       <div class="form-group col-md-6">
       {!! Form::label('telmovil_ofiusuarios','Celular')!!}
       {!! Form::text('telmovil_ofiusuarios',$ofiusuarios->telmovil_ofiusuarios,['class' => 'validate form-control','placeholder'=>'7777-7777', 'required'])!!}
       </div>

       <div class="form-group col-md-6">
       {!! Form::label('extension_ofiusuarios', 'Extencion/Telefono')!!}
       {!! Form::text('extension_ofiusuarios', $ofiusuarios->extension_ofiusuarios, ['class' => 'validate form-control', 'placeholder' => '2222', 'required'])!!}
       </div>

        <center><h3> En Caso de Emergencia Llamar a:</h3></center>

       <div class="form-group col-md-12">
       {!! Form::label('numemergencia_ofiusuarios', 'Nombre Completo')!!}
       {!! Form::text('numemergencia_ofiusuarios',$ofiusuarios->numemergencia_ofiusuarios, ['class' => 'validate form-control','placeholder'=>'Nombre Completo', 'required'])!!}
       </div>

       <div class="form-group col-md-6">
       {!! Form::label('parentesco_ofiusuarios', 'Parentesco')!!}
       {!! Form::text('parentesco_ofiusuarios', $ofiusuarios->parentesco_ofiusuarios, ['class' => 'validate form-control', 'placeholder'=>'Mamá/Papá/Tia', 'required'])!!}
       </div>

       <div class="form-group col-md-6">
       {!! Form::label('emailemergencia_ofiusuarios', 'Correo')!!}
       {!! Form::email('emailemergencia_ofiusuarios', $ofiusuarios->emailemergencia_ofiusuarios, ['class' => 'validate form-control', 'placeholder' => 'ejemplo@ejemplo'])!!}
       </div>

       <div class="form-group col-md-6">
       {!! Form::label('telemergencia_ofiusuarios', 'Telefono')!!}
       {!! Form::text('telemergencia_ofiusuarios', $ofiusuarios->telemergencia_ofiusuarios, ['class' => 'validate form-control',  'placeholder'=> '2222-2222'])!!}
       </div>

       <div class="form-group col-md-6">
       {!! Form::label('celemergencia_ofiusuarios', 'Celular')!!}
       {!! Form::text('celemergencia_ofiusuarios', $ofiusuarios->celemergencia_ofiusuarios, ['class' => 'validate form-control', 'placeholder' => '7777-7777'])!!}
       </div>

       <div class="form-group col-md-6">
       {!! Form::label('teltrabajo_ofiusuarios', 'Telefono Trabajo')!!}
       {!! Form::text('teltrabajo_ofiusuarios', $ofiusuarios->teltrabajo_ofiusuarios, ['class' => 'validate form-control', 'placeholder' => '2222-2222'])!!}
       </div>

       <div class="form-group col-md-6">
       {!! Form::label('fecha_ofiusuarios','Fecha')!!}
       {{ Form::date('fecha_ofiusuarios', $ofiusuarios->fecha_ofiusuarios,['class' => 'form-control'])}}
       </div>

        

       <div class="form-group"> 
       <center>        
            {!! Form::submit ('Guardar', ['class' => 'btn btn-success'])!!}
            </center>
        </div>

        </div>
       </div>
       </div>
       </div>
       </div>
       </div>

       {!! Form::close()!!}

@endsection