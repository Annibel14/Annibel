<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>

    <h3>Modificar Estudiantes</h3>
    <?php
    include_once 'conexionestudiantes.php'; 
    $Id = $_POST['Id'];

    $sql ="SELECT * FROM estudiante where IdEstudiante=$Id;";

    $result = mysqli_query($conexion, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        $row = mysqli_fetch_assoc($result);
    $Id = $row['IdEstudiante'] ?? null;
    $AnoG=$row['AnoG'] ?? null;
    $CentroE=$row['CentroE'] ?? null;
    $Curso=$row['Curso'] ?? null;
    $Matricula=$row['Matricula'] ?? null;
    $Cedula=$row['Cedula'] ?? null;
    $CarreraT=$row['CarreraT'] ?? null;
    $TecnicoB=$row['TecnicoB'] ?? null;
    $Nombres=$row['Nombres'] ?? null;
    $Apellidos=$row['Apellidos'] ?? null;
    $FechaNac=$row['FechaNac'] ?? null;
    $Sexo=$row['Sexo'] ?? null;
    $Direccion=$_POST['Direccion'] ?? null;
    $Sector=$row['Sector'] ?? null;
    $Seccion=$row['Seccion'] ?? null;
    $Municipio=$row['Municipio'] ?? null;
    $Provincia=$row['Provincia'] ?? null;
    $PaisNac=$row['PaisNac'] ?? null;
    $TelefonoR=$row['TelefonoR'] ?? null;
    $TelefonoM=$row['TelefonoM'] ?? null;
    $Licencia=$row['Licencia'] ?? null;
    $VehiculoP=$row['VehiculoP'] ?? null;
    $AnosExp=$row['AnosExp'] ?? null;
    $AreaTecEst=$row['AreaTecEst'] ?? null;
    $OtraAreaBtn=$row['OtraAreaBtn'] ?? null;
    $OtraAreaEspecificacion=$row['OtraAreaEspecificacion'] ?? null;
    $CVarchivo=$row['CVarchivo'] ?? null;
    $Email=$row['Email'] ?? null;
    $ConfEmail=$row['ConfEmail'] ?? null;
    $Contrasena=$row['Contrasena'] ?? null;
    $ConfContrasena=$row['ConfContrasena'] ?? null;

    }
    ?>

    <form action="actualizaestudiante.php" method="POST">
    <br>
        <input type="text" name="Id" placeholder="Id" value="<?php echo $Id; ?>">
        <br>
        <input type="text" name="AnoG" placeholder="Ano de graduacion" value="<?php echo $AnoG; ?>">
        <br>
        <input type="text" name="Centro educativo" placeholder="Centro educativo" value="<?php echo $CentroE;  ?>">
        <br>
        <input type="text" name="Curso" placeholder="Curso" value="<?php echo $Curso; ?>">
        <br>
        <input type="text" name="Matricula" placeholder="Matricula" value="<?php echo $Matricula;  ?>">
        <br>
        <input type="text" name="Cedula" placeholder="Cedula" value="<?php echo $Cedula; ?>">
        <br>
        <input type="text" name="CarreraT" placeholder="CarreraT" value="<?php echo $CarreraT;  ?>">
        <br>
        <input type="text" name="TecnicoB" placeholder="TecnicoB" value="<?php echo $TecnicoB; ?>">
        <br>
        <input type="text" name="Nombres" placeholder="Nombres" value="<?php echo $Nombres;  ?>">
        <br>
        <input type="text" name="Apellidos" placeholder="Apellidos" value="<?php echo $Apellidos; ?>">
        <br>
        <input type="text" name="FechaNac" placeholder="FechaNac" value="<?php echo $FechaNac; ?>">   
        <br>
        <input type="text" name="Sexo" placeholder="Sexo" value="<?php echo $Sexo; ?>">
        <br>
        <input type="text" name="Direccion" placeholder="Direccion" value="<?php echo $Direccion;  ?>">
        <br>
        <input type="text" name="Sector" placeholder="Sector" value="<?php echo $Sector; ?>">
        <br>
        <input type="text" name="Seccion" placeholder="Seccion" value="<?php echo $Seccion;  ?>">
        <br>
        <input type="text" name="Municipio" placeholder="Municipio" value="<?php echo $Municipio; ?>">
        <br>
        <input type="text" name="Provincia" placeholder="Provincia" value="<?php echo $Provincia;  ?>">
        <br>
        <input type="text" name="PaisNac" placeholder="PaisNac" value="<?php echo $PaisNac; ?>">
        <br>
        <input type="text" name="TelefonoR" placeholder="TelefonoR" value="<?php echo $TelefonoR;  ?>">
        <br>
        <input type="text" name="TelefonoM" placeholder="TelefonoM" value="<?php echo $TelefonoM; ?>">
        <br>
        <input type="text" name="Licencia" placeholder="Licencia" value="<?php echo $Licencia; ?>">
        <br>
        <input type="text" name="Vehiculo" placeholder="Vehiculo" value="<?php echo $VehiculoP; ?>">   
        <br>
        <input type="text" name="Anos de experiencia" placeholder="Anos de experiencia" value="<?php echo $AnosExp; ?>">
        <br>
        <input type="text" name="Area tecnica" placeholder="Area tecnica" value="<?php echo $AreaTecEst;  ?>">
        <br>
        <input type="text" name="Otra Area" placeholder="Otra Area" value="<?php echo $OtraAreaBtn; ?>">
        <br>
        <input type="text" name="Especificacion de area" placeholder="Especificacion de area" value="<?php echo $OtraAreaEspecificacion;  ?>">
        <br>
        <input type="text" name="Curriculum Vitae" placeholder="Curriculum Vitae" value="<?php echo $CVarchivo; ?>">
        <br>
        <input type="email" name="Email" placeholder="Email" value="<?php echo $Email;  ?>">
        <br>
        <input type="emal" name="Confirmacion de email" placeholder="Confirmacion de email" value="<?php echo $ConfEmail; ?>">
        <br>
        <input type="password" name="Contrasena" placeholder="Contrasena" value="<?php echo $Contrasena;  ?>">
        <br>
        <input type="password" name="Confirmar contrasena" placeholder="Confirmar contrasena" value="<?php echo $ConfContrasena; ?>">
        <br>
        <button type="submit" name="update">EDITAR</button>
    </form>


</body>
</html>