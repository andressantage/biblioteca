<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $cedula = $_POST["cedula"];
    $llave = $_POST["llave"];

    // Conexión sda la base de datos
    include("conexion.php");
    $con=conectar();

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Error al conectar a la base de datos: " . mysqli_connect_error();
        exit();
    }

    // Consulta SQL para actualizar el producto
    $sql = "UPDATE usuarios SET UsuariosID = '$llave', Nombre = '$nombres', Apellido='$apellidos', Correo='$email', Cedula='$cedula' WHERE Cedula = $cedula";
    if ($con->query($sql) === TRUE) {
        header("Location: ../usuarios.php");
    } else {
        echo "Error al actualizar el producto: " . $con->error;
    }

    $con->close();
}
?>
