@extends('plantilla')

@section('seccion')

    <h1>Detalle de nota: </h1>
    <h4>id: {{$nota->id}}</h4>
    <h4>nombre: {{$nota->nombre}}</h4>
    <h4>detalle: {{$nota->descripcion}}</h4>




@endsection
