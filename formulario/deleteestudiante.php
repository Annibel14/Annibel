<?php
require("conexionestudiantes.php");

if ($mysqli->connect_errno) {

    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " 
    . $mysqli->connect_error;
}

$Id = $_REQUEST['Id'];

$query = "DELETE FROM estudiante WHERE IdEstudiante = '$Id';";

echo $query;
mysqli_query($conexion, $query);

header("location: /Pasantia/formulario/estudiantes.php");
?>