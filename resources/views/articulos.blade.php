<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos</title>
</head>
<body>
<h1>Articulos</h1>
    <h2>Bienvenido {{ $user->name }}</h2>
    <form method="GET" action="{{ route('logout') }}">
        <input type="submit" value="Cerrar Sesión">
    </form>
    <ul>
        @foreach ($articulos as $articulo)
            <li><a href=" {{ route('detalleArticulo', $articulo->id) }}">{{$articulo->titulo; }}</a></li> <a href="{{ route('borrarArticulo', $articulo->id) }}">Borrar</a>
        @endforeach
    </ul>

    <a href="{{ route('crearArticulo', $articulo->id) }}">Nuevo Articulo</a>
</body>
</html>
