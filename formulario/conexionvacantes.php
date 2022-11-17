<?php
$mysqli = new mysqli("localhost", "root", "castillo", "pasantia");

if ($mysqli->connect_errno) {

    echo "Fallo al conectar MYSQL: (". $mysqli->connect_errno .") "
    . $mysqli->connect_errno;
}

?>