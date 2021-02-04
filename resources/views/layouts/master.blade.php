<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hoteles de examen  </title>

    @yield("head-extras")

</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <button class="navbar-toggler btn" data-toggle="collapse" data-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ">

            <li class="nav-ite m-auto mx-lg-0">
                <a class="navbar-brand m-auto text-light" href="{{route("entrada")}}"><img src="" alt=""></a>
            </li>
            <li class="nav-ite m-auto mx-lg-0">
                <a class="navbar-brand m-auto text-light" href="{{route("entrada")}}"><h4>Biblioteca</h4></a>
            </li>
            <li class="nav-ite m-auto mx-lg-0">
                <a class="navbar-brand m-auto text-light" href="{{route("entrada")}}">Entrada</a>
            </li>
            <li class="nav-item m-auto mx-lg-0">
                <a class="nav-link m-auto text-light" href="{{route("index")}}">Libros</a>
            </li>
            <li class="nav-item m-auto mx-lg-0">
                <a class="nav-link text-light" href="{{route("entrada")}}">Autores</a>
            </li>

        </ul>
    </div>
</nav>

    </header>
    <main id="app">
        @yield("content")
    </main>
    <footer>
    
    </footer>
</body>
</html>
