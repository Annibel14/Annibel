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
<div class="Form" style="background: #ffcd71; border: 1px solid black; width: 400px; height: 900px;">
    <form method="GET" action="conexionvacantes.php" > <br>
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
    </center>
</body>
</html>