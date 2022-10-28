<?php

    include("conectar.php");

    if(isset($_POST["id"])){

      $id =  $_POST["id"];
      $nombre =  $_POST["nombre"];
      $apellido =  $_POST["apellido"];
      $direccion =  $_POST["direccion"];

      $link = mysqli_connect($host, $user, $pass, $db) or die("Problemas para conectar con la base de datos");

      $sql = "UPDATE datos_clientes SET Nombre = '$nombre' , Apellido = '$apellido', Direccion = '$direccion'
              WHERE id = '$id' ";
              
      $result = mysqli_query($link, $sql);

      if($result){
        echo "Datos actualizados correctamente";

    }else{
        echo "Problemas para actualizar";
    }

}else{
    echo "Problemas para cargar los datos";

}

?>