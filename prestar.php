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
                <form method="POST" action="crearUsuario.php">
                    <div class="form-group  text-white">
                      <label for="nombre">Nombres</label>
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa nombres">
                    </div>
                    <div class="form-group  text-white">
                      <label for="apellido">Apellidos</label>
                      <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa apellidos">
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
          <button class="btn btn-dark" id="buscar" type="button">Buscar por: </button>
          <select class="form-select" aria-label="Opcion" name="opcion" id="opcion">
            <option selected>Opcion</option>
            <option value="opcion1">Titulo</option>
            <option value="opcion2">Autor</option>
            <option value="opcion3">Codigo de barras</option>
            <option value="opcion4">Codigo de clasificacion</option>
        </select>
            <input style="width: 200px;" id="buscarImagen" type="text" class="form-control" placeholder="Buscar...">
            <button class="btn btn-dark" id="buscar" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            </button>
        </div>
        </div>
    </div>
</div>


<style>
  .tarjetas{
    margin: 10px;
  }
</style>

<!-- muestra tarjetas de libros -->
<div id="api" class="contenedor row d-flex justify-content-center align-items-center">

  <div class="card border-primary mb-3 tarjetas" style="max-width: 18rem;">
    <div class="card-header">Cien años de soledad</div>
    <div class="card-body text-primary pb-2">
      <h5 class="card-title">Gabriel García Márquez</h5>
      <p class="card-text">Considerada una de las obras más importantes del realismo mágico, "One Hundred Years of Solitude" narra la historia de la familia Buendía a lo largo de varias generaciones en el ficticio pueblo de Macondo. La novela explora temas como el amor, la soledad, la realidad y la fantasía, y ha dejado una huella duradera en la literatura latinoamericana.</p>
      <a href="#" class="btn btn-primary mb-0" data-toggle="modal" data-target="#exampleModal7">Prestar</a>
    </div>
    <div class="card-header mt-0">Disponibles: 5</div>
  </div>
  
  <div class="card border-primary mb-3 tarjetas" style="max-width: 18rem;">
    <div class="card-header">La esperanza de 1984"</div>
    <div class="card-body text-primary">
      <h5 class="card-title">George Orwell</h5>
      <p class="card-text">Es una novela distópica que sigue la vida de Winston Smith, un hombre que vive bajo el control totalitario del Partido en Oceanía. La historia se desarrolla en un futuro oscuro donde el gobierno manipula la información y la vigilancia es omnipresente. Orwell plantea temas como la opresión, la manipulación y la lucha por la libertad individual.</p>
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7">Prestar</a>
    </div>
  </div>

  <div class="card border-primary mb-3 tarjetas" style="max-width: 18rem;">
    <div class="card-header">Matar a un ruiseñor</div>
    <div class="card-body text-primary">
      <h5 class="card-title">Harper Lee</h5>
      <p class="card-text">Ambientada en los años 30 en Alabama, Estados Unidos, "To Kill a Mockingbird" narra la historia a través de los ojos de Scout Finch, una niña que presencia la lucha contra el racismo y la injusticia en su comunidad. La novela aborda temas como el prejuicio racial, la empatía y la búsqueda de la justicia.</p>
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7">Prestar</a>
    </div>
  </div>

  <div class="card border-primary mb-3 tarjetas" style="max-width: 18rem;">
    <div class="card-header">Orgullo y prejuicio</div>
    <div class="card-body text-primary">
      <h5 class="card-title">Jane Austen</h5>
      <p class="card-text">Pride and Prejudice" es una obra clásica de la literatura inglesa que sigue la historia de Elizabeth Bennet y su complicada relación con el apuesto y enigmático Mr. Darcy. La novela retrata la sociedad y las normas sociales de la época, mientras aborda temas como el amor, el orgullo y los prejuicios.</p>
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7">Prestar</a>
    </div>
  </div>

  <div class="card border-primary mb-3 tarjetas" style="max-width: 18rem;">
    <div class="card-header">El gran Gatsby</div>
    <div class="card-body text-primary">
      <h5 class="card-title">F. Scott Fitzgerald</h5>
      <p class="card-text">Situada en la década de 1920 en Estados Unidos, "The Great Gatsby" es una obra maestra que examina la decadencia y la corrupción del sueño americano. A través de la mirada de Nick Carraway, el lector es testigo de la historia de Jay Gatsby, un enigmático millonario obsesionado con recuperar un amor perdido.</p>
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7">Prestar</a>
    </div>
  </div>
</div>

<!-- modal para prestar el libro -->
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
              <div class="card-header">Libro: Cien años de soledad</div>
              <div class="card-header">Autor: Gabriel García Márquez</div>
              <div class="card-body text-primary py-1">
                <p class="card-text text-dark">Sala: principal</p>
                <p class="card-text text-dark">Codigo de clasificacion: 392.656</p>
                <p class="card-text text-dark">Codigo de barras: 7874545645313</p>
                <p class="card-text text-dark">Codigo autor: 54565</p>
                <p class="card-text text-dark">Observaciones: Esta en buen estado el libro y tiene pasta de proteccion.</p>
              </div>
              <div class="card-header mt-0">Disponibles: 5</div>
            </div>
              <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal8">Prestar libro</button>
      </div>
      <div class="modal-footer">
      <a href="prestar.html"><button type="button" class="btn btn-dark">Cerrar</button></a>
        <!-- <button type="button" class="btn btn-success">Crear cuenta</button> -->
      </div>
    </div>
  </div>
</div>

<!-- modal registrar a usuario con prestamo -->
<div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <div class="card-header">Libro: Cien años de soledad</div>
              <div class="card-header">Autor: Gabriel García Márquez</div>
              <div class="card-body text-primary">
                <p class="card-text text-dark">Sala: principal</p>
                <p class="card-text text-dark">Codigo de clasificacion: 392.656</p>
                <p class="card-text text-dark">Codigo de barras: 7874545645313</p>
                <p class="card-text text-dark">Codigo autor: 54565</p>
                <p class="card-text text-dark">Observaciones: Esta en buen estado el libro y tiene pasta de proteccion.</p>
              </div>
            </div>
            <div class="d-flex justify-content-center">

                <div class="input-group mb-3">
                  <button class="btn btn-dark" id="buscar" type="button">Cedula:</button>
                    <input style="width: 200px;" id="buscarImagen" type="text" class="form-control" placeholder="Buscar...">
                    <button class="btn btn-dark" id="buscar" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    </button>

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
                              <td class="text-center"><input type="radio"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="form-group mt-2 w-100 mb-0">
                      <label class="btn btn-dark text-white" for="mensaje">Observaciones:</label>
                      <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe observaciones aqui"></textarea>
                    </div>

                </div>
              
            </div>
            <!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Haz clic para mostrar y ocultar el contenido
            </button> -->
            
              <a href="prestamos.html"><button type="submit" class="btn btn-success">Enviar prestamo</button></a>
      </div>
      <div class="modal-footer">
      <a href="prestar.html"><button type="button" class="btn btn-dark">Cerrar</button></a>
        <!-- <button type="button" class="btn btn-success">Crear cuenta</button> -->
      </div>
    </div>
  </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
</body>
</html>