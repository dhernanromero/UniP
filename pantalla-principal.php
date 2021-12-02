<?php

require_once('C:/xampp/htdocs/Unip/Rutas/login-google.php');

?>

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

  <link rel="stylesheet" href="./css/estilo.css">
  <link rel="stylesheet" href="./fontawesome/css/all.css">
  <title>Pantalla principal </title>

</head>

<body>
  <nav class="navbar barra navbar-expand-lg navbar-light  rounded">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Unip</a>
      <img src="./img/Logo3.png" alt="5%" width="3%">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!--<ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Mi Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Mis postulaciones</a>
          </li>
          <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a> 
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li> 
        </ul>
        <form class="d-flex">
                    Colocar boton de inicio y cerrar sesion en esta parte
                  <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row   buscador">
      <div class="col-md-2"></div>
      <div class="col-md-6 ">
        <a type="button" class="btn btn-primary btn-lg" href="./v.principal-reclutador.php">Candidatos</a>
        <a type="button" class="btn btn-success btn-lg text-white">Publicaciones</a>
      </div>
    </div>

    <div class="row ">
      <div class="col-md-2"></div>
      <div class="col-md-6 ">
        <input class="form-control mr-sm-2 bg-i shadow border-dark mt-1 " type="search" placeholder="Buscar " aria-label="Search">
      </div>

      <div class="row filaTarjetas">
        <div class="col-md-3">
          <div class="card tarjeta-inicio border border-2 border-secondary tarjetas">
            <img src="img/Alumnos.jpg" class="card-img-top " alt="...">
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <h3 class="card-title h3 text-center">Alumnos</h5>
                </div>
                <div class="row mt-1">
                  <div class="col-sm-12">
                    <button class="btn btn-primary w-100 my-1" id="btnAlumno">
                      <div class="row aling-items-center">
                        <div class="col-1"></div>
                        <div class="col-11">
                          <p class=" h5 ps-5 text-center">INGRESAR</p>
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-md-3 mb-1">
          <div class="card tarjeta-inicio border border-2 border-secondary tarjetas">
            <img src="img/Reclutadores.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <h3 class="card-title h3 text-center">Reclutadores</h5>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-12">
                    <button id="btnReclutadores" class="btn btn-primary w-100 my-1" data-bs-toggle="modal" data-bs-target="#loginmodal2">
                      <div class="row aling-items-center">
                        <div class="col-1"></div>
                        <div class="col-11">
                          <a href="login.php"><p class="btn-login h5 ps-5 text-center">INGRESAR</p></a>
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="col-md-3 mb-1">
          <div class="card tarjeta-inicio border border-2 border-secondary tarjetas">
            <img src="img/Reclutadores.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <h3 class="card-title h3 text-center">Reclutadores</h5>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-12">
                    <button id="btnReclutadores" class="btn btn-primary w-100 my-1" data-bs-toggle="modal" data-bs-target="#loginmodal2">
                      <div class="row aling-items-center">
                        <div class="col-1"></div>
                        <div class="col-11">
                          <p class=" h5 ps-5 text-center">INGRESAR</p>
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card tarjeta-inicio border border-2 border-secondary tarjetas">
            <img src="img/profesor.jpg" class="card-img-top " alt="...">
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <h3 class="card-title h3 text-center">Profesores</h5>
                </div>
                <div class="row mt-1">
                  <div class="col-sm-12">
                    <button id="btnProfesores" class="btn btn-primary w-100 my-1" >
                      <div class="row aling-items-center">
                        <div class="col-1"></div>
                        <div class="col-11">
                          <a href="login.php"><p class="btn-login h5 ps-5 text-center">INGRESAR</p></a>
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card tarjeta-inicio border border-2 border-secondary tarjetas">
            <img src="img/departamento-alumnos.jpg" class="card-img-top">
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <h3 class="card-title h4 text-center">Dpto. Alumnos</h5>
                </div>
                <div class="row mt-1">
                  <div class="col-sm-12">
                    <button class="btn btn-primary w-100 my-1" id="btnDptoAlumnos" name="btnDptoAlumnos">
                      <div class="row aling-items-center">
                        <div class="col-1"></div>
                        <div class="col-11">
                          <a href="login.php"><p class="btn-login h5 ps-5 text-center">INGRESAR</p></a>
                        </div>
                    </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!----modal para login Alumnos------>
      <div class="modal fade" role="dialog" id="loginmodal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-secondary">
              <h3 class="modal-tittle text-white ">Bienvenido</h3>
            </div>
            <div class="modal-body">
              <div class="row text-center">
                <div class="col-12 h3">Iniciar sesión</div>
              </div>
              <div class="modal-footer">
                <?php echo $login_button; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!----modal para login reclutadores ------>
      <div class="modal fade" role="dialog" id="loginmodal2">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-secondary">
              <h3 class="moddal-tittle text-white ">Bienvenido</h3>
            </div>
            <div class="modal-body">
              <div class="row text-center">
                <div class="col-12 h3">Iniciar Sesión</div>
              </div>
              <form id="miform" style="background-color: aliceblue; padding:10%;" onsubmit="login(event)">
                <div class="mb-4 row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext border border-secondary rounded" id="email">
                  </div>
                </div>
                <div class="mb-4 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label ">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control-plaintext border border-secondary rounded" id="password">
                  </div>
                </div>
                <button class="btn btn-danger col-3" type="submit">Ingresar</button>
                <a type="button" class="btn btn-link col-4" href="./recuperar-contraseña.html">
                  Olvide mi contraseña
                </a>
                <a href="./FormularioCargaReclutador.html" class="btn btn-link col-4">
                  No tengo cuenta
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="./js/pantalla-principal.js"></script>
</body>

</html>