<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--estilos adicionales e iconos-->
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <title>Perfil Alumno</title>
</head>

<body>
<nav class="navbar navbar-expand-lg barra rounded">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="./v.principal-reclutador.php">Unip</a>
      <img src="./img/Logo3.png" alt="5%" width="3%">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="./FormularioOfertasLaborales.php">Crear publicación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./Rutas/ListarOfertas.php">Mis Ofertas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" id="miPerfil" href="Rutas/ObtenerPerfilReclutador.php">Mi Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" id="Logout" href="logout.php">Cerrar Sesion</a>
          </li>
          <li class="nav-item dropdown">
            <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a> -->
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
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

    <!-- <div class="container container-reclutadores mt-4  border rounded "> -->
        <!-- <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="h1 t text-center mt-2 mb-1">Mi Perfil</h1>
            </div>
        </div> -->
    <?php
    require_once("./Controller/AlumnosController.php");

    $id = $_GET["Id"];

    $alumnosController = new AlumnoController();
    $data = $alumnosController->ConsultarPerfilAlumno($id);
    foreach($data as $row)
    {
        echo('
        <div class="container container-reclutadores mt-4  border rounded ">
            <div class="row">
                <div class="col-md-3 mb-1  ">
                    <img class="rounded-circle" id="img-perfil" src="./img/'.$row['FotoPerfil'].'" alt="" width="165">
                </div>
                <div class="col-md-6  pt-2">
                   
                </div>
                <div class="col-md-1"></div>
                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p class="t h4"> Nombre: <span id="nombre" name="nombre">'.$row['Nombre'].'</span> </p>
                    <p class="t h4"> Apellido: <span id="apellido" name="appellido">'.$row['Apellido'].'</span></p>
                </div>
                <div class="col-md-6">
                    <p class="t h3">Tecnicatura universitaria en Desarrollo de software</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 t ">
                    <p class="h4 t mb-2">Información Personal<i class="far fa-address-card ms-2 text-dark"></i>
                    </p>
                    <p class="h5 t mb-2">Nacionalidad: <span id="nacionalidad" name="nacionalidad">'.$row['Nacionalidad'].'</span> </p>
                    <p class="h5 t mb-2" id="estadoCivil" name="estadoCivil">Estado civil: soltero</p>
                    <p class="h5 t mb-2">Fecha de nacimiento:<span id="fechaNacimiento" name="fechaNacimiento">'.$row['FechaNacimiento'].'</span></p>
                    <p class="h5 t mb-2">D.N.i: <span id="dni" name="dni"> '.$row['DNI'].'</span> </p>
                </div>
                <div class="col-md-3 t">
                    <p class="h4 t mb-2" id="direccion" name="direccion">Dirección<i class="fas fa-home ms-2 text-dark"></i></p>
                    <p class="h5 t mb-2">Provincia: Buenos Aires</p>
                    <p class="h5 t mb-2">Localidad: Tristan Suarez</p>
                    <p class="h5 t mb-2">Calle : <span id="calle" name="calle">'.$row['NombreCalle'].'</span> </p>
                    <p class="h5 t mb-2">Nro: <span id="numeroCalle" name="numeroCalle">'.$row['NumeroCalle'].'</span> </p>
                </div>
                <div class="col-md-3 t">
                    <p class="h4 t"> Datos de contacto<i class="fas fa-phone-square-alt ms-2 text-dark"></i>
                    </p>
                    <p class="h5 t mb-2">Nro telefono: <span id="telefono" name="telefono">'.$row['Telefono'].'</span></p>
                    <p class="h5 t mb-2">Email: <span id="email" name="email">'.$row['Email'].'</span></p>
                </div>

                <div class="col-md-2 t ">
                    <p class="h3 t">Preferencias Laboral<i class="fas fa-briefcase text-dark"></i></p>
                    <p class="h5 t">Programador</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <p class="t h3">Skills</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="t h5"> <i class="fas fa-check  me-3 text-dark"></i>POO</p>
                </div>
                <div class="col-md-3">
                    <p class="t h5"> <i class="fas fa-check  me-3 text-dark"></i>Testing</p>
                </div>
                <div class="col-md-3">
                    <p class="t h5"> <i class="fas fa-check  me-2 text-dark"></i>Bases de Datos</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="t h5"> <i class="fas fa-check  me-2 text-dark"></i>Ing. de software</p>
                </div>
                <div class="col-md-3">
                    <p class="t h5"> <i class="fas fa-check me-2 text-dark"></i>Redes</p>
                </div>
                <div class="col-md-3">
                    <p class="t h5"> <i class="fas fa-check  me-2 text-dark"></i>Sistemas operativos</p>
                </div>
            </div>
        </div>');
    }
    ?>

    <script src="../js/perfil-alumno.js"></script> -->
</body>

</html>