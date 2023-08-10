<?php
    echo "
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
        <button type='button' class='nav-link  ml-auto btn btn-success'>Ximena</button>
        <img src='imagenperfil.png' class='ml-2 imgLogo' alt=''>
    </div>
    </nav>";
?>