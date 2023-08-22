<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Conexión sda la base de datos
    include("conexion.php");
    $con=conectar();

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Error al conectar a la base de datos: " . mysqli_connect_error();
        exit();
    }

    // Consulta SQL para actualizar el producto
    $sql = "UPDATE administrador SET nombre = '$nombre', apellido = '$apellido', email='$email', password='$password' WHERE id = 1";
    if ($con->query($sql) === TRUE) {
        $_SESSION['nombre']=$nombre;
        header("Location: ../usuarios.php");
    } else {
        echo "Error al actualizar el producto: " . $conn->error;
    }

    $con->close();
}
?>
