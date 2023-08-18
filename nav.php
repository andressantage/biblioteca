<!-- barra de navegacion -->
<nav class='navbar navbar-expand-lg navbar-dark bg-warning py-1'>
    <a class='navbar-brand' href='#'>
        <img class='imgLogo' src='https://cdn.pixabay.com/photo/2017/01/31/15/33/linux-2025130_1280.png' alt=''>
        Administrador
    </a>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNav'>
        <ul class='navbar-nav'>            
        <li class='nav-item d-flex align-items-center'>
            <a class='nav-link' href='#' data-toggle='modal' data-target='#exampleModal6'><button type='button' class='btn btn-success'>Registrar usuario</button></a>
        </li>
        <li class='nav-item d-flex align-items-center'>
            <a class='nav-link' href='prestar.php'><button type='button' class='btn btn-success'>Prestar</button></a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='prestamos.php'><button type='button' class='btn btn-success'>Prestamos</button></a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='usuarios.php'><button type='button' class='btn btn-success'>Usuarios</button></a>
        </li>
        </ul>
        <!-- cambiar esta parte para que se inice sesion y en caso de haber iniciado sesion lo dirija a las instrucciones para hacer fecth API -->
        <button type='button' class='nav-link  ml-auto btn btn-success'  data-toggle='modal' data-target='#exampleModal10'><?php echo $_SESSION['nombre']; ?></button>
        <img src='imagenperfil.png' class='ml-2 imgLogo' alt=''>
    </div>
</nav>

<!-- modal para de opciones para el administrador #10-->
<div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog mt-0 mb-2 h-100 d-flex justify-content-center align-items-center" role="document">
    <div class="modal-content contenidoModal">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Opciones administrador</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body d-flex justify-content-center flex-column">
        <a class="w-100 d-flex justify-content-center" data-toggle='modal' data-target='#exampleModal11'><button type="submit" class="btn btn-success m-2">Editar Perfil</button></a>
        <a href="back/salir.php" class="w-100 d-flex justify-content-center"><button type="submit" class="btn btn-success m-2">Cerrar sesion</button></a>
      </div>
      <div class="modal-footer">
        <a href="usuarios.php"><button type="button" class="btn btn-dark">Cerrar</button></a>
      </div>
    </div>
  </div>
</div>

<!-- modal para editar administrador #11-->
<div class="modal fade" id="exampleModal11" tabindex="2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog mt-0 mb-2 h-100 d-flex justify-content-center align-items-center" role="document">
    <div class="modal-content contenidoModal">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Editar administrador</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="back/editar_administrador.php">
              <div class="form-group  text-white">
                <label for="nombre">Nombres</label>
                <input required type="text" class="form-control" name="nombre" id="nombre" value="<?= $_SESSION['nombre'] ?>" required>
              </div>
              <div class="form-group  text-white">
                <label for="apellido">Apellidos</label>
                <input required type="text" class="form-control" name="apellido" id="apellido" value="<?= $_SESSION['apellido'] ?>" required>
              </div>
              <div class="form-group  text-white">
                <label for="email">Correo electrónico</label>
                <input required type="email" class="form-control" name="email" id="email" value="<?= $_SESSION['correo'] ?>" required>
              </div>
              <div class="form-group  text-white">
                <label for="cedula">Contraseña</label>
                <input required type="text" class="form-control" name="password" id="password" value="<?= $_SESSION['password'] ?>" required>
              </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="submit" class="btn btn-success">Editar</button>
        </form>
            <button type="button" class="btn btn-dark" data-dismiss="modal" aria-label="Close">Cerrar</button>
      </div>
    </div>
  </div>
</div>