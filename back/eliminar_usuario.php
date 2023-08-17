<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener el ID enviado en la solicitud POST
    $id = $_POST["id"];

    // Conexión sda la base de datos
    include("conexion.php");
    $con=conectar();

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Error al conectar a la base de datos: " . mysqli_connect_error();
        exit();
    }

    $sql = "DELETE FROM usuarios WHERE Cedula = $id";

    if ($con->query($sql) === TRUE) {
        header("Location: ../usuarios.php");
        /* echo "Registro eliminado exitosamente"; */
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
    $con->close();
}
?>
