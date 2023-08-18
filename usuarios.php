<?php
session_start();
if(!isset($_SESSION['correo'])){
    header('Location: ../index.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer=""></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js" defer=""></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" defer=""></script>
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2017/01/31/15/33/linux-2025130_1280.png" type="image/x-icon">
    
    <link rel="stylesheet" href="style/todos.css">
</head>
<body>

<?php
include('nav.php');
?>

<!-- modal para iniciar sesion -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog mt-0 mb-2 h-75 d-flex justify-content-center align-items-center" role="document">
    <div class="modal-content contenidoModal">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Inicia sesión</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="validar.php">
              <div class="form-group  text-white">
                <label for="email">Correo electrónico</label>
                <input required type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu correo electrónico">
              </div>
              <div class="form-group  text-white">
                <label for="password">Contraseña</label>
                <input required type="password" class="form-control" name="password" id="password" placeholder="Ingresa tu contraseña">
              </div>
              <button type="submit" class="btn btn-success">Iniciar sesión</button>
              <div class="d-flex justify-content-lg-start align-item-center mt-2">
                  <a href="" data-toggle="modal" data-target="#exampleModal7">¿Has olvidado tú contraseña?</a>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal5">Crear cuenta</button>
      </div>
    </div>
  </div>
</div>

<!-- modal para registrar usuario #6-->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog mt-0 mb-2 h-100 d-flex justify-content-center align-items-center" role="document">
    <div class="modal-content contenidoModal">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Registrar usuario</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="back/registrar_usuario.php">
              <div class="form-group  text-white">
                <label for="nombre">Nombres</label>
                <input required type="text" class="form-control" name="nombres" id="nombre" placeholder="Ingresa nombres">
              </div>
              <div class="form-group  text-white">
                <label for="apellido">Apellidos</label>
                <input required type="text" class="form-control" name="apellidos" id="apellido" placeholder="Ingresa apellidos">
              </div>
              <div class="form-group  text-white">
                <label for="email">Correo electrónico</label>
                <input required type="email" class="form-control" name="email" id="email" placeholder="Ingresa correo electrónico">
              </div>
              <div class="form-group  text-white">
                <label for="cedula">Cedula</label>
                <input required type="number" class="form-control" name="cedula" id="cedula" placeholder="Ingresa cedula">
              </div>
              <div class="form-group  text-white">
                <label for="llave">Llave del saber</label>
                <input required type="number" class="form-control" name="llave" id="llave" placeholder="Ingresa llave del saber">
              </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="submit" class="btn btn-success">Registrar</button>
        </form>
        <a href="usuarios.php"><button type="button" class="btn btn-dark">Cerrar</button></a>
      </div>
    </div>
  </div>
</div>

<!-- seccion buscador -->
<div class="container mt-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
        <div class="input-group mb-3">
            <input id="buscarImagen" type="text" class="form-control" placeholder="Buscar...">
            <button class="btn btn-dark" id="buscar" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            </button>
        </div>
        </div>
    </div>
</div>

<!-- muestra usuarios -->
<div id="api" class="contenedor row d-flex justify-content-center align-items-center">
  <div class="card card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Cedula</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Correo</th>
          <th scope="col">Llave saber</th>
          <th scope="col" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
<?php
  include("back/conexion.php");
  $con=conectar();
  if (mysqli_connect_errno()) {
    echo "Error al conectar a la base de datos: " . mysqli_connect_error();
    exit();
  }
  $consulta = "SELECT * FROM usuarios ORDER BY Fecha DESC";
  $resultado = mysqli_query($con, $consulta);
  $usuarios = array();
  while ($fila = mysqli_fetch_assoc($resultado)) {      
      $usuarios[] = $fila;
  }
  $html='';
  $num=0;
  foreach ($usuarios as $usuario) {
    /* $nombreCompleto = explode(' ', $usuario['nombres']);
    $primerNombre = $nombreCompleto[0]; */
    $html .="
    <tr>
      <th id='a".$usuario['Cedula']."' scope='row'>".$usuario['Cedula']."</th>
      <td id='b".$usuario['Cedula']."'>".$usuario['Nombre']."</td>
      <td id='c".$usuario['Cedula']."'>".$usuario['Apellido']."</td>
      <td id='d".$usuario['Cedula']."'>".$usuario['Correo']."</td>
      <td id='e".$usuario['Cedula']."'>".$usuario['UsuariosID']."</td>
      <td class='text-center'>
      <button id='".$usuario['Cedula']."' class='prestamoEditar btn btn-primary'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
          <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
          </svg>
      </button>
      <button id='".$usuario['Cedula']."' class='prestamoEliminar btn btn-dark'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-square' viewBox='0 0 16 16'>
          <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
          <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
          </svg>
      </button>
      </td>
    </tr>
    ";
  }
  echo $html;
?>
      </tbody>
    </table>
  </div>
</div>

<!-- modal para editar usuario #7-->
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog mt-0 mb-2 h-100 d-flex justify-content-center align-items-center" role="document">
    <div class="modal-content contenidoModal">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Editar usuario</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="back/editar_usuario.php">
          <div class="form-group  text-white">
            <label for="nombre">Nombres</label>
            <input required type="text" class="form-control" name="nombres" id="nombre7" placeholder="Ingresa nombres">
          </div>
          <div class="form-group  text-white">
            <label for="apellido">Apellidos</label>
            <input required type="text" class="form-control" name="apellidos" id="apellido7" placeholder="Ingresa apellidos">
          </div>
          <div class="form-group  text-white">
            <label for="email">Correo electrónico</label>
            <input required type="email" class="form-control" name="email" id="email7" placeholder="Ingresa correo electrónico">
          </div>
          <div class="form-group  text-white">
            <label for="cedula">Cedula</label>
            <input required type="number" class="form-control" name="cedula" id="cedula7" placeholder="Ingresa cedula">
          </div>
          <div class="form-group  text-white">
            <label for="llave">Llave del saber</label>
            <input required type="number" class="form-control" name="llave" id="llave7" placeholder="Ingresa llave del saber">
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="submit" class="btn btn-success">Editar</button>
        </form>
        <a href="usuarios.php"><button type="button" class="btn btn-dark">Cerrar</button></a>
      </div>
    </div>
  </div>
</div>

<!-- modal para registrar usuario #8-->
<div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog mt-0 mb-2 h-100 d-flex justify-content-center align-items-center" role="document">
    <div class="modal-content contenidoModal">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Registrar usuario</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group text-white">
          <button type="submit" class="btn btn-success">Editar Perfil</button>
          <label for="nombre">Nombres</label>
          <input required type="text" class="form-control" name="nombres" id="nombre" placeholder="Ingresa nombres">
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="submit" class="btn btn-success">Registrar</button>
        </form>
        <a href="usuarios.php"><button type="button" class="btn btn-dark">Cerrar</button></a>
      </div>
    </div>
  </div>
</div>

<form id="hiddenForm" action="back/eliminar_usuario.php" method="post" style="display:none;">
  <input type="hidden" name="id" id="hiddenDato">
</form>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
<script>
  let b = document.querySelectorAll('.prestamoEditar');
    b.forEach((boton) => {
      boton.addEventListener('click', (event) => {
        console.log(boton.id)
        let nombre = document.querySelector('#nombre7');
        let apellido = document.querySelector('#apellido7');
        let email = document.querySelector('#email7');
        let cedula = document.querySelector('#cedula7');
        let llave = document.querySelector('#llave7');
        // Obtén el modal por su ID
        var modal = document.getElementById("exampleModal7");
        // Crea una instancia del modal usando el constructor Modal de Bootstrap
        var modalInstance = new bootstrap.Modal(modal);
        // Activa el modal
        modalInstance.show();

        nombre.value = document.getElementById('b' + boton.id).textContent;
        console.log('b' + boton.id)
        apellido.value= document.getElementById('c' + boton.id).textContent;
        email.value= document.getElementById('d' + boton.id).textContent;
        llave.value= document.getElementById('e' + boton.id).textContent;
        cedula.value= boton.id
      });
    });  

  //Eliminar
    let b1 = document.querySelectorAll('.prestamoEliminar');
  b1.forEach((boton1) => {
      boton1.addEventListener('click', (event) => {
      console.log(boton1.id)
      document.getElementById("hiddenDato").value = boton1.id;
      document.getElementById("hiddenForm").submit();
      });
  }); 
</script>
</body>
</html>