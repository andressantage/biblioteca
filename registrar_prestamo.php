<?php
session_start();
if(!isset($_SESSION['correo'])){
    header('Location: index.html');
    exit;
}

// Conexión sda la base de datos
include("back/conexion.php");
$con=conectar();

// Verificar la conexión
if (mysqli_connect_errno()) {
  echo "Error al conectar a la base de datos: " . mysqli_connect_error();
  exit();
}
    $radio = $_POST["confirmar"];
    $cedula = $_POST["cedulaUsuario"];
    $observaciones = $_POST["observaciones"];
    $libroID = $_POST["libroID"];

    if($radio=='1'){
        $query = "INSERT INTO prestamos (LibrosID, UsuariosID, Fecha_Prestamo, Fecha_Limite, Obervacion) VALUES ('$libroID', '$cedula', NOW(), NOW(), '$observaciones')";
        if (mysqli_query($con, $query)) {
            header("location: prestamos.php");
        } else {
            echo "Error con el registro: " . mysqli_error($con);
        }
    }else{
        header("location: prestar.php");
    }

// Cerrar la conexión
mysqli_close($con);
?>