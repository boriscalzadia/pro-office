@extends('templates.main')
@section('content')
<div class="clientes">
    <h2>Clientes</h2>
    <h3>Nombre: <strong>{{ $clientes->nombre_cliente }}</strong></h3>
    <h3>Tipo de contrato: <strong>
        @if ($clientes->tcontrato_cliente=="V")
            Virtual
        @endif
        @if ($clientes->tcontrato_cliente=="F")
            Fisico
        @endif
        </strong>
    </h3>
    <h3> Sala que ocupa: 
        @foreach ($clientes->salas as $item)
            <strong>{{$item->nombre_sala}}</strong>
        @endforeach
    </h3>
</div>
@endsection