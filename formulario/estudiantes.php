
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Estudiantes</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/Pasantia//css/style.css">
</head>
<body>

<form method="GET" action="conexionestudiantes.php">

    <section class="form-register">
        <h1><i>Estudiantes</i></h1>
        <h3><i>Llene este formulario para elegir su opción como estudiante o egresado</i></h3>
       <br>
       Año de graduación
       <br>
       <center><SELECT NAME="AnoG" class="controls">

<OPTION VALUE="1992">1992
<OPTION VALUE="1993">1993
<OPTION VALUE="1994">1994
<OPTION VALUE="1995">1995
<OPTION VALUE="1996">1996
<OPTION VALUE="1997">1997
<OPTION VALUE="1998">1998
<OPTION VALUE="1999">1999
<OPTION VALUE="2000">2000
<OPTION VALUE="2001">2001
<OPTION VALUE="2002">2002
<OPTION VALUE="2003">2003
<OPTION VALUE="2004">2004
<OPTION VALUE="2005">2005
<OPTION VALUE="2006">2006
<OPTION VALUE="2007">2007
<OPTION VALUE="2008">2008
<OPTION VALUE="2009">2009
<OPTION VALUE="2010">2010
<OPTION VALUE="2011">2011
<OPTION VALUE="2012">2012
<OPTION VALUE="2013">2013
<OPTION VALUE="2014">2014
<OPTION VALUE="2015">2015
<OPTION VALUE="2016">2016
<OPTION VALUE="2017">2017
<OPTION VALUE="2018">2018
<OPTION VALUE="2019">2019
<OPTION VALUE="2020">2020
<OPTION VALUE="2021">2021
<OPTION VALUE="2022">2022
<OPTION VALUE="2023">2023

</SELECT></center>
<br>
<br>
Instituto educativo a la que pertenece
<br>
<SELECT NAME="CentroE" class="controls">

<OPTION VALUE="IPISA" SELECTED>IPISA
<OPTION VALUE="IPIBOSCO">IPIBOSCO
<OPTION VALUE="INAIPI">INAIPI
<OPTION VALUE="IDEICE">IDEICE
<OPTION VALUE="ISFODOSU">ISFODOSU
<OPTION VALUE="INAFOCAM">INAFOCAM
<OPTION VALUE="INABIMA">INABIMA
<OPTION VALUE="INEFI">INEFI
<OPTION VALUE="INABIE">INABIE


</SELECT>   
<br>
<br>
Curso
<br>
<SELECT NAME="Curso" class="controls">

<OPTION VALUE="Tercero de secundaria" SELECTED>Tercero de secundaria
<OPTION VALUE="Cuarto de secundaria">Cuarto de secundaria
<OPTION VALUE="Quinto de secundaria">Quinto de secundaria
<OPTION VALUE="Sexto de secundaria">Sexto de secundaria

</SELECT>    
        <br>    
        <br>
        Matrícula
        <br>
        <input class="controls" type="text" name="Matricula" id="Matrícula" placeholder="Ingrese su matrícula">
        <br><br>
        Cédula de Identidad
        <br>
        <input class="controls" type="text" name="Cedula" id="Cédula de Identidad" placeholder="Ingrese su Cédula de Identidad">
        <br><br>
Carrera Técnica
<br>
<SELECT NAME="CarreraT" class="controls">

<OPTION VALUE="Confección y Patronaje" SELECTED>Confección y Patronaje
<OPTION VALUE="Desarrollo y Administración de Aplicaciones Informáticas">Desarrollo y Administración de Aplicaciones Informáticas
<OPTION VALUE="Electromecánica de Vehículos">Electromecánica de Vehículos
<OPTION VALUE="Ensamblaje de Muebles">Ensamblaje de Muebles
<OPTION VALUE="Equipos Electrónicos">Equipos Electrónicos
<OPTION VALUE="Gestión Administrativa y Tributaria">Gestión Administrativa y Tributaria
<OPTION VALUE="Instalaciones Eléctricas">Instalaciones Eléctricas
<OPTION VALUE="Mecánica Industrial">Mecánica Industrial

</SELECT>    

        <br><br>
       Técnico Básico
        <br>
        <SELECT NAME="TecnicoB" class="controls">

        <OPTION VALUE="">
