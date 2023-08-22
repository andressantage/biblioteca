<?php
session_start();
if(!isset($_SESSION['correo'])){
    header('Location: index.html');
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
        <a href="prestamos.php"><button type="button" class="btn btn-dark">Cerrar</button></a>
      </div>
    </div>
  </div>
</div>

<!-- modal para editar prestamo #7-->
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
          <form method="POST" action="back/editar_prestamo.php">
              <input type="hidden" name="idd" id="idd">
              <div class="form-group  text-white">
                <label for="nombre">Libro</label>
                <input required type="text" class="form-control" name="libro" id="libro">
              </div>
              <div class="form-group  text-white">
                <label for="apellido">Prestador</label>
                <input required type="text" class="form-control" name="prestador" id="prestador">
              </div>
              <div class="form-group  text-white">
                <label for="email">Fecha de prestamo</label>
                <input required type="text" class="form-control" name="fecha_prestamo" id="fecha_prestamo">
              </div>
              <div class="form-group  text-white">
                <label for="cedula">Fecha de vencimiento</label>
                <input required type="text" class="form-control" name="fecha_vencimiento" id="fecha_vencimiento">
              </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="submit" class="btn btn-success">Editar</button>
        </form>
        <a href="prestamos.php"><button type="button" class="btn btn-dark">Cerrar</button></a>
      </div>
    </div>
  </div>
</div>

<!-- seccion buscador -->
<div class="container mt-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
        <form class="input-group mb-3" method="get">
          <button class="btn btn-dark" id="buscar" type="button">Buscar por: </button>
          <select class="form-select" aria-label="Opcion" name="opcion" id="opcion">
            <option selected>Opcion</option>
            <option value="opcion1">Libro</option>
            <option value="opcion2">Nombre usuario</option>
            <option value="opcion3">Llave del saber</option>
        </select>
            <input style="width: 200px;" id="buscarImagen" type="search" class="form-control" placeholder="Buscar..." name="busqueda">
            <button class="btn btn-dark" id="buscar" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            </button>
</form>
        </div>
    </div>
</div>

<!-- muestra prestamos -->
<div id="api" class="contenedor row d-flex justify-content-center align-items-center">
  <div class="card card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Libro</th>
          <th scope="col">Prestador</th>
          <th scope="col">Fecha de prestamo</th>
          <th scope="col">Fecha de vencimiento</th>
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

  if(isset($_GET['busqueda'])){
    $busqueda= $_GET['busqueda'];
    if($_GET['opcion']=='opcion1'){
      $consultaBuscador = "SELECT * FROM prestamos WHERE LibrosID LIKE '%$busqueda%' ";
    }elseif($_GET['opcion']=='opcion2'){
      $consultaBuscador = "SELECT * FROM prestamos WHERE UsuariosID LIKE '%$busqueda%' ";
    }elseif($_GET['opcion']=='opcion3'){
      $consultaBuscador = "SELECT * FROM prestamos WHERE UsuariosID LIKE '%$busqueda%' ";
    }else{
      $consultaBuscador = "SELECT * FROM prestamos ORDER BY Fecha DESC";
    }
    $resultBuscador = mysqli_query($con, $consultaBuscador);
    $usuarios = $resultBuscador->fetch_all(MYSQLI_ASSOC);
  }else{
    $consulta = "SELECT * FROM prestamos";
    $resultado = mysqli_query($con, $consulta);
    $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);
  }
  
  foreach ($usuarios as $usuario) {  ?>
    <tr>
    <td id='a<?=$usuario['LibrosID']?>'><?=$usuario['LibrosID']?></td>
    <td id='b<?=$usuario['LibrosID']?>'><?=$usuario['UsuariosID']?></td>
    <td id='c<?=$usuario['LibrosID']?>'><?=$usuario['Fecha_Prestamo']?></td>
    <td id='d<?=$usuario['LibrosID']?>'><?=$usuario['Fecha_Limite']?></td>
    <td>
      <button id='<?=$usuario['LibrosID']?>' class='prestamoEditar btn btn-primary'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
        </svg>
      </button>
      <button id='<?=$usuario['LibrosID']?>' class='prestamoEliminar btn btn-dark'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-square' viewBox='0 0 16 16'>
            <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
            <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
        </svg>
      </button>
    </td>
  </tr>
  <?php }?>
      </tbody>
    </table>
  </div>
</div>

<form id="hiddenForm" action="eliminar_prestamo.php" method="post" style="display:none;">
  <input type="hidden" name="id" id="hiddenDato">
</form>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
<script>
  let b = document.querySelectorAll('.prestamoEditar');
    b.forEach((boton) => {
        boton.addEventListener('click', (event) => {
          console.log(boton.id)
          let libro = document.querySelector('#libro');
          let prestador = document.querySelector('#prestador');
          let fecha_prestamo = document.querySelector('#fecha_prestamo');
          let fecha_vencimiento = document.querySelector('#fecha_vencimiento');
          // Obtén el modal por su ID
          var modal = document.getElementById("exampleModal7");
          // Crea una instancia del modal usando el constructor Modal de Bootstrap
          var modalInstance = new bootstrap.Modal(modal);
          // Activa el modal
          modalInstance.show();
          libro.value = document.getElementById('a' + boton.id).textContent;
          prestador.value= document.getElementById('b' + boton.id).textContent;
          fecha_prestamo.value= document.getElementById('c' + boton.id).textContent;
          fecha_vencimiento.value= document.getElementById('d' + boton.id).textContent;
          idd.value= boton.id;
        });
    });  

  //Eliminar
    let b1 = document.querySelectorAll('.prestamoEliminar');
  b1.forEach((boton1) => {
      boton1.addEventListener('click', (event) => {
      console.log(boton1.id)
      /* const botonClicado1 = event.target;
      const posicion1 = Array.from(b1).indexOf(botonClicado1);
      console.log(botonClicado1)  */
      document.getElementById("hiddenDato").value = boton1.id;
      document.getElementById("hiddenForm").submit();
      });
  }); 
</script>
<div id="ultimo"></div>
</body>
</html>