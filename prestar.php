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
                   <!--  <div class="d-flex justify-content-lg-start align-item-center mt-2">
                        <a href="" class="m">¿Has olvidado tú contraseña?</a>
                    </div> -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-success">Registrar</button>
              </form>
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
        <form class="input-group mb-3" method="get">
          <button class="btn btn-dark" id="buscar" type="button">Buscar por: </button>
          <select class="form-select" aria-label="Opcion" name="opcion" id="opcion">
            <option selected>Opcion</option>
            <option value="opcion1">Titulo</option>
            <option value="opcion2">Autor</option>
            <option value="opcion3">Codigo de barras</option>
            <option value="opcion4">Codigo de clasificacion</option>
        </select>
            <input style="width: 200px;" id="buscarImagen" type="search" class="form-control" placeholder="Buscar..." name="busqueda">
            <button class="btn btn-dark" id="buscar" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            </button>
</form>
        </div>
    </div>
</div>


<style>
  .tarjetas{
    margin: 10px;
  }
  .border-primary {
    border-color: #ffc107 !important;
  }
</style>

<!-- muestra tarjetas de libros -->
<div id="api" class="contenedor row d-flex justify-content-center align-items-center">


<?php
include("back/conexion.php");
$con=conectar();
if (mysqli_connect_errno()) {
  echo "Error al conectar a la base de datos: " . mysqli_connect_error();
  exit();
}



if(isset($_GET['busqueda'])){
  $busqueda= $_GET['busqueda'];

  $consultaBuscador = "SELECT * FROM libros WHERE titulo LIKE '%$busqueda%' ";
  $resultBuscador = mysqli_query($con, $consultaBuscador);
  
  $usuarios = $resultBuscador->fetch_all(MYSQLI_ASSOC);
}else{
 $consulta = "SELECT * FROM libros";
 $resultado = mysqli_query($con, $consulta);
 $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);
}

foreach ($usuarios as $usuario) {  ?>

<div class='card border-primary mb-3 tarjetas' style='max-width: 18rem;'>
 <div class='card-header'><?=$usuario['Autor']?></div>
 <div class='card-body'>
     <h5 class='card-title text-primary'><?=$usuario['Titulo']?></h5>
     <p> Disponibles: <h6 class='mb-0'><?=$usuario['N_Disponible']?></h6></p>
     <p> N° ejemplares: <?=$usuario['N_Ejemplares']?></p>
     <p> ID del libro: <?=$usuario['LibrosID']?> </p>
     <p> Clasificacion ID: <?= $usuario['ClasificacionID']?></p>
     <p>Codigo de clasificacion: <?= $usuario['CodigoClasificacion'] ?></p>
     <p>Biblioteca:<?=$usuario['BibliotecaID']?></p>
     <p>Sala: <?=$usuario['SalaID']?></p>
     <a href="#" class='btn btn-primary' data-toggle='modal' data-target='#exampleModal7'>Prestar</a>
 </div>
</div>
<?php }?>
</div>

<!-- modal registrar a usuario con prestamo -->
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog mt-0 mb-2 h-100 d-flex justify-content-center align-items-center" role="document">
    <div class="modal-content contenidoModal">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Prestar libro</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="card border-primary mb-3 tarjetas">
              <div class="card-header" id='m1'></div>
              <div class="card-header" id='m2'></div>
              <div class="card-body text-primary">
                <p class="card-text text-dark" id='m3'></p>
                <p class="card-text text-dark" id='m4'></p>
                <p class="card-text text-dark" id='m5'></p>
                <p class="card-text text-dark" id='m6'></p>
                <p class="card-text text-dark" id='m7'></p>
              </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="input-group mb-3">
                  <button class="btn btn-dark" id="buscar" type="button">Cedula:</button>
                    <input style="width: 200px;" id="buscarUsuarioCedula" type="number" class="form-control" placeholder="Buscar...">
                    <button class="btn btn-dark" id="buscarUsuarioPrestamo" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    </button>

                    <div class="collapse w-100" id="collapseExample">
                      <div class="card card-body p-1">
                        <table class="table mb-0">
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
                            <tr id='busquedaUsuario'>
                              <!-- <th scope="row">1095316</th>
                              <td>Ricardo</td>
                              <td>Jaramillo</td>
                              <td>456152</td>
                              <td class="text-center"><input type="radio"></td> -->
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="form-group mt-2 w-100 mb-0">
                      <textarea class="form-control" id="mensaje" rows="2" placeholder="Escribe observaciones aqui"></textarea>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer justify-content-between">
        <a href="prestamos.php"><button type="submit" class="btn btn-success">Enviar prestamo</button></a>
        <a href="prestar.php"><button type="button" class="btn btn-dark">Cerrar</button></a>
      </div>
    </div>
  </div>
