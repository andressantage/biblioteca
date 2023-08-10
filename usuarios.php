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
  include("nav.php");
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
                      <input type="text" class="form-control" name="nombres" id="nombre" placeholder="Ingresa nombres">
                    </div>
                    <div class="form-group  text-white">
                      <label for="apellido">Apellidos</label>
                      <input type="text" class="form-control" name="apellidos" id="apellido" placeholder="Ingresa apellidos">
                    </div>
                    <div class="form-group  text-white">
                      <label for="email">Correo electrónico</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa correo electrónico">
                    </div>
                    <div class="form-group  text-white">
                      <label for="cedula">Cedula</label>
                      <input type="number" class="form-control" name="cedula" id="cedula" placeholder="Ingresa cedula">
                    </div>
                    <div class="form-group  text-white">
                      <label for="llave">Llave del saber</label>
                      <input type="number" class="form-control" name="llave" id="llave" placeholder="Ingresa llave del saber">
                    </div>
                    <button type="submit" class="btn btn-success">Registrar</button>
                   <!--  <div class="d-flex justify-content-lg-start align-item-center mt-2">
                        <a href="" class="m">¿Has olvidado tú contraseña?</a>
                    </div> -->
                </form>
            </div>
            <div class="modal-footer">
            <a href="principal.html"><button type="button" class="btn btn-dark">Cerrar</button></a>
              <!-- <button type="button" class="btn btn-success">Crear cuenta</button> -->
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

<!-- muestra imagenes -->
<div id="api" class="contenedor row d-flex justify-content-center align-items-center">
  <div class="collapse w-100" id="collapseExample">
    <div class="card card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Cedula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Llave saber</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1095316</th>
            <td>Ricardo</td>
            <td>Jaramillo</td>
            <td>456152</td>
            <td class="text-center">
              <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg>
              </button>
              <button class="btn btn-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </button>
            </td>
          </tr>
          <tr>
            <th scope="row">1095316</th>
            <td>Ricardo</td>
            <td>Jaramillo</td>
            <td>456152</td>
            <td class="text-center">
              <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg>
              </button>
              <button class="btn btn-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </button>
            </td>
          </tr>
          <tr>
            <th scope="row">1095316</th>
            <td>Ricardo</td>
            <td>Jaramillo</td>
            <td>456152</td>
            <td class="text-center">
              <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg>
              </button>
              <button class="btn btn-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </button>
            </td>
          </tr>
          <tr>
            <th scope="row">1095316</th>
            <td>Ricardo</td>
            <td>Jaramillo</td>
            <td>456152</td>
            <td class="text-center">
              <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg>
              </button>
              <button class="btn btn-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </button>
            </td>
          </tr>
          <tr>
            <th scope="row">1095316</th>
            <td>Ricardo</td>
            <td>Jaramillo</td>
            <td>456152</td>
            <td class="text-center">
              <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg>
              </button>
              <button class="btn btn-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="card card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Cedula</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Correo</th>
          <th scope="col">Llave saber</th>
          <th scope="col">Accion</th>
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
$consulta = "SELECT * FROM usuarios";
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
    <th scope='row'>".$usuario['Cedula']."</th>
    <td>".$usuario['Nombre']."</td>
    <td>".$usuario['Apellido']."</td>
    <td>".$usuario['Correo']."</td>
    <td>".$usuario['UsuariosID']."</td>
    <td class='text-center'>
    <button class='btn btn-primary'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
        </svg>
    </button>
    <button class='btn btn-dark'>
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



<!-- modal que muestra imagen individual al darle click -->
<div id="modal1" class="modal1 ">
  <div class="h-100 d-flex justify-content-center align-items-center">
    <div class="modal1-content ">
      <span id="cerrar" class="close">&times;</span>
      <h2 id="tituloModal"><!-- Modal --></h2>
      <div class="h-100 d-flex justify-content-center align-items-center">
        <img src="" id="imgModal" class="imgModal" alt="">
      </div>
  
      <p id="autor" class="font-weight-bold"><!-- Autor --></p>
      <p id="contenido"><!-- Contenido del modal... --></p>
      <button class="btn btn-secondary mt-2" id="descargar">Descargar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
      <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/></svg>
      </button>
    </div>
  </div>
