
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Estudiantes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="">
</head>
<body>

<form method="GET" action="conexion.php">

    <section class="form-register">
        <h1><i>Estudiantes</i></h1>
        <h3><i>Regístrate para elegir su opción como estudiante o egresado</i></h3>
        <input class="controls" type="text" name="Año de graduación" id="Año de graduación" placeholder="Elija su año de graduación">
        <input class="controls" type="text" name="Institución educativa a la que pertenece" id="Institución educativa a la que pertenece" placeholder="Elija su institución educativa a la que pertenece">
        <input class="controls" type="text" name="Curso" id="Curso" placeholder="Elija su curso">
        <input class="controls" type="text" name="Matrícula" id="Matrícula" placeholder="Ingrese su matrícula">
        <input class="controls" type="text" name="Cédula de Identidad" id="Cédula de Identidad" placeholder="Ingrese su Cédula de Identidad">
        <input class="controls" type="text" name="Carrera Técnica" id="Carrera Técnica" placeholder="Elija su Carrera Técnica">
        <input class="controls" type="text" name="Técnico básico" id="Técnico básico" placeholder="Elija su Técnico básico">
        <input class="controls" type="text" name="Nombres" id="Nombres" placeholder="Ingrese sus nombres">
        <input class="controls" type="text" name="Apellidos" id="Apellidos" placeholder="Ingrese sus apellidos">
        <input class="controls" type="text" name="Fecha de nacimiento" id="Fecha de nacimiento" placeholder="Ingrese su Fecha de nacimiento">
        <input class="controls" type="text" name="Sexo" id="Sexo" placeholder="Ingrese su Sexo">
        <input class="controls" type="text" name="Dirección" id="Dirección" placeholder="Ingrese su Dirección">
        <input class="controls" type="text" name="Sector" id="Sector" placeholder="Ingrese su Sector">
        <input class="controls" type="text" name="Sección" id="Sección" placeholder="Ingrese su Sección">
        <input class="controls" type="text" name="Provincia" id="Provincia" placeholder="Ingrese su Provincia">
        <input class="controls" type="text" name="País de nacionalidad" id="País de nacionalidad" placeholder="Ingrese su País de nacionalidad">
        <input class="controls" type="text" name="Teléfono Residencial" id="Teléfono Residencial" placeholder="Ingrese su Teléfono Residencial">
        <input class="controls" type="text" name="Teléfono Móvil" id="Teléfono Móvil" placeholder="Ingrese su Teléfono Móvil">
        <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su correo">
        <input class="controls" type="password" name="correo" id="correo" placeholder="Ingrese su contraseña">
        <p>Estoy de acuerdo con <a href="#"> <u>Terminos y Condiciones</u></a></p>
        <a href="" class="main-header__link"><input class="botons" type="submit" value="Registrarse"></a>
    </section>

    <section class="form-login">
        <p>¿Ya tengo una cuenta? <a href="Login/index.html"><u>Inicia sesión</u></a></p>
    </section>
</form>
<?php



echo "Funciono";

?>
</body>
</html>