</div>

<form id="hiddenForm" action="libros.php" method="post" style="display:none;">
  <input type="hidden" name="libro" id="hiddenDato">
  <input type="hidden" name="usuario" id="hiddenDato">
</form>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
<script>
  let b = document.querySelectorAll('.prestamoLibro');
    b.forEach((boton) => {
        boton.addEventListener('click', (event) => {
          //Obtén el modal por su ID
          var modal = document.getElementById("exampleModal7");
          // Crea una instancia del modal usando el constructor Modal de Bootstrap
          var modalInstance = new bootstrap.Modal(modal);
          // Activa el modal
          modalInstance.show();
fetch("http://localhost/bibli/libros.php")
  .then((response) => {
    if (!response.ok) {
      throw new Error("La solicitud no fue exitosa");
    }
    return response.json();
  })
  .then((data) => {
    // Recorrer los datos obtenidos
    for (let i = 0; i < data.length; i++) {
      // Supongo que tienes un botón con una propiedad 'id'
      if (data[i].LibrosID === boton.id) {
        document.getElementById('m1').textContent='Libro: '+data[i].Titulo
        document.getElementById('m2').textContent='Autor: '+data[i].Autor
        document.getElementById('m3').textContent='Sala: '+data[i].SalaID
        document.getElementById('m4').textContent='Codigo de clasificacion: '+data[i].CodigoClasificacion
        document.getElementById('m5').textContent='Codigo de barras: '+data[i].CodigoBarrasID
        document.getElementById('m6').textContent='Codigo autor: '+data[i].Codigo_Autor
        document.getElementById('m7').textContent='Observaciones: '+data[i].Observacion
      }
    }
  })
  .catch((error) => {
    console.error("Error al obtener los datos:", error);
  });
        });
    });  

let buscarUsuarioPrestamo=document.getElementById('buscarUsuarioPrestamo')
buscarUsuarioPrestamo.addEventListener('click', (event) => {
  fetch("http://localhost/bibli/lista_usuarios.php")
  .then((response) => {
    if (!response.ok) {
      throw new Error("La solicitud no fue exitosa");
    }
    return response.json();
  })
  .then((data) => {
    let buscarUsuarioCedula=document.getElementById('buscarUsuarioCedula')
    // Recorrer los datos obtenidos
    console.log(buscarUsuarioCedula.value)
    for (let i = 0; i < data.length; i++) {
      // Supongo que tienes un botón con una propiedad 'id'
      if (data[i].Cedula === buscarUsuarioCedula.value) {
        console.log(data[i])
        let busquedaUsuario=document.getElementById('busquedaUsuario')
        busquedaUsuario.innerHTML=`
        <th scope="row">${data[i].Cedula}</th>
        <td>${data[i].Nombre}</td>
        <td>${data[i].Apellido}</td>
        <td>${data[i].UsuariosID}</td>
        <td class="text-center"><input type="radio"></td>
        `
      }else{
        let busquedaUsuario=document.getElementById('busquedaUsuario')
        busquedaUsuario.innerHTML=`
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
        <td class="text-center"><input type="radio"></td>
        `
      }
    }
  })
  .catch((error) => {
    console.error("Error al obtener los datos:", error);
  });
});

</script>
</body>
</html>