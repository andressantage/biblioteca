<?php
// Conexión sda la base de datos
include("conexion.php");
$con=conectar();

// Verificar la conexión
if (mysqli_connect_errno()) {
  echo "Error al conectar a la base de datos: " . mysqli_connect_error();
  exit();
}

// Creacion de la clase persona que guarda los datos de esta
class Persona{
    public $nombres; //se puso el nombre como atributo privado
    public $apellidos; //se puso la edad como atributo protegido
    public $correo;
    public $cedula;
    public $llave;

    public function __construct($nombres, $apellidos, $correo, $cedula, $llave){
        $this->nombres=$nombres;
        $this->apellidos=$apellidos;
        $this->correo=$correo;
        $this->cedula=$cedula; //de pronto la ñ genere problemas revisare, ya revise y dice que no
        $this->llave=$llave;
    }
}

// Obtencion de valores del formulario
$persona=new Persona($_POST['nombres'], $_POST['apellidos'], $_POST['email'], $_POST['cedula'], $_POST['llave']);

// Escapar el valor del correo para evitar inyección de SQL
$correo = mysqli_real_escape_string($con, $persona->correo); 

// Verificar si el usuario ya existe en la base de datos
$existQuery = "SELECT Correo FROM usuarios WHERE Correo = '$correo'";
$result = mysqli_query($con, $existQuery);

if (mysqli_num_rows($result) > 0) {
  // El usuario ya existe, mostrar mensaje de error
  echo "El usuario ya existe"; //Revisar como se hara esta parte
} else {
  // Insertar el nuevo usuario en la base de datos
  $UsuariosID = hash('sha256', $persona->llave);
  $Cedula = hash('sha256', $persona->cedula);
  $query = "INSERT INTO usuarios (UsuariosID, Nombre, Apellido, Correo, Cedula) VALUES ('$UsuariosID', '$persona->nombres', '$persona->apellidos', '$correo', '$Cedula')";

  if (mysqli_query($con, $query)) {
    header("location: ../principal.php");
  } else {
    echo "Error con el registro: " . mysqli_error($con);
  }
}

// Cerrar la conexión
mysqli_close($con);
?>
