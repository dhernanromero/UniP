<?php 
session_start();
$session = (isset($_SESSION["IdRol"]) ? $_SESSION["IdRol"] : "");
switch ($session) {
  case 1:
    header("Location: pantalla-principal-administrador.php");
    break;
  case 2:
    header("Location: v.principal-reclutador.php"); 
    break;
  case 3:
    header("Location: V.principal-alumno.php"); 
    break;
  case 4:
    header("Location: v.principal-reclutador.php"); 
    break;
  case 5:
    header("Location: v.principal-reclutador.php"); 
    break;
  case "":
    break;
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <title>Perfil Alumno</title>
</head>
<body>
    <nav class="navbar barra rounded">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="./pantalla-principal.php">Unip</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
      <div class="row align-items-center" style="padding-top:10%;padding-left: 30%;padding-right: 30%;">
        <form id="miform" style="background-color: aliceblue; padding:10%;" onsubmit="login(event)">
            <div>
                <h1 style="text-align: center;">Login</h1>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control-plaintext" id="email" value="email@example.com">
                </div>
            </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password">
                </div>
              </div>
              <button type="submit">Ingresar</button>
              <button id="miboton" type="button" class="btn btn-link">
                    Olvide mi contraseña 
              </button>
              <?php
              
              ?>
        </form>
      </div>
     <!--  <script src="jquery-3.1.1.min.js"></script> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <script src="main.js"></script>
</body>