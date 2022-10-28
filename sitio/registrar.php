<?php

    include("conectar.php");

    if(isset($_POST["enviar"])){

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];
        $peliculas = "";

        if(isset($_POST["peliculas"])){


            foreach($_POST["peliculas"] as $valor){

                $peliculas = $peliculas . " - " . $valor;
            }
        }

        echo $nombre . "<br>";
        echo $apellido . "<br>";
        echo $direccion . "<br>";

        $link = mysqli_connect($host, $user, $pass, $db) or die("Problemas para conectar con la base de datos");

            if($link==true){

            echo "Conexion Exitosa";

    }else{

            echo "Problemas para conectar con la base de datos";

    }

    $sql = "INSERT INTO datos_clientes(Nombre, Apellido, Dirección, Peliculas) VALUES('$nombre', '$apellido', '$direccion', '$peliculas')";

    
    if($result){

        echo "Datos insertados correctamente";

    }else{

        echo "Problemas para insertar datos";

    }

    }else{

        echo "Problemas para enviar los datos del formulario";
    
    }    
?> 