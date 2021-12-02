<?php session_start(); ?>

<nav class="navbar navbar-expand-lg barra rounded">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="login.php">Unip</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php 
            if($_SESSION["IdRol"] == 2){
          ?>
            <a class="nav-link active text-white" aria-current="page" href="perfil-DeptoAlumnos.php">Mi Perfil</a>
          <?php } else if($_SESSION["IdRol"] == 1){ ?>
            <a class="nav-link active text-white" aria-current="page" href="Perfil-Administrador.html">Mi Perfil</a>
         <?php }else if($_SESSION["IdRol"] == 5){ ?>
          <a class="nav-link active text-white" aria-current="page" href="perfil-profesor.php">Mi Perfil</a>
          <?php }else if($_SESSION["IdRol"] == 3){ ?>
          <a class="nav-link active text-white" aria-current="page" href="perfil-alumno.php">Mi Perfil</a>
          <?php } ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formularioDepartamentoAlumnos.html">Gestión de usuarios</a>
        </li>
        <?php if($_SESSION["IdRol"] == 2){
        ?>
        <li class="nav-item">
          <a class="nav-link" href="ABMSolicitudReclutadores.html">Solicutud Reclutadores</a>
        </li>
        <?php } ?>
        <li class="nav-item dropdown">
          <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a> -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
      <!-- <form class="d-flex">
          colocar boton de inicio y cerrar sesion en esta parte
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
              <!--FIN DE NAVBAR-->