</div>


<script>
//muestra imagenes
let api=document.getElementById("api")
var fragmento = document.createDocumentFragment();
let buscar=document.getElementById("buscar")
let descargar=document.getElementById("descargar")
var div = document.createElement('div');
div.innerHTML = '<?php echo $html; ?>';
while (div.children.length > 0) {
    fragmento.appendChild(div.children[0]);
}
api.appendChild(fragmento);

///////api del buscador
function f(){
fetch("https://6460edfe185dd9877e33740e.mockapi.io/apinux")
  .then((response) => response.json())
  .then((data) => {
    let buscarImagen=document.getElementById("buscarImagen").value
    /* console.log(data) */
    let a=0;
    for(let i=0;i<data.length;i++){
      if(data[i].titulo==buscarImagen.toLowerCase().trim()){
        let hijo=document.createElement("img");
        hijo.src=data[i].link
        hijo.classList.add("m-1","p-0", "imagenes")
        api.prepend(hijo)
        a=1
      }
    }
    if(a===0){
      alert("No se encuentra la palabra")   
    }    
    //Al parecer esto es necesario para evitar el error
    let b = document.querySelectorAll('.imagenes');
    b.forEach((boton) => {
        boton.addEventListener('click', (event) => {
        const botonClicado = event.target;
        const posicion = Array.from(b).indexOf(botonClicado);
        openModal()
        imgModal.src=botonClicado.src
        h()
        console.log(botonClicado) 
        });
    });  
    ///
  })
  .catch((error) => {
    console.error("Error al obtener los datos:", error);
});
}
buscar.addEventListener("click",f)
let buscarImagen=document.getElementById("buscarImagen")
buscarImagen.addEventListener('keydown', function(event){
  if (event.key === 'Enter') {
    event.preventDefault(); 
    f();
  }
})

//para el modal que muestra tarjeta de imagen
//descarga imagen
descargar.addEventListener("click",downloadImage)
function downloadImage() {
  var imageUrl = imgModal.src; 
  var link = document.createElement('a');
  link.href = imageUrl;
  link.download = 'ApiNux_'+tituloModal.innerHTML+'.jpg';
  link.dispatchEvent(new MouseEvent('click'));
}
//creacion activacion del modal
const modal1 = document.getElementById("modal1");
const closeBtn = document.getElementById("cerrar");
let imgModal = document.getElementById("imgModal");

closeBtn.addEventListener("click", function() {
  modal1.style.display = "none";
});

window.addEventListener("click", function(event) {
  if (event.target === modal1) {
    modal1.style.display = "none";
  }
});
//da la informacion a las tarjetas
function h(){
fetch("https://6460edfe185dd9877e33740e.mockapi.io/apinux")
  .then((response) => response.json())
  .then((data) => {
    console.log(data)
    let tituloModal=document.getElementById("tituloModal")
    let autor=document.getElementById("autor")
    let contenido=document.getElementById("contenido")
    var nuevaUrl = imgModal.src.replace(/^http:\/\/localhost\/imagen\//, '');
    console.log(nuevaUrl);
    let a10=0;
    for(let i=0;i<data.length;i++){
      if(data[i].link==nuevaUrl){
        tituloModal.innerHTML=data[i].titulo.charAt(0).toUpperCase() + data[i].titulo.slice(1)
        contenido.innerHTML=data[i].descripcion
        autor.innerHTML=data[i].autor
        a10=1;
      }
    }
    /* if(a10===0){ tituloModal.textContent="Titulo";} */
     if(a10===0){
      tituloModal.textContent="Titulo";
      contenido.textContent="Descripcion";
      autor.textContent="Autor";
    }  
  })
  .catch((error) => {
    console.error("Error al obtener los datos:", error);
});
}
function openModal() {
  modal1.style.display = "block";
}
let b = document.querySelectorAll('.imagenes'); //del cajon donde van las imagenes
b.forEach((boton) => {
    boton.addEventListener('click', (event) => {
    const botonClicado = event.target;
    const posicion = Array.from(b).indexOf(botonClicado);
    openModal()
    imgModal.src=botonClicado.src
    h()
    console.log(botonClicado) 
    });
}); 

</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
</body>
</html>