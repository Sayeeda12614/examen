@extends("layouts.master")

@section("head-extras")
    <link rel="stylesheet" href="{{asset("css/general.css")}}">
@endsection

@section("content")
    
        <h1>Mi BIBLIOTECA. Ultima adquisicion</h1>
        <img src="imagenes\{{ $libro->caratula }}" style="height:100px;" alt="Foto">
        <p>{{$libro->titulo}}</p>
        <p><b>Autor: </b>{{$libro->autores->nombre}}</p>
@endsection