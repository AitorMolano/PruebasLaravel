<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo articulo</title>
</head>
<body>
    <h1>Crear nuevo artículo</h1>
    <form method="POST" action="{{ route('nuevoArticulo') }}">
        @csrf
        <input type="text" placeholder="Nombre" name="titulo"><br>
        <textarea placeholder="Contenido" name="contenido"></textarea>
        <input type="submit" value="Guardar">
    </form>

    <a href="{{ route('articulos') }}">Volver</a>
</body>
</html>