<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos - Detalle</title>
</head>
<body>
<h1>{{ $articulo->titulo; }}</h1>

<p>{{ $articulo->contenido; }}</p>

<h2>Comentarios</h2>

<ul>
    @foreach($comentarios as $comentario)
        <li>{{ $comentario->texto; }}</li>
    @endforeach
</ul>

<h2>Nuevo comentario</h2>

<form method="POST" action=" {{ route('nuevoComentario') }}">
    @csrf
    <input type="text" placeholder="Comentario" name="comment">
    <input type="submit" value="Enviar"/>
</form>
<a href="{{ route('articulos') }}">Volver</a>
</body>
</html>