<OPTION VALUE="N/A">N/A

</SELECT> 
         <br>
         <br>
        Nombres
         <br>
        <input class="controls" type="text" name="Nombres" id="Nombres" placeholder="Ingrese sus nombres">
        <br><br>
        Apellidos
        <br>
        <input class="controls" type="text" name="Apellidos" id="Apellidos" placeholder="Ingrese sus apellidos">
        <br><br>Fecha de nacimiento
        <br>
        <input class="controls" type="date" name="FechaNac" id="Fecha de nacimiento" placeholder="Ingrese su Fecha de nacimiento">
        <br><br>Sexo
        <br>
        <SELECT NAME="Sexo" class="controls">

<OPTION VALUE="Mujer" SELECTED>Mujer
<OPTION VALUE="Hombre">Hombre

</SELECT>
         <br>
         <br>Dirección
        <br>
        
        <input class="controls" type="text" name="Direccion" id="Direccion" placeholder="Ingrese su Dirección">
        <br><br>Sector
        <br>
        <input class="controls" type="text" name="Sector" id="Sector" placeholder="Ingrese su Sector">
        <br><br>Sección
        <br>
        <input class="controls" type="text" name="Seccion" id="Seccion" placeholder="Ingrese su Sección">
        <br><br>Municipio
        <br>
        <input class="controls" type="text" name="Municipio" id="Municipio" placeholder="Ingrese su Municipio">
        <br><br>Provincia
        <br>

        <SELECT NAME="Provincia" class="controls">

<OPTION VALUE="Azua" SELECTED>Azua
<OPTION VALUE="Bahoruco">Bahoruco
<OPTION VALUE="Barahona">Barahona
<OPTION VALUE="Dajabón">Dajabón
<OPTION VALUE="Duarte">Duarte
<OPTION VALUE="El Seibo">El Seibo
<OPTION VALUE="Elías Piña">Elías Piña
<OPTION VALUE="Espaillat">Espaillat
<OPTION VALUE="Hato Mayor">Hato Mayor
<OPTION VALUE="Hermanas Mirabal">Hermanas Mirabal
<OPTION VALUE="Independencia">Independencia
<OPTION VALUE="La Altagracia">La Altagracia
<OPTION VALUE="La Romana">La Romana
<OPTION VALUE="La Vega">La Vega
<OPTION VALUE="María Trinidad Sánchez">María Trinidad Sánchez
<OPTION VALUE="Monseñor Nouel">Monseñor Nouel
<OPTION VALUE="Monte Cristi">Monte Cristi
<OPTION VALUE="Monte Plata">Monte Plata
<OPTION VALUE="Pedernales">Pedernales
<OPTION VALUE="Peravia">Peravia
<OPTION VALUE="Puerto Plata">Puerto Plata
<OPTION VALUE="Samaná">Samaná
<OPTION VALUE="San Cristóbal">San Cristóbal
<OPTION VALUE="San Juan">San Juan
<OPTION VALUE="San José de Ocoa">San José de Ocoa
<OPTION VALUE="San Pedro de Macorís">San Pedro de Macorís
<OPTION VALUE="Santiago de los Caballeros">Santiago de los Caballeros
<OPTION VALUE="Santiago Rodríguez">Santiago Rodríguez
<OPTION VALUE="Santo Domingo">Santo Domingo
<OPTION VALUE="Valverde">Valverde
<OPTION VALUE="Distrito Nacional">Distrito Nacional

</SELECT> 

<br><br>País de nacionalidad
        <br>
        <SELECT NAME="PaisNac" class="controls">

