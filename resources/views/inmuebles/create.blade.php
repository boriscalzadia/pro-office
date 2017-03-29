@extends('templates.main')
@section('tittle','Nuevo mueble')
@section('content')
	 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
            <div class="panel-heading"> <h3>Nuevo Mueble </h3> </div>
          
                <div class="panel-body">
				
					{{Form::open(['route'=>'inmuebles.store','method'=>'POST'])}}
					<div class="form-group col-md-6 col-sm-12 col-lg-6">
						{{Form::label('nombre','Nombre del mueble')}}
						{{Form::text('nombre',null,['class'=>'form-control','placeholder'=>'eje: Silla de cuero'])}}
					</div>
					<div class="form-group col-md-6 col-sm-12 col-lg-6">
						{{Form::label('cantidad','cantidad del mueble')}}
						{{Form::number('cantidad',null,['class'=>'form-control','placeholder'=>'eje: 10'])}}
					</div>
					<div class="form-group col-md-12 col-sm-12 col-lg-12">
						{{Form::label('descripcion','Descripción del mueble')}}
						{{Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'eje: Silla de cuero reclinable muy comoda y buena< para la espalda'])}}
					</div>
					<div class="col-md-12">
						{{Form::submit('Guardar',['class'=>'btn btn-success'])}}
					</div>
					{{Form::close()}}
				</div>
			</div>
			</div>
			</div>
			</div>
		</div>
	</div>
@endsection