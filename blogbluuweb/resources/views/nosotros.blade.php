@extends('plantilla')


@section('seccion')
    <h1>Este es mi equipo de trabajo</h1>
    <ul>
        @foreach ($equipo as $item)
            <li><a class="h4 text-danger" href="{{route('nosotros',$item)}}">{{$item}}</a></li>
        @endforeach
    </ul>

    @if (!@empty($nombre))
        
        @switch($nombre)
            @case('Ignacio')
                <h2>El nombre es {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, numquam animi atque porro quod recusandae incidunt? Error, explicabo, a quos vitae amet nam necessitatibus ab nisi, dolorum animi odit consectetur?</p>
                @break
            @case('Juanito')
                <h2>El nombre es {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, numquam animi atque porro quod recusandae incidunt? Error, explicabo, a quos vitae amet nam necessitatibus ab nisi, dolorum animi odit consectetur?</p>
                @break
            @case('Pedrito')
                <h2>El nombre es {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, numquam animi atque porro quod recusandae incidunt? Error, explicabo, a quos vitae amet nam necessitatibus ab nisi, dolorum animi odit consectetur?</p>
                @break


            @default
            
        @endswitch

    @endif
   
@endsection