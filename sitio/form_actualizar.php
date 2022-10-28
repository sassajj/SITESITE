<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    include("conectar.php");

    if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){

  

        $id = $_POST["id"];

        $link = mysqli_connect($host, $user ,$pass, $db) or die("Problemas para conectar");

        if($link){
            echo "Conexion Exitosa";
        }else{
            echo "Problemas para conectar";
        }

        $select = "SELECT * FROM datos_clientes WHERE = '$id'";

        $result = mysqli_query($link, $select);

        $row = mysqli_fetch_array($result);

    echo $row["id"]."<br>";
    echo $row["Nombre"]."<br>";
    echo $row["Apellido"]."<br>";
    echo $row["Direccion"]."<br>";

    }
   
   ?>


    
    
<form action="form_actualizar.php" method="post">

    <h2>Ingrese el ID del Cliente que desea actualizar:</h2>

    <label for="id">ID Cliente</label>
    
    <input type="text" name="id" id="id" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["id"]; }else{echo "";} ?>">

    <input type="submit" value="Buscar" name="buscar" id="buscar">

</form>

    <br>
    <br>
    <br>
    
<form action="actualizar.php" method="post">

    <input type="hidden" name="id_cliente" value="">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido">

    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion">

    <input type="submit" name="Actualizar" id="actualizar" value="Actualizar">

</form>

</body>
</html>