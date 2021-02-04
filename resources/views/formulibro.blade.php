@extends("layouts.master")

@section("head-extras")
    <link rel="stylesheet" href="{{asset("css/general.css")}}">
@endsection

@section("content")

@if($message = Session::get('error'))
    <div class="alert alert-success mensaje w-100">
        <p>{{$message}}</p>
    </div>
@endif
        <form action="/crearlibro" enctype="multipart/form-data" method="POST"> 
            @csrf

            <h2>Añadir nuevo Libro</h2>
            Titulo: <input type="text" name="titulo"><br><br>
            Autor:
            <select name="autor" id="autor">
                @foreach($autores as $autor)
                <option value="{{$autor->id}}">{{$autor->nombre}}</option>
                @endforeach
            </select><br><br>
            Isbn: <input type="isbn" name="isbn"><br><br>
            Selecciona la caratula del libro: <input type="file" name="caratula"><br><br>
            <input type="submit" value="crear libro" class="btn btn-danger">
            <a href="{{route("index")}}" class="btn btn-dark">Volver al listado</a>
       </form>  

@endsection