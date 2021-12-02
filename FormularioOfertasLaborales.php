<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <title>Crear Oferta</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="./js/formularioOfertasLaborales.js" language="javascript" type="text/javascript" ></script> -->
  </head>
  <body>
    <nav class="navbar navbar-expand-lg barra rounded">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="./v.principal-reclutador.php">Unip</a>
        <img src="./img/Logo3.png" alt="5%" width="3%">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="Perfil-Administrador.html">Mi Perfil</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Crear publicación</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="Rutas/ListarOfertas.php">Mis Ofertas</a>
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
    <div class="container container-reclutadores mt-4">
      <h1 class="h1  text-left">Nueva Oferta Laboral</h1>
      <form class="oculto" id="formOfertaLaboral">
        <div class="form-group col-md-6">
          <label for="titulo" id="lbltituloOferta" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 from-label">Titulo</label>
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <input type="text" class="form-control" name="titulo" id="tituloOferta" aria-describedby="" placeholder="Ej: Programador Web/Programador Full Stack" min="5" max="20" required>
            <div id="error_titulo" class="invalid-feedback">
              Ingrese un titulo de la oferta a crear
            </div>
          </div>
          <label for="empresa" id="lblurlempresa" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 from-label">Url de la Empresa</label>
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <span class="input-group-text" id="basic-addon3">https://ejemplo.com/</span>
                    <input type="text" class="form-control" id="urlempresa" name="urlempresa" aria-describedby="basic-addon3">
            <!-- <div id="error_url" class="invalid-feedback">
              Ingrese un titulo de la oferta a crear
            </div> -->
          </div>
        </div>
        <div class="row col-md-8">
          <div class="form-group col-md-6">
            <label for="Empresa" id="lblEmpresa" class="col-xs-12 col-sm-12 col-md-8 col-lg-8 from-label">Empresa</label>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <input type="text" class="form-control" name="empresa" id="nombreEmpresa" min="5" max="30" required>
                  <div id="error_empresa"class="invalid-feedback">
                    Ingrese el nombre de la empresa
                </div>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="TipoDeJornada" id="lblTipoDoc" class="col-xs-12 col-sm-12 col-md-8 col-lg-8 from-label">Tipo de Jornada Laboral</label>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
              <select class="form-control col-md-12 col-lg-12 custom-select" id="tipoJornada" required>
                <option value="0" selected>Seleccione</option>
                <option value="1">Jornada Completa</option>
                <option value="2">Part Time</option>
                <option value="3">Pasantia</option>
              </select>
              <div class="invalid-feedback">
                Debe elegir un tipo de jornada laboral
              </div>
            </div>
          </div>
          <div class="form-group col-md-6">
              <label for="ubicacion" id="lblubicacion" class="col-xs-12 col-sm-12 col-md-8 col-lg-8 from-label">Ubicacion de la oferta</label>
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                  <input type="text" class="form-control" name="ubicacion" id="ubicacion" min="5" max="30" required>
                    <div id="error_ubicacion" class="invalid-feedback">
                      Ingrese un dato valido
                  </div>
              </div>
          </div>
          <div class="form-group col-md-6">
            <label for="TipoDeContrato" id="lblTipoDoc" class="col-xs-12 col-sm-12 col-md-8 col-lg-8 from-label">Tipo de Contrato</label>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
              <select class="form-control col-md-12 col-lg-12 custom-select" id="tipoContrato" required>
                <option value="0" selected>Seleccione</option>
                <option value="1">Por Tiempo Indeterminado</option>
                <option value="2">A Plazo Fijo</option>
                <option value="3">Trabajo Eventual</option>
                <option value="4">Trabajo de Grupo</option>
              </select>
              <div class="invalid-feedback">
                Debe elegir un tipo de jornada laboral
              </div>
            </div>
          </div>
        </div>
        <div class="row col-md-12">
          <div class="form-group col-md-4">
              <label for="acercaDeEmpresa" id="lblAcercaDeEmpresa" class="col-xs-12 col-sm-12 col-md-8 col-lg-8 from-label">Acerca de la empresa</label>
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <textarea name="informacionEmpresa" name="detalleempresa" id="infoEmpresa" cols="46" rows="8" minlength="10" maxlength = "200" required></textarea>
                <div id="error_detalleempresa" class="invalid-feedback">
                  Se requiere informacion de la empresa
                </div>
              </div>
          </div>
          <div class="form-group col-md-4">
            <label for="detalleEmpleo" id="lblDetalleEmpleo" class="col-xs-12 col-sm-12 col-md-8 col-lg-8 from-label">Detalle del Puesto</label>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
              <textarea name="detalleDelEmpleo" name="detallepuesto" id="detalleEmpleo" cols="46" rows="8" minlength="10" maxlength = "200" required></textarea>
              <div id="error_detallempleo" class="invalid-feedback">
                Se requiere ingresar detalle del Empleo
              </div>
            </div>
          </div>
          <div class="form-group col-md-4">
            <label for="detalleFunciones" id="lblDetalleFunciones" class="col-xs-12 col-sm-12 col-md-8 col-lg-8 from-label">Funciones</label>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
              <textarea name="detalleDelEmpleo" name="detallefuncion" id="detalleFunciones" cols="46" rows="8" minlength="10" maxlength = "200" required></textarea>
              <div id="error_detallefunciones" class="invalid-feedback">
                Se requiere ingresar Funciones
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        </div>
        <div class="container" id="botonera">
          <button type="button" class="btn btn-secondary" id="cancelarModal" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" id="guardarOfLaboral">Guardar</button>
          </div>
        </div>
      </form>
    </div>
    <script src="./js/formularioOfertasLaborales.js" language="javascript" type="text/javascript" ></script>
  </body>
</html>