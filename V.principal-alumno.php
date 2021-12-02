<?php
session_start();

if($_SESSION["IdRol"] != 3){
  header("Location: login.php"); 
}
?>

<?php 
include('./Rutas/login-google.php');
include_once('./Model/AlumnoModel.php');


$alumnoModel = new AlumnoModel();
$result =  $alumnoModel->existeAlumno($_SESSION['user_email_address']);
if($result==false){
  header("Location: formulario-perfil-alumno.php");
  exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <title>Vista  principal Alumno </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar barra navbar-expand-lg navbar-light  rounded">
        <div class="container-fluid">
          
            <a class="navbar-brand text-white" href="./pantalla-principal.php">Unip</a>
            <img src="./img/Logo3.png" alt="1%" width="3%" class="mt-1">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="./perfil-alumno.php">Mi Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="./ABMmisOfertasLaborales.html">Mis postulaciones</a>
              </li>
    
             <?php if($login_button == '')
   {
    echo '<li class="nav-item ">
    


    <a class ="nav-link text-white text-aling-left ms-3 " href="./Rutas/logout-google.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</h3></div>

   
  </li>';
    //echo '<h3><a href="logout.php">Logout</h3></div>';
   } ?>
              
              <!-- <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li> -->
            </ul>
            <!-- <form class="d-flex">
                Colocar boton de inicio y cerrar sesion en esta parte
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar Oferta " aria-label="Search">
            </div>
        </div>
        <div class="row">
          <div class="col-md-5 mt-4  border border-2 border-dark rounded tarjeta-laboral tarjetas ">
            <img class="rounded mt-2 ms-2" src="./img/baires-dev.jpeg" alt="" width="100">
            <p class="h3 text-dark mt-2">Programador Web </p>
            <p class="h4 text-dark">Estamos en la busqueda de programadores web con conocimientos en distintos lenguajes para importante empresa</p>
            <br>
            <a class="btn btn-primary mb-2" href="./oferta-completa.html" >Ver oferta completa</a>
          </div>
            <div class="col-md-1"></div>
            <div class="col-md-1 "></div>
            <div class="col-md-5 mt-4  border border-2 border-dark rounded  tarjeta-laboral tarjetas">
                <img class="rounded mt-2 ms-2" src="./img/empresa4.png" alt="" width="100">
                <p class="h3 e mt-2">Programador java</p>
                <p class="h4 ">Importante empresa IT se encuentra en la busqueda de Desarrolladores java  ofrecemos excelentes condiciones salariales y beneficios</p>
                <a class="btn btn-primary mb-2" href="./oferta-completa.html" >Ver oferta completa</a>
            </div>
        </div>
        <div class="row">
          <div class="col-md-5 mt-4  border border-2 border-dark rounded  tarjeta-laboral tarjetas">
            <img class="rounded mt-2 ms-2" src="./img/empresa5.jpeg" alt="" width="100">
            <p class="h3  mt-2">Analista Funcional </p>
            <p class="h4 ">Buscamos personas para sumar a nuestro equipo de trabajo y desempeñarse como Analista Funcional</p>
            <a class="btn btn-primary mb-2" href="./oferta-completa.html" >Ver oferta completa</a>
          </div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-5 mt-4  border border-2 border-dark rounded  tarjeta-laboral tarjetas">
                <img class="rounded mt-2 ms-2" src="./img/empresa5.jpeg" alt="" width="100">
                <p class="h3  mt-2">Tester </p>
                <p class="h4 ">Buscamos personas para sumar a nuestro equipo de trabajo y desempeñarse como analista tester</p>
                <a class="btn btn-primary mb-2" href="./oferta-completa.html" >Ver oferta completa</a>
            </div>
        </div>
        <div class="row ">
          <div class="col-md-5 mt-4  border border-2 border-dark rounded  tarjeta-laboral tarjetas ">
            <img class="rounded mt-2 ms-2" src="./img/empresa3.png" alt="" width="100">
            <p class="h3">Administrador de Bases de datos</p>
            <p class="h4 ">Importante empresa de contact center, con presencia a nivel latinoamericano, busca profesionales....... </p>
            <a class="btn btn-primary mb-2" href="./oferta-completa.html" >Ver oferta completa</a>
          </div>
            <div class="col-md-1"></div>
            <div class="col-md-1 "></div>
            <div class="col-md-5 mt-4  border border-2 border-dark rounded  tarjeta-laboral tarjetas">
              <img class="rounded mt-2 ms-2" src="./img/empresa6.jpg" alt="" width="100">
              <p class="h3">Administrador de Redes</p>
              <p class="h4 ">Importante empresa de contact center, con presencia a nivel latinoamericano, busca profesionales....... </p>
              <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#loginmodal" >Ver oferta completa</button>
            </div>  
        </div>
      </div>

     <!--<div class="modal fade" role="dialog" id="loginmodal6" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-tittle ">Bienvenido</h3>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row text-center">
                    <div class="col-12 h3">Iniciar sesiónnnnnn</div>
                </div>
                  <a class="btn btn-primary w-100 my-1" href="./oferta-completa.html" >
                    <div class="row aling-items-center">
                        <div class="col-2">
                            <img src="./img/google-logo.png"  width="32" alt="">
                        </div>
                        <div class="col-1"></div>
                        <div class="col-2">
                            <p class=" h3 ps-5">Google</p> 
                        </div>
                    </div>
                  </a>
                </div>
            </div>
        </div>
      </div>-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>