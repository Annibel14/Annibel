<?php

    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "Chocolate123";
    $basedatos = "pasantia";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $basedatos);

   /* if($conexion-> connect_error){
        die("Conexion Fallida; " $conexion-> connect_error);
    }*/

    echo "Conexion Exitosa ";

    $AnoG=$_REQUEST['AnoG'];
    $CentroE=$_REQUEST['CentroE'];
    $Curso=$_REQUEST['Curso'];
    $Matricula=$_REQUEST['Matricula'];
    $Cedula=$_REQUEST['Cedula'];
    $CarreraT=$_REQUEST['CarreraT'];
    $TecnicoB=$_REQUEST['TecnicoB'];
    $Nombres=$_REQUEST['Nombres'];
    $Apellidos=$_REQUEST['Apellidos'];
    $FechaNac=$_REQUEST['FechaNac'];
    $Sexo=$_REQUEST['Sexo'];
    $Direccion=$_REQUEST['Direccion'];
    $Sector=$_REQUEST['Sector'];
    $Seccion=$_REQUEST['Seccion'];
    $Municipio=$_REQUEST['Municipio'];
    $Provincia=$_REQUEST['Provincia'];
    $PaisNac=$_REQUEST['PaisNac'];
    $TelefonoR=$_REQUEST['TelefonoR'];
    $TelefonoM=$_REQUEST['TelefonoM'];
    $Licencia=$_REQUEST['Licencia'];
    $VehiculoP=$_REQUEST['VehiculoP'];
    $AnosExp=$_REQUEST['AnosExp'];
    $AreaTecEst=$_REQUEST['AreaTecEst'];
    $OtraAreaBtn=$_REQUEST['OtraAreaBtn'];
    $OtraAreaEspecificacion=$_REQUEST['OtraAreaEspecificacion'];
    $CVarchivo=$_REQUEST['CVarchivo'];
    $Email=$_REQUEST['Email'];
    $ConfEmail=$_REQUEST['ConfEmail'];
    $Contrasena=$_REQUEST['Contrasena'];
    $ConfContrasena=$_REQUEST['ConfContrasena'];
   

    $query="insert into estudiante values(0,'$AnoG', '$CentroE', '$Curso', '$Matricula', '$Cedula', '$CarreraT', '$TecnicoB', '$Nombres', '$Apellidos', '$FechaNac', '$Sexo', '$Direccion', '$Sector', '$Seccion', '$Municipio', '$Provincia', '$PaisNac', '$TelefonoR', '$TelefonoM', '$Licencia', '$VehiculoP', '$AnosExp', '$AreaTecEst', '$OtraAreaBtn', '$OtraAreaEspecificacion', '$CVarchivo', '$Email', '$ConfEmail', '$Contrasena', '$ConfContrasena')";
    echo $query;
    $x=mysqli_query($conexion,$query);
    echo $x;

   /* if($result=mysqli_query($conexion,$query)){
        print("Nuevos valores guardados",mysqli_insert_id($conexion));
    }*/
?>