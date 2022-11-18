<html>
<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>

</head>

<h3>ESTUDIANTE</h3>

    <table border="2">
     <tr>
         <th>ID</th>
         <th>Año de graduacion</th>
         <th>Institución educativa a la que pertenece</th>
         <th>Curso</th>
         <th>Matrícula</th>
         <th>Cédula de Identidad</th>
         <th>Carrera Técnica</th>
         <th>Técnico básico</th>
         <th>Nombres</th>
         <th>Apellidos</th>
         <th>Fecha de nacimiento</th>
         <th>Sexo</th>
         <th>Dirección</th>
         <th>Sector</th>
         <th>Sección</th>
         <th>Municipio</th>
         <th>Provincia</th>
         <th>País de Nacionalidad</th>
         <th>Teléfono Residencial</th>
         <th>Teléfono Móvil</th>
         <th>Posee licencia de conducir?</th>
         <th>Posee vehículo propio?</th>
         <th>Años de experiencia</th>
         <th>Area Ténica estudiada</th>
         <th>Otra área</th>
         <th>Especificación de la otra área</th>
         <th>Currículum Vitae</th>
         <th>Email</th>
         <th>Confirmar Email</th>
         <th>Contraseña</th>
         <th>Confirmar contraseña</th>
        </tr>
   
     <?php
     include_once 'conexionestudiantes.php';

     $Nombres = $_POST['Nombres'];

     $query = "SELECT * FROM estudiante WHERE Nombres LIKE '%$Nombres%' or IdEstudiante='$Nombres'";
     $data = mysqli_query($conexion, $query);
     $total = mysqli_num_rows($data);

     if($total >0){
         while($row=mysqli_fetch_assoc($data)){
             
             echo "<tr> <td>" . $row['IdEstudiante'] . "</td> <td>" . $row['AnoG'] . "</td> <td>" . $row['CentroE'] . "</td> <td>" . $row['Curso'] . "</td> <td>" . $row['Matricula'] ."</td> <td>" . $row['Cedula'] . "</td> <td>" . $row['CarreraT'] . "</td> <td>" . $row['TecnicoB'] . "</td> <td>" . $row['Nombres'] . "</td> <td>" . $row['Apellidos'] . "</td> <td>" . $row['FechaNac'] . $row['Sexo'] . "</td> <td>" . $row['Direccion'] . "</td> <td>" . $row['Sector'] . "</td> <td>" . $row['Seccion'] . "</td> <td>" . $row['Municipio'] ."</td> <td>" . $row['Provincia'] . "</td> <td>" . $row['PaisNac'] . "</td> <td>" . $row['TelefonoR'] . "</td> <td>" . $row['TelefonoM'] . "</td> <td>" . $row['Licencia'] . "</td> <td>" . $row['VehiculoP'] . "</td> <td>" . $row['AnosExp'] . "</td> <td>" . $row['AreaTecEst'] . "</td> <td>" . $row['OtraAreaBtn'] . "</td> <td>" . $row['OtraAreaEspecificacion'] . "</td> <td>" . $row['CVarchivo'] ."</td> <td>" . $row['Email'] . "</td> <td>" . $row['ConfEmail'] . "</td> <td>" . $row['Contrasena'] . "</td> <td>" . $row['ConfContrasena'] . "</td> </tr>";;
         }
     }
     else{
        ?>
        <script>
              Swal.fire({
                icon: 'warning',
                title: 'Nombre o id Invalido',
                text: 'Registro no encontrado, revise el nombre o id'
            }).then(function () {
                window.location.href = 'estudiantes.php';
            })  
        </script>
 


     <?php
   
     }
     ?>