<OPTION VALUE="República Dominicana" SELECTED>República Dominicana
<OPTION VALUE="Albania">Albania
<OPTION VALUE="Alemania">Alemania
<OPTION VALUE="Afganistán">Afganistán
<OPTION VALUE="Andorra">Andorra
<OPTION VALUE="Angola">Angola
<OPTION VALUE="Antigua y Barbuda">Antigua y Barbuda
<OPTION VALUE="Arabia Saudita">Arabia Saudita
<OPTION VALUE="Argelia">Argelia
<OPTION VALUE="Argentina">Argentina
<OPTION VALUE="Armenia">Armenia
<OPTION VALUE="Australia">Australia
<OPTION VALUE="Austria">Austria
<OPTION VALUE="Azerbaiyán">Azerbaiyán
<OPTION VALUE="Bahamas">Bahamas
<OPTION VALUE="Bangladés">Bangladés
<OPTION VALUE="Barbados">Barbados
<OPTION VALUE="Baréin">Baréin
<OPTION VALUE="Bélgica">Bélgica
<OPTION VALUE="Belice">Belice
<OPTION VALUE="Benín">Benín
<OPTION VALUE="Bielorrusia">Bielorrusia
<OPTION VALUE="Birmania">Birmania
<OPTION VALUE="Bosnia y Herzegovina">Bosnia y Herzegovina
<OPTION VALUE="Botsuana">Botsuana
<OPTION VALUE="Brasil">Brasil
<OPTION VALUE="Brunéi">Brunéi
<OPTION VALUE="Bulgaria">Bulgaria
<OPTION VALUE="Burkina Faso">Burkina Faso
<OPTION VALUE="Burundi">Burundi
<OPTION VALUE="Bután">Bután
<OPTION VALUE="Cabo Verde">Cabo Verde
<OPTION VALUE="Camboya">Camboya
<OPTION VALUE="Camerún">Camerún
<OPTION VALUE="Canadá">Canadá
<OPTION VALUE="Catar">Catar
<OPTION VALUE="República Centroafricana">República Centroafricana
<OPTION VALUE="Chad">Chad
<OPTION VALUE="República Checa">República Checa
<OPTION VALUE="Chile">Chile
<OPTION VALUE="China">China
<OPTION VALUE="Chipre">Chipre
<OPTION VALUE="Colombia">Colombia
<OPTION VALUE="Comoras">Comoras
<OPTION VALUE="República del Congo">República del Congo
<OPTION VALUE="República Democrática del Congo">República Democrática del Congo
<OPTION VALUE="Corea del Norte">Corea del Norte
<OPTION VALUE="Corea del Sur">Corea del Sur
<OPTION VALUE="Costa de Marfil">Costa de Marfil
<OPTION VALUE="Costa Rica">Costa Rica
<OPTION VALUE="Croacia">Croacia
<OPTION VALUE="Cuba">Cuba
<OPTION VALUE="Dinamarca">Dinamarca
<OPTION VALUE="Dominica">Dominica
<OPTION VALUE="Ecuador">Ecuador
<OPTION VALUE="Egipto">Egipto
<OPTION VALUE="El Salvador">El Salvador
<OPTION VALUE="Emiratos Árabes Unidos">Emiratos Árabes Unidos
<OPTION VALUE="Eritrea">Eritrea
<OPTION VALUE="Eslovaquia">Eslovaquia
<OPTION VALUE="Eslovenia">Eslovenia
<OPTION VALUE="España">España
<OPTION VALUE="Estados Unidos">Estados Unidos
<OPTION VALUE="Estonia">Estonia
<OPTION VALUE="Etiopía">Etiopía
<OPTION VALUE="Filipinas">Filipinas
<OPTION VALUE="Finlandia">Finlandia
<OPTION VALUE="Fiyi">Fiyi
<OPTION VALUE="Francia">Francia
<OPTION VALUE="Gabón">Gabón
<OPTION VALUE="Gambia">Gambia
<OPTION VALUE="Georgia">Georgia
<OPTION VALUE="Ghana">Ghana
<OPTION VALUE="Granada">Granada
<OPTION VALUE="Grecia">Grecia
<OPTION VALUE="Guatemala">Guatemala
<OPTION VALUE="Guinea">Guinea
<OPTION VALUE="Guinea-Bisáu">Guinea-Bisáu
<OPTION VALUE="Guinea Ecuatorial">Guinea Ecuatorial
<OPTION VALUE="Guyana">Guyana
<OPTION VALUE="Haití">Haití
<OPTION VALUE="Honduras">Honduras
<OPTION VALUE="Hungría">Hungría
<OPTION VALUE="India">India
<OPTION VALUE="Indonesia">Indonesia
<OPTION VALUE="Irak">Irak
<OPTION VALUE="Irán">Irán
<OPTION VALUE="Irlanda">Irlanda
<OPTION VALUE="Islandia">Islandia
<OPTION VALUE="Israel">Israel
<OPTION VALUE="Italia">Italia
<OPTION VALUE="Jamaica">Jamaica
<OPTION VALUE="Japón">Japón
<OPTION VALUE="Jordania">Jordania
<OPTION VALUE="Kazajistán">Kazajistán
<OPTION VALUE="Kenia">Kenia
<OPTION VALUE="Kirguistán">Kirguistán
<OPTION VALUE="Kiribati">Kiribati
<OPTION VALUE="Kuwait">Kuwait
<OPTION VALUE="Laos">Laos
<OPTION VALUE="Lesoto">Lesoto
<OPTION VALUE="Letonia">Letonia
<OPTION VALUE="Líbano">Líbano
<OPTION VALUE="Liberia">Liberia
<OPTION VALUE="Libia">Libia
<OPTION VALUE="Liechtenstein">Liechtenstein
<OPTION VALUE="Lituania">Lituania
<OPTION VALUE="Luxemburgo">Luxemburgo
<OPTION VALUE="Macedonia del Norte">Macedonia del Norte
<OPTION VALUE="Madagascar">Madagascar
<OPTION VALUE="Malasia">Malasia
<OPTION VALUE="Malaui">Malaui
<OPTION VALUE="Maldivas">Maldivas
<OPTION VALUE="Mali">Mali
<OPTION VALUE="Malta">Malta
<OPTION VALUE="Marruecos">Marruecos
<OPTION VALUE="Islas Marshall">Islas Marshall
<OPTION VALUE="Mauricio">Mauricio
<OPTION VALUE="Mauritania">Mauritania
<OPTION VALUE="México">México
<OPTION VALUE="Micronesia">Micronesia
<OPTION VALUE="Moldavia">Moldavia
<OPTION VALUE="Mónaco">Mónaco
<OPTION VALUE="Mongolia">Mongolia
<OPTION VALUE="Montenegro">Montenegro
<OPTION VALUE="Mozambique">Mozambique
<OPTION VALUE="Namibia">Namibia
<OPTION VALUE="Nauru">Nauru
<OPTION VALUE="Nepal">Nepal
<OPTION VALUE="Nicaragua">Nicaragua
<OPTION VALUE="Níger">Níger
<OPTION VALUE="Nigeria">Nigeria
<OPTION VALUE="Noruega">Noruega
<OPTION VALUE="Nueva Zelanda">Nueva Zelanda
<OPTION VALUE="Omán">Omán
<OPTION VALUE="Países Bajos">Países Bajos
<OPTION VALUE="Pakistán">Pakistán
<OPTION VALUE="Palaos">Palaos
<OPTION VALUE="Palestina">Palestina
<OPTION VALUE="Panamá">Panamá
<OPTION VALUE="Papúa Nueva Guinea">Papúa Nueva Guinea
<OPTION VALUE="Paraguay">Paraguay
<OPTION VALUE="Perú">Perú
<OPTION VALUE="Polonia">Polonia
<OPTION VALUE="Portugal">Portugal
<OPTION VALUE="Reino Unido">Reino Unido
<OPTION VALUE="Ruanda">Ruanda
<OPTION VALUE="Rumania">Rumania
<OPTION VALUE="Rusia">Rusia
<OPTION VALUE="Islas Salomón">Islas Salomón
<OPTION VALUE="Samoa">Samoa
<OPTION VALUE="San Cristóbal y Nieves">San Cristóbal y Nieves
<OPTION VALUE="San Marino">San Marino
<OPTION VALUE="San Vicente y las Granadinas">San Vicente y las Granadinas
<OPTION VALUE="Santa Lucía">Santa Lucía
<OPTION VALUE="Santo Tomé y Príncipe">Santo Tomé y Príncipe
<OPTION VALUE="Senegal">Senegal
<OPTION VALUE="Serbia">Serbia
<OPTION VALUE="Seychelles">Seychelles
<OPTION VALUE="Sierra Leona">Sierra Leona
<OPTION VALUE="Singapur">Singapur
<OPTION VALUE="Siria">Siria
<OPTION VALUE="Somalia">Somalia
<OPTION VALUE="Sri Lanka">Sri Lanka
<OPTION VALUE="Suazilandia">Suazilandia
<OPTION VALUE="Sudáfrica">Sudáfrica
<OPTION VALUE="Sudán">Sudán
<OPTION VALUE="Sudán del Sur">Sudán del Sur
<OPTION VALUE="Suecia">Suecia
<OPTION VALUE="Suiza">Suiza
<OPTION VALUE="Surinam">Surinam
<OPTION VALUE="Tailandia">Tailandia
<OPTION VALUE="Tanzania">Tanzania
<OPTION VALUE="Tayikistán">Tayikistán
<OPTION VALUE="Timor Oriental">Timor Oriental
<OPTION VALUE="Togo">Togo
<OPTION VALUE="Tonga">Tonga
<OPTION VALUE="Trinidad y Tobago">Trinidad y Tobago
<OPTION VALUE="Túnez">Túnez
<OPTION VALUE="Turkmenistán">Turkmenistán
<OPTION VALUE="Turquía">Turquía
<OPTION VALUE="Tuvalu">Tuvalu
<OPTION VALUE="Ucrania">Ucrania
<OPTION VALUE="Uganda">Uganda
<OPTION VALUE="Uruguay">Uruguay
<OPTION VALUE="Uzbekistán">Uzbekistán
<OPTION VALUE="Vanuatu">Vanuatu
<OPTION VALUE="Ciudad del Vaticano">Ciudad del Vaticano
<OPTION VALUE="Venezuela">Venezuela
<OPTION VALUE="Vietnam">Vietnam
<OPTION VALUE="Yemen">Yemen
<OPTION VALUE="Yibuti">Yibuti
<OPTION VALUE="Zambia">Zambia
<OPTION VALUE="Zimbabue">Zimbabue


