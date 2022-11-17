<html>
<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script> &gt;

</head>

<h3>VACANTES</h3>

    <table border="2">
     <tr>
         <th>ID</th>
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
     include_once 'conexionvacantes.php';

     $nombre = $_GET['Nombre'];
     $query = "SELECT * FROM vacantes WHERE NombreE like '%$nombre%' or IdVacante='$nombre' ";
     $data = mysqli_query($mysqli, $query);
     $total = mysqli_num_rows($data);

     if($total!=0){
         while($row=mysqli_fetch_assoc($data)){
             
             echo "<tr> <td>" . $row['IdVacante'] . "</td> <td>" . $row['NombreE'] . "</td> <td>" . $row['Puesto'] . "</td> <td>" . $row['PerfilP'] . "</td> <td>" . $row['Sueldo'] ."</td> <td>" . $row['Ubicacion'] . "</td> <td>" . $row['TipoContrato'] . "</td> <td>" . $row['Horario'] . "</td> <td>" . $row['CorreoC'] . "</td> <td>" . $row['PersonaContacto'] . "</td> <td>" . $row['Telefono'] . "</td> </tr>";;
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
                window.location.href = '/Prueba1/Pasantia/formulario/FormularioVacantes.php';
            })  
        </script>
 


     <?php
   
     }
     ?>