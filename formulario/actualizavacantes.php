<?php
require ("conexionvacantes.php");

//$Id = $_POST['Id'];

    $query = "UPDATE vacantes SET NombreE= '$_POST[Nombre]', Puesto= '$_POST[Puesto]', PerfilP= '$_POST[Perfil]', 
    Sueldo= '$_POST[Sueldo]', Ubicacion= '$_POST[Ubicacion]', TipoContrato= '$_POST[Contrato]', Horario= '$_POST[Horario]', 
    CorreoC= '$_POST[Correo]', PersonaContacto= '$_POST[Contacto]', Telefono= '$_POST[Telefono]' WHERE IdVacante= $_POST[Id]";
    mysqli_query($mysqli, $query);
    echo $query;

header("location: /Prueba1/Pasantia/formulario/FormularioVacantes.php");
?>