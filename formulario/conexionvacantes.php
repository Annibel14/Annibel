<?php

    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "castillo";
    $basedatos = "pasantia";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $basedatos);

   /* if($conexion-> connect_error){
        die("Conexion Fallida; " $conexion-> connect_error);
    }*/

    echo "Conexion Exitosa ";

    $NombreE=$_REQUEST['NombreE'];
    $Puesto=$_REQUEST['Puesto'];
    $PerfilP=$_REQUEST['PerfilP'];
    $Sueldo=$_REQUEST['Sueldo'];
    $Ubicacion=$_REQUEST['Ubicacion'];
    $Contrato=$_REQUEST['Contrato'];
    $Horario=$_REQUEST['Horario'];
    $CorreoC=$_REQUEST['CorreoC'];
    $PersonaC=$_REQUEST['PersonaC'];
    $Telefono=$_REQUEST['Telefono'];

    $query="insert into vacantes values(0,'$NombreE', '$Puesto', '$PerfilP', '$Sueldo', '$Ubicacion', '$Contrato', '$Horario', '$CorreoC', '$PersonaC', '$Telefono')";
    echo $query;
    $x=mysqli_query($conexion,$query);
    echo $x;

   /* if($result=mysqli_query($conexion,$query)){
        print("Nuevos valores guardados",mysqli_insert_id($conexion));
    }*/
?>