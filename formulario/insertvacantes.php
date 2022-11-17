<?php
include_once 'conexionvacantes.php';

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

    $sqlinsert= "INSERT INTO vacantes VALUES(0,'$NombreE', '$Puesto', '$PerfilP', '$Sueldo', '$Ubicacion', '$Contrato', '$Horario', '$CorreoC', '$PersonaC', '$Telefono');";


mysqli_query($mysqli, $sqlinsert);

header("location: /Prueba1/Pasantia/formulario/FormularioVacantes.php");
?>