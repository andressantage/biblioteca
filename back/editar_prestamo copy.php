<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["idd"];
    $libro = $_POST["libro"];
    $prestador = $_POST["prestador"];
    $fecha_prestamo = $_POST["fecha_prestamo"];
    $fecha_vencimiento = $_POST["fecha_vencimiento"];

    // Conexión sda la base de datos
    include("conexion.php");
    $con=conectar();

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Error al conectar a la base de datos: " . mysqli_connect_error();
        exit();
    }

    // Consulta SQL para actualizar el producto
    $sql = "UPDATE prestamos SET LibrosID = '$libro', UsuariosID = '$prestador', Fecha_Prestamo='$fecha_prestamo', Fecha_Limite='$fecha_vencimiento' WHERE LibrosID = $id";

    echo "UPDATE prestamos SET LibrosID = '$libro', UsuariosID = '$prestador', Fecha_Prestamo='$fecha_prestamo', Fecha_Limite='$fecha_vencimiento' WHERE LibrosID = $id";
    if ($con->query($sql) === TRUE) {
        header("Location: ../prestamos.php");
    } else {
        echo "Error al actualizar el producto: " . $conn->error;
    }

    $con->close();
}
?>
