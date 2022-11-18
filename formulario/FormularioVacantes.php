<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Estilo1.css">
    <title>VACANTES</title>
</head>

<body> <center>
<div class="Form" style="background: #688391; border: 1px solid black; width: 450px; height: 1000px; font-size: 18px; margin-top: 30px; margin-bottom: 30px; border-radius: 8px; color: white;">
    <form method="POST" action="insertvacantes.php" > <br>
        <h3>VACANTES</h3><br>
        <P>Nombre de la empresa</P>
        <input type="text" name="NombreE">
        <p>Nombre del puesto</p>
        <input type="text" name="Puesto"> 
        <p>Funciones o perfil del puesto</p>
        <input type="text" name="PerfilP">
        <p>Sueldo</p>
        <input type="number" name="Sueldo">
        <p>Ubicación</p>
        <input type="text" name="Ubicacion">
        <p>Tipo de contrato</p>
        <select name="Contrato">
            <option value="Fijo">Fijo</option>
            <option value="Temporal">Temporal</option>
        </select>
        <p>Horario</p>
        <select name="Horario">
            <option value="Matutino">Matutino</option>
            <option value="Vespertino">Vespertino</option>
        </select>
        <p>Correo al que se deben enviar los curriculum</p>
        <input type="text" name="CorreoC">
        <p>Persona de contacto</p>
        <input type="text" name="PersonaC">
        <p>Telefono</p>
        <input type="number" name="Telefono"> <br> <br>
        <input type="submit" value="ENVIAR"> <br> <br> <br> <br>
    </form>
</div>

<h3>DATOS GUARDADOS</h3>

<table border="2">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Puesto</th>
            <th>Perfil</th>
            <th>Sueldo</th>
            <th>Ubicacion</th>
            <th>Contrato</th>
            <th>Horario</th>
            <th>Correo</th>
            <th>Persona Contacto</th>
            <th>Telefono</th>
        </tr>


<?php 
    require("conexionvacantes.php");

    $query = "SELECT * FROM vacantes";
    $data = mysqli_query($mysqli, $query);
    $total = mysqli_num_rows($data);

    if($total!=0){
        while($row=mysqli_fetch_assoc($data)){
            echo "<tr> 
            <td>" . $row['IdVacante'] . "</td> 
            <td>" . $row['NombreE'] . "</td> 
            <td>" . $row['Puesto'] . "</td> 
            <td>" . $row['PerfilP'] . "</td>
            <td>" . $row['Sueldo'] . "</td> 
            <td>" . $row['Ubicacion'] . "</td> 
            <td>" . $row['TipoContrato'] . "</td> 
            <td>" . $row['Horario'] . "</td> 
            <td>" . $row['CorreoC'] . "</td> 
            <td>" . $row['PersonaContacto'] . "</td> 
            <td>" . $row['Telefono'] . "</td> 
            <td> <a href='deletevacantes.php?Id=$row[IdVacante]'>Borrar</td></tr>";;
        }
    }

    ?>
    </table>

    <h3>Buscar Vacantes</h3>

    <form action="buscarvacantes.php" method="GET">
        <input type="text" name="Nombre" placeholder="Nombre"> <br> <br>
        <input type="submit" value="BUSCAR">
    </form> <br>

    <h3>Editar Vacantes</h3>

    <form action="updatevacantes.php" method="POST">
        <input type="text" name="Id" placeholder="Id"> <br><br>
        <input type="submit" value="EDITAR">
    </form> <br><br>
    
    </center>
</body>
</html>