<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body> <center>

    <h3>Modificar Vacantes</h3>
    <?php
    include_once 'conexionvacantes.php'; 
    $Id = $_POST['Id'];

    $sql ="SELECT * FROM vacantes where IdVacante=$Id;";

    $result = mysqli_query($mysqli, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        $row = mysqli_fetch_assoc($result);
        $Nombre=$row['NombreE'];
        $Puesto=$row['Puesto'];
        $Perfil=$row['PerfilP'];
        $Sueldo=$row['Sueldo'];
        $Ubicacion=$row['Ubicacion'];
        $Contrato=$row['TipoContrato'];
        $Horario=$row['Horario'];
        $Correo=$row['CorreoC'];
        $Contacto=$row['PersonaContacto'];
        $Telefono=$row['Telefono'];
    }
    ?>

    <form action="actualizavacantes.php" method="POST">
        <input type="text" name="Id" placeholder="Id" value="<?php echo $Id; ?>"> <br>
        <br>
        <input type="text" name="Nombre" placeholder="Nombre" value="<?php echo $Nombre; ?>"> <br>
        <br>
        <input type="text" name="Puesto" placeholder="Puesto" value="<?php echo $Puesto;  ?>"> <br>
        <br>
        <input type="text" name="Perfil" placeholder="Perfil" value="<?php echo $Perfil; ?>"> <br>
        <br>
        <input type="text" name="Sueldo" placeholder="Sueldo" value="<?php echo $Sueldo;  ?>"> <br>
        <br>
        <input type="text" name="Ubicacion" placeholder="Ubicacion" value="<?php echo $Ubicacion; ?>"> <br>
        <br>
        <input type="text" name="Contrato" placeholder="Contrato" value="<?php echo $Contrato;  ?>"> <br>
        <br>
        <input type="text" name="Horario" placeholder="Horario" value="<?php echo $Horario; ?>"> <br>
        <br>
        <input type="text" name="Correo" placeholder="Correo" value="<?php echo $Correo;  ?>"> <br>
        <br>
        <input type="text" name="Contacto" placeholder="Contacto" value="<?php echo $Contacto; ?>"> <br>
        <br>
        <input type="text" name="Telefono" placeholder="Telefono" value="<?php echo $Telefono; ?>"> <br>
        <br>
        <button type="submit" name="update">EDITAR</button>
    </form></center>


</body>
</html>