<?php
// Conexión a la base de datos
include("conexion.php");
$con=conectar();

// Verificar la conexión
if (mysqli_connect_errno()) {
  echo "Error al conectar a la base de datos: " . mysqli_connect_error();
  exit();
}

// Creacion de la clase persona que guarda los datos de esta
class Registro{
    public $email;
    public $password;
    public function __construct($email, $password){
        $this->email=$email;
        $this->password=$password;
    }
}

// Obtencion de valores del formulario
$registro=new Registro($_POST['email'], $_POST['password']);

// Escapar el valor del correo para evitar inyección de SQL
$correo = mysqli_real_escape_string($con, $registro->email); 

// Verificar si el usuario ya existe en la base de datos
$consulta = "SELECT * FROM administrador WHERE email='$correo' AND password='$registro->password'";

//FORMAS DE HACKEAR CON INJECTION DE SQL
//$consulta = "SELECT * FROM usuarios WHERE correo='' AND contra='' -- ";
//$consulta = "SELECT * FROM usuarios WHERE correo='$email' AND contra='' OR correo='root@gmail.com' -- AND contra=''";

$result = $con->query($consulta);
if ($result->num_rows === 1) {
    // Las credenciales son válidas, obtener el nombre de usuario
    $row = $result->fetch_assoc();

    // Establecer variables de sesión
    session_start();
    $_SESSION['idUsuario'] = $row['id'];
    $_SESSION['correo'] = $row['email'];
    $_SESSION['nombre'] = $row['nombre'];

    // Redirigir al usuario a la página de bienvenida
    header("Location: ../principal.php"); 
    exit();
} else {
    header("Location: ../index.html?error=1");
}

// Cerrar la conexión a la base de datos
$con->close();
?>