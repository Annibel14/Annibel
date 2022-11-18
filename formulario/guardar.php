 <?php
    include_once("conexionestudiantes.php");
    function insertar ($conexion){
    $AnoG=$_POST['AnoG'] ?? null;
    $CentroE=$_POST['CentroE'] ?? null;
    $Curso=$_POST['Curso'] ?? null;
    $Matricula=$_POST['Matricula']  ?? null;
    $Cedula=$_POST['Cedula']  ?? null;
    $CarreraT=$_POST['CarreraT'] ?? null;
    $TecnicoB=$_POST['TecnicoB'] ?? null;
    $Nombres=$_POST['Nombres'] ?? null;
    $Apellidos=$_POST['Apellidos'] ?? null;
    $FechaNac=$_POST['FechaNac'] ?? null;
    $Sexo=$_POST['Sexo'] ?? null;
    $Direccion=$_POST['Direccion'] ?? null;
    $Sector=$_POST['Sector'] ?? null;
    $Seccion=$_POST['Seccion'] ?? null;
    $Municipio=$_POST['Municipio'] ?? null;
    $Provincia=$_POST['Provincia'] ?? null;
    $PaisNac=$_POST['PaisNac'] ?? null;
    $TelefonoR=$_POST['TelefonoR'] ?? null;
    $TelefonoM=$_POST['TelefonoM'] ?? null;
    $Licencia=$_POST['Licencia'] ?? null;
    $VehiculoP=$_POST['VehiculoP'] ?? null;
    $AnosExp=$_POST['AnosExp'] ?? null;
    $AreaTecEst=$_POST['AreaTecEst'] ?? null;
    $OtraAreaBtn=$_POST['OtraAreaBtn'] ?? null;
    $OtraAreaEspecificacion=$_POST['OtraAreaEspecificacion'] ?? null;
    $CVarchivo=$_POST['CVarchivo'] ?? null;
    $Email=$_POST['Email'] ?? null;
    $ConfEmail=$_POST['ConfEmail'] ?? null;
    $Contrasena=$_POST['Contrasena'] ?? null;
    $ConfContrasena=$_POST['ConfContrasena'] ?? null;
   

    $query="insert into estudiante values('0','$AnoG', '$CentroE', '$Curso', '$Matricula', '$Cedula', '$CarreraT', '$TecnicoB', '$Nombres', '$Apellidos', '$FechaNac', '$Sexo', '$Direccion', '$Sector', '$Seccion', '$Municipio', '$Provincia', '$PaisNac', '$TelefonoR', '$TelefonoM', '$Licencia', '$VehiculoP', '$AnosExp', '$AreaTecEst', '$OtraAreaBtn', '$OtraAreaEspecificacion', '$CVarchivo', '$Email', '$ConfEmail', '$Contrasena', '$ConfContrasena')";
    echo $query;
    $resultado=mysqli_query($conexion,$query);
    }
insertar($conexion);
mysqli_close($conexion);
    ?>
