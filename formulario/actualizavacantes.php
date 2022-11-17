<?php
include_once 'conexionvacantes.php';

$Id = $_POST['IdVacante'];

if(isset($_POST['update'])){

    $Id = $_POST['IdVacante'];
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

    $query = "UPDATE 'vacantes' SET NombreE='$Nombre', Puesto='$Puesto', Perfil='$PerfilP', Sueldo='$Sueldo', Ubicacion='$Ubicacion', Contrato='$Contrato', Horario='$Horario', Correo='$CorreoC', Contacto='$PersonaC', Telefono='$Telefono' WHERE IdVacante=$Id";
    mysqli_query($mysqli, $query);
}

header("location: /Prueba1/Pasantia/formulario/FormularioVacantes.php");
?>