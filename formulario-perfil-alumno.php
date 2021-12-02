<?php require_once('./Rutas/login-google.php');
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
  <title>Perfil alumno</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg barra rounded">
    <div class="container-fluid">
      <a class="navbar-brand text-white " href="./V.principal-alumno.php">Unip</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white " aria-current="page" href="./perfil-alumno.php">Mi Perfil</a>
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


  
  <div class="container mt-3 container-reclutadores border rounded border-2 border-primary">
    <h1 class="h1  text-center text mt-2">Perfil Alumno</h1>
    <form id="formulario"  enctype="multipart/form-data" method="post" >
      <div class="row mt-5">
        <div class="col-md-4">
          <h1 class="h3  text-left pt-2">Datos Personales<i class="far fa-address-card ms-2 text-primary"></i>
          </h1>
          <form action="">
            <div class="form-row">
              <input type="text" class="form-control mt-3" name="nombre" id="nombre" placeholder="Nombre" value="<?php if(isset($_SESSION['user_first_name'])){echo $_SESSION['user_first_name'];}?>">
              <p  id="error_nombre"  class=" invalid-feedback text-warning">Nombre solo puede tener letras y espacios</p>
            </div>
            <div class="form-row">
              <input type="text" class="form-control mt-3" name="apellido" id="apellido" placeholder="Apellido" value="<?php if(isset($_SESSION['user_last_name'])){echo $_SESSION['user_last_name'];}?>">
              <p  id="error_apellido"  class=" invalid-feedback text-warning">Apellido solo puede tener letras y espacios</p>
              <input type="text" class="form-control mt-3" name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad">
              <p  id="error_nacionalidad"  class=" invalid-feedback text-warning">Nacionalidad solo puede tener letras y espacios</p>
            </div>
            <div class="form-row">
              <select class="form-select mt-3"  id="estadoCivil" name="estadoCivil" >
                <option value="1" selected disabled>Estado Civil</option>
                <option value="2">Soltero/a</option>
                <option value="3">Casado/a</option>
              
              </select>
            </div> 
            <div class="form-row">
              <input class="form-control mt-3 " type="number" name="dni" id="dni" placeholder="D.N.I" >
              <p  id="error_dni"  class=" invalid-feedback text-warning">El dni debe contenter 8 dígitos </p>
            </div>

            <div class="form-row mb-3">
              <input class="form-control mt-3" type="date" name="nacimiento" id="nacimiento">
            </div>

            <!--<div class="form-row">
              <select class="form-select mt-3" name="carrera" id="carrera" aria-label="Default select example">
                <option selected disabled>Seleccione Carrera</option>
                <option value="1">Desarrollo de software</option>
                <option value="2">Despachante de aduana</option>
                <option value="2">Oteleria</option>
              </select>
            </div>-->
        </div>
        <div class="col-md-4">
          <h1 class="h3  pt-2">Dirección<i class="fas fa-home ms-2 text-primary"></i></h1>
          <div class="form-row">
          <select class="form-select mt-3"  id="provincia" name="provincia" >
                <option value="1">Buenos Aires</option>
                <option value="2">Cordoba</option>
                <option value="3">Corrientes</option>
              </select>
          </div>
          <div class="form-row">
          <select class="form-select mt-3" id="localidad" name="localidad"  >
                <option value="1" >ezeiza</option>
                <option value="2">suarez</option>
                <option value="3">MG</option>
              </select>
          </div>
          <div class="form-row">
            <input type="text" class="form-control mt-3" name="calle" id="calle" placeholder="Calle">
            <p  id="error_calle"  class=" invalid-feedback text-warning">Campo calle solo puede tener palabras  </p>
          </div>
          <div class="form-row">
            <input type="number" class="form-control mt-3" name="numero" id="numero" placeholder="Numero">
            <p  id="error_numero"  class=" invalid-feedback text-warning">Campo numero solo puede tener hasta 10 dígitos  </p>
          </div>
          <!--<div class="form-row">
            <input type="number" class="form-control mt-3" name="cp" id="cp" placeholder="CP">
            <p  id="error_cp"  class=" invalid-feedback text-warning">Campo cp solo puede tener hasta 10 dígitos  </p>
          </div>-->
          <div class="form-row mt-2">
            <h1 class="h3  pt-2">Preferencia laboral <i class="fas fa-briefcase text-primary"></i></h1>
            <select class="form-select mt-3" name="preferencia" id="preferencia" >
              <option value="1" >Programador</option>
              <option value="2">Analista</option>
              <option value="3">Tester</option>
            </select>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-row">
            <h1 class="h3  mt-3 ">Contacto<i class="fas fa-phone-square-alt ms-2 text-primary"></i></h1>
          </div>
          <div class="form-row">
            <span class="h5">Email:  </span>  <span class="h5" name="email" id="email" ><?php echo $_SESSION['user_email_address'];  ?></span>
          </div>
          <div class="form-row">
            <input type="number" class="form-control mt-3" name="numeroTelefono"   id="numeroTelefono" placeholder="Numero de telefono">
            <p  id="error_numeroTelefono"  class=" invalid-feedback text-warning">Ingresar un telefono valido min 7 dígitos max 14  </p>
          </div>
            <h1 class="h3  pt-2 ">Imagen <i class="fas fa-camera-retro text-primary mt-2"></i></h1>
            <input type="file" class="form-control mt-3" name="imagen" id="imagen" accept=".jpg,.png,.jpeg">
            <!--Previsualizacion-->
            <div id="preview" class="styleImage mt-3 text-center"></div>
            <!-- //mejores -->
        </div>
      </div>
      <div class="row mt-4">
       <!-- <div class="form-group col-md-7">
          <h1 class="h5  text-left">Preferencias laborales (Opcional) <i
              class="fas fa-briefcase text-primary"></i></h1>
          <textarea class="form-control mb-4 " id="exampleFormControlTextarea1" rows="3"
            placeholder="Ingrese preferencias laborales ejemplo 'programador web'"></textarea>
        </div>-->
        <div class="col-md-7"></div>
        <div class="col-md-1"></div>
        <div class="col-md-4 pt-5 btn-group mb-2" role="group">
          <button id="btn_guardar" type="submit"   name="btn_guardar"  class="btn btn-primary btn-lg  ">Guardar Perfil</button>
        </div>
      </div>
    </form>
  </div>
  <script src="./js/formulario-perfil-alumno.js"></script>

</body>

</html>