<?php
include_once 'conexionvacantes.php';

    $NombreE=$_POST['NombreE'];
    $Puesto=$_POST['Puesto'];
    $PerfilP=$_POST['PerfilP'];
    $Sueldo=$_POST['Sueldo'];
    $Ubicacion=$_POST['Ubicacion'];
    $Contrato=$_POST['Contrato'];
    $Horario=$_POST['Horario'];
    $CorreoC=$_POST['CorreoC'];
    $PersonaC=$_POST['PersonaC'];
    $Telefono=$_POST['Telefono'];

    $sqlinsert= "INSERT INTO vacantes VALUES(0,'$NombreE', '$Puesto', '$PerfilP', '$Sueldo', '$Ubicacion', '$Contrato', '$Horario', '$CorreoC', '$PersonaC', '$Telefono');";


mysqli_query($mysqli, $sqlinsert);

header("location: /Prueba1/Pasantia/formulario/FormularioVacantes.php");
?>