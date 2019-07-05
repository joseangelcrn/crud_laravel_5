@extends('plantilla')


@section('seccion')
<div class="container my-4">
    <h1 class="display mt-6">Notas</h1>

    @if (session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div> 
    @endif

    <form action="{{route('notas.crear')}}" method="POST">
        @csrf
        
        @error('nombre')
            <div class="alert alert-danger">
                El nombre es obligatorio
            </div>
        @enderror        
        @error('descripcion')
            <div class="alert alert-danger">
                La descripcion es obligatorio
            </div>
        @enderror

        <input type="text" name="nombre" id="" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre')}}">

        <input type="text" name="descripcion" id="" placeholder="Descripcion" class="form-control mb-2" value="{{old('descripcion')}}">

        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th class="col-2">#id</th>
                <th class="col-2">Nombre</th>
                <th class="col-6">Descripcion</th>
                <th class="col-2">Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notas as $nota)
            <tr>
                <th>

                    {{$nota->id}}
                </th>
                <td>
                    <a href="{{route('notas.detalle',$nota)}}">{{$nota->nombre}}</a>


                </td>
                <td>{{$nota->descripcion}}</td>
                <td>
                <a href="{{route('notas.editar',$nota)}}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{route('notas.eliminar',$nota)}}" method="POST" class="d-inline">
                        @method('DELETE')                        
                        @csrf
                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$notas->links()}}
</div>

@endsection