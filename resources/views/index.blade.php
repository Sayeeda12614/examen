@extends("layouts.master")

@section("head-extras")
    <link rel="stylesheet" href="{{asset("css/general.css")}}">
@endsection

@section("content")

@if($message = Session::get('success'))
    <div class="alert alert-success mensaje w-100">
        <p>{{$message}}</p>
    </div>
@endif

    <a href="{{route("formulibro")}}" class="btn btn-success">Crear</a>
    <table>
        <tr>
            <th>Caratula</th>
            <th>Titulo</th>
            <th>Autor</th>
        </tr>
        @foreach($libros as $libro)
        <tr>
            <td> <img src="imagenes\{{ $libro->caratula }}" style="height:100px;" alt="Foto"></td>
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->autores->nombre}}</td>
            <td><a href="" class="btn btn-primary">Ver</a></td>
            <td><a href="" class="btn btn-primary">Editar</a></td>
            <td><a href="" class="btn btn-danger">Eliminar</a></td>
        </tr>
        @endforeach
    </table>
   

@endsection