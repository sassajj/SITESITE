<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
<form action="registrar.php" method="post">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido">

    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion">

    <label for="peliculas">Generos de Peliculas</label>
    <input type="checkbox" name="peliculas[]" id="peliculas" value="Accion"> Acción
    <input type="checkbox" name="peliculas[]" id="peliculas" value="Terror"> Terror
    <input type="checkbox" name="peliculas[]" id="peliculas" value="Drama"> Drama
    <input type="checkbox" name="peliculas[]" id="peliculas" value="Ciencia Ficcion"> Ciencia Ficción
    

    <input type="submit" name="enviar" id="enviar" value="Registrar">

    </form>

</body>
</html>