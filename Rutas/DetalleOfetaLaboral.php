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
    <title>Detalle Oferta</title>
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
    <?php
        require_once("../Controller/OfertalaboralController.php");
        $id = $_GET["Id"];
        $ofertaController = new OfertalaboralController();
        $detalleOferta = $ofertaController->ListarOfertaLaboral($id);
        foreach ($detalleOferta as $row){
         echo('
    <div class="container container-reclutadores mt-4  border rounded ">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="h1  text-center mt-5 mb-1">'.$row['Titulo'].'</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-1  ">
               
            </div>

            <div class="col-md-6  pt-2">
               
            </div>
            
        </div>
       <div class="row">
                <div class="col-md-4">
                    <p class="h2"></p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4  ">
                    <p class="h4  mb-2">Datos<i class="far fa-address-card ms-2 text-dark"></i>
                    </p>
                    <p class="h5 mb-2">Empresa:'.$row['NombreEmpresa'].'</p>
                    <p class="h5 mb-2">TipoContrato: '.$row['DetalleContrato'].'</p>
                    <p class="h5 mb-2">TipoJornada: '.$row['Detalle'].'</p>
                    <p class="h5 mb-2">Acerca de la Empresa: '.$row['AcercadeEmpresa'].'</p>
                    <p class="h5 mb-2">Detalle del puesto: '.$row['DetallePuesto'].'</p>
                    <p class="h5 mb-2">Funciones del puestp: '.$row['FuncionesPuesto'].'</p>
                </div>
                <div class="col-md-3 ">
                    <p class="h4 mb-2">Dirección<i class="fas fa-home ms-2 text-dark"></i></p>
                    <p class="h5 mb-2">Ubicacion: '.$row['UbicacionOferta'].'</p>
                   
                </div>
                <div class="col-md-3 ">
                    <p class="h4"> Datos de contacto<i class="fas fa-phone-square-alt ms-2 text-dark"></i>
                    </p>
                    <p class="h5 mb-2">Url Empresa: '.$row['UrlEmpresa'].'</p>
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