</SELECT>        

<br><br>Teléfono Residencial
        <br>
        <input class="controls" type="text" name="TelefonoR" id="TelefonoR" placeholder="Ingrese su Teléfono Residencial">
        <br><br>Teléfono Móvil
        <br>
        <input class="controls" type="text" name="TelefonoM" id="TelefonoM" placeholder="Ingrese su Teléfono Móvil">
        <br><br>Posee licencia de conducir?
        <br>
        <br>
        <INPUT TYPE="checkbox" NAME="Licencia" VALUE="Si">Si
        <br>
        <INPUT TYPE="checkbox" NAME="Licencia" VALUE="No">No

        <br><br>Posee vehiculo propio?
        <br>
        <br>
        <INPUT TYPE="checkbox" NAME="VehiculoP" VALUE="Si">Si
        <br>
        <INPUT TYPE="checkbox" NAME="VehiculoP" VALUE="No">No


        <br><br>Años de experiencias (Si lo tiene)
        <br>
        <input class="controls" type="text" name="AnosExp" id="Años de experiencias" placeholder="Ingrese sus años de experiencias">

        <br><br>Desea trabajar en el área técnica que estudió u otra área?
        <br>
        <br>
        <INPUT TYPE="checkbox" NAME="AreaTecEst" VALUE="Area Tecnica">Área técnica que estudié
        <br>
        <INPUT TYPE="checkbox" NAME="OtraAreaBtn" VALUE="Otra">Otra área

        <br><br>Si es otra área, especifique cual
        <br>
        <input class="controls" type="text" name="OtraAreaEspecificacion" id="OtraAreaEspecificacion" placeholder="Ingrese el área">

        <br><br>Adjunte su Currículum Vitae
        <br>
        <input class="controls" type="file" name="CVarchivo" id="CVarchivo" placeholder="Adjunta tu Currículum Vitae">

        <br><br>Correo
        <br>
        <input class="controls" type="email" name="Email" id="Email" placeholder="Ingrese su correo">
        <br><br>Confirmar Correo
        <br>
        <input class="controls" type="email" name="ConfEmail" id="ConfEmail" placeholder="Confirme su correo">
        <br><br>Contraseña
        <br>
        <input class="controls" type="password" name="Contrasena" id="Contrasena" placeholder="Ingrese su contraseña">
        <br><br>Confirmar Contraseña
        <br>
        <input class="controls" type="password" name="ConfContrasena" id="ConfContrasena" placeholder="Confirme su contraseña">
        <br><br>
        <a href="" class="main-header__link"><input class="botons" type="submit" value="ENVIAR"></a>
    </section>

</form>

</body>
</html>