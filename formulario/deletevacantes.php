<?php
require("conexionvacantes.php");

if ($mysqli->connect_errno) {

    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " 
    . $mysqli->connect_error;
}

$Id = $_REQUEST['Id'];

$query = "DELETE FROM vacantes WHERE IdVacante = '$Id';";

echo $query;
mysqli_query($mysqli, $query);

header("location: /Prueba1/Pasantia/formulario/FormularioVacantes.php");
?>