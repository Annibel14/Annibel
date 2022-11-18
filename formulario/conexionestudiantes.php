<?php

    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "Chocolate123";
    $basedatos = "pasantia";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $basedatos);

   if($conexion-> connect_error){
        die("Conexion Fallida; " .$conexion-> connect_error);
    }
   /* if($result=mysqli_query($conexion,$query)){
        print("Nuevos valores guardados",mysqli_insert_id($conexion));
    }*/
?>