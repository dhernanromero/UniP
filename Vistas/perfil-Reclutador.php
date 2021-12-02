<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <title>Perfil Reclutador</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg barra rounded">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="../v.principal-reclutador.php">Unip</a>
            <img src="../img/Logo3.png" alt="5%" width="3%">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../FormularioOfertasLaborales.php">Crear publicación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../Rutas/ListarOfertas.php">Mis Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="miPerfil" href="#">Mi Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="Logout" href="logout.php">Cerrar Sesion</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-white" href="#">Mis Materias</a>
                    </li> -->
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
                colocar boton de inicio y cerrar sesion en esta parte
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
            </div>
        </div>
    </nav>

    <div class="container container-reclutadores mt-4  border rounded ">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="h1  text-center mt-5 mb-1">Mi Perfil</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-1  ">
                <!-- Agregar despues la imagen del perfil -->
                <!-- <img class="rounded-circle" src="../img/imagen.jpg" alt="" width="165"> -->
            </div>

            <div class="col-md-6  pt-2">
                <!--
                <p class="h3  text-center">Progreso de perfil </p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>-->
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2 mb-2 pt-5">
                <button type="button" class="btn btn-primary btn-lg    mb-2" onclick="location.href='./formularioCargaReclutador.html'">Editar Perfil</button>
            </div>
        </div>
        <?php
        
        foreach ($perfilReclutador as $row){
         echo('<div class="row">
                <div class="col-md-4">
                    <p class="h2">'.$row['Nombre']." ".$row['Apellido'].'</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4  ">
                    <p class="h4  mb-2">Información Personal<i class="far fa-address-card ms-2 text-dark"></i>
                    </p>
                    <p class="h5 mb-2">Nacionalidad:'.$row['Nacionalidad'].'</p>
                    <p class="h5 mb-2">Estado civil: '.$row['EstadoCivil'].'</p>
                    <p class="h5 mb-2">D.N.i: '.$row['DNI'].'</p>
                </div>
                <div class="col-md-3 ">
                    <p class="h4 mb-2">Dirección<i class="fas fa-home ms-2 text-dark"></i></p>
                    <p class="h5 mb-2">Provincia: '.$row['Provincia'].'</p>
                    <p class="h5 mb-2">Localidad: '.$row['Localidad'].'</p>
                    <p class="h5 mb-2">Calle : '.$row['NombreCalle'].'</p>
                    <p class="h5 mb-2">Nro: '.$row['NumeroCalle'].'</p>
                </div>
                <div class="col-md-3 ">
                    <p class="h4"> Datos de contacto<i class="fas fa-phone-square-alt ms-2 text-dark"></i>
                    </p>
                    <p class="h5 mb-2">Nro telefono: '.$row['Telefono'].'</p>
                    <p class="h5 mb-2">Email: '.$row['Email'].'</p>
                </div>

            </div>');
        }
        ?>
        <!--<div class="row mt-3">
            <div class="col-md-12">
                <p class=" h3">Skills</p>
            </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <p class=" h5"> <i class="fas fa-check  me-3 text-dark"></i>POO</p>
        </div>
        <div class="col-md-3">
            <p class=" h5"> <i class="fas fa-check  me-3 text-dark"></i>Testing</p>
        </div>
        <div class="col-md-3">
            <p class=" h5"> <i class="fas fa-check  me-2 text-dark"></i>Bases de Datos</p>
        </div>-->
    </div>
    <!--
    <div class="row">
        <div class="col-md-3">
            <p class=" h5"> <i class="fas fa-check  me-2 text-dark"></i>Ing. de software</p>
        </div>
        <div class="col-md-3">
            <p class=" h5"> <i class="fas fa-check me-2 text-dark"></i>Redes</p>
        </div>
        <div class="col-md-3">
            <p class=" h5"> <i class="fas fa-check  me-2 text-dark"></i>Sistemas operativos</p>
        </div>
    </div>-->
    </div>
</body>

</html>