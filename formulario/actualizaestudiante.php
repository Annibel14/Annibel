<?php
require ("conexionestudiantes.php");

   // $Id = $_POST['Id'];

    $query = "UPDATE estudiante SET  AnoG='$_POST[AnoG] ',  CentroE='$_POST[CentroE] ', Curso='$_POST[Curso] ', Matricula='$_POST[Matricula] ', Cedula='$_POST[Cedula] ', CarreraT='$_POST[CarreraT] ', TecnicoB='$_POST[TecnicoB] ', Nombres='$_POST[Nombres] ', Apellidos='$_POST[Apellidos] ', FechaNac='$_POST[FechaNac] ', Sexo='$_POST[Sexo] ', Direccion='$_POST[Direccion] ', Sector='$_POST[Sector] ', Seccion='$_POST[Seccion] ', Municipio='$_POST[Municipio] ', Provincia='$_POST[Provincia] ', PaisNac='$_POST[PaisNac] ', TelefonoR='$_POST[TelefonoR] ', TelefonoM='$_POST[TelefonoM] ', Licencia='$_POST[Licencia] ', VehiculoP='$_POST[VehiculoP] ', AnosExp='$_POST[AnosExp] ', AreaTecEst='$_POST[AreaTecEst] ', OtraAreaBtn='$_POST[OtraAreaBtn] ', OtraAreaEspecificacion='$_POST[OtraAreaEspecificacion] ', CVarchivo='$_POST[CVarchivo] ', Email='$_POST[Email] ', ConfEmail='$_POST[ConfEmail] ', Contrasena='$_POST[Contrasena] ', ConfContrasena='$_POST[ConfContrasena]' WHERE IdEstudiante = $_POST[Id]";

    mysqli_query($conexion, $query);
    echo $query; 
    header("location: /Pasantia/formulario/estudiantes.php");

?>