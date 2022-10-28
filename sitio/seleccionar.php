<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table class="table">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
        </tr>

    
    

    <?php

        include("conectar.php");

        $link = mysqli_connect($host, $user, $pass, $db) or die("Problemas al conectar con la base de datos");

        if($link){

            echo "Conexion Exitosa<br><br>";
            echo "<hr>";

        }else{

            echo "Problemas para conectar";
        }

        $sql = "SELECT * FROM datos_clientes";

        $result = mysqli_query($link, $sql);

        while($row = mysqli_fetch_array($result)){
        
            echo "<tr>";

        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["Nombre"] . "</td>";
        echo "<td>" . $row["Apellido"] . "</td>";
        echo "<td>" . $row["Direccion"] . "</td>" ;
        
            echo "</tr>";
    }





    ?>

</table>
</body>
</html>