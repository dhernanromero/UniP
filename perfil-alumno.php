<?php

use Google\Service\CloudSearch\Value;

require_once('./Rutas/login-google.php');
require_once('./Model/AlumnoModel.php');
if (isset($_SESSION['user_email_address'])) {
    $alumno = new AlumnoModel();
    $resultado = $alumno->datosAlumno($_SESSION['user_email_address']);
    $data= $resultado->fetch(PDO::FETCH_ASSOC);
    //$data  = json_encode($data);
}

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
    <!--estilos adicionales e iconos-->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <title>Perfil Alumno</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg barra rounded">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="./V.principal-alumno.php">Unip</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="./perfil-alumno.php">Mi Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./ABMNotificacionAlumno.html">Mis postulaciones</a>
                    </li>
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
                <h1 class="h1 t text-center mt-2 mb-1">Mi Perfil</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-1  ">
                <img class="rounded-circle" id="img-perfil" src="./img/<?php echo $data['FotoPerfil'] ?>" alt="" width="165">
            </div>

            <div class="col-md-6  pt-2">
                <p class="h3 t text-center">Progreso de perfil </p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2 mb-2 pt-5">
                <button type="button" id="btn-editar" name="btn-editar" class="btn btn-primary btn-lg   mb-2">Editar Perfil</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p class="t h4"> Nombre: <span id="nombre" name="nombre"><?php echo $data['Nombre'] ?></span> </p>
                <p class="t h4"> Apellido: <span id="apellido" name="appellido"><?php echo $data['Apellido'] ?></span></p>
            </div>
            <div class="col-md-6">
                <p class="t h3">Tecnicatura universitaria en Desarrollo de software</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4 t ">
                <p class="h4 t mb-2">Información Personal<i class="far fa-address-card ms-2 text-dark"></i>
                </p>
                <p class="h5 t mb-2">Nacionalidad: <span id="nacionalidad" name="nacionalidad"><?php echo $data['Nacionalidad'] ?></span> </p>
                <p class="h5 t mb-2" id="estadoCivil" name="estadoCivil">Estado civil: soltero</p>
                <p class="h5 t mb-2">Fecha de nacimiento:<span id="fechaNacimiento" name="fechaNacimiento"><?php echo $data['FechaNacimiento'] ?></span></p>
                <p class="h5 t mb-2">D.N.i: <span id="dni" name="dni"> <?php echo $data['DNI'] ?></span> </p>
            </div>
            <div class="col-md-3 t">
                <p class="h4 t mb-2" id="direccion" name="direccion">Dirección<i class="fas fa-home ms-2 text-dark"></i></p>
                <p class="h5 t mb-2">Provincia: Buenos Aires</p>
                <p class="h5 t mb-2">Localidad: Tristan Suarez</p>
                <p class="h5 t mb-2">Calle : <span id="calle" name="calle"><?php echo $data['NombreCalle'] ?></span> </p>
                <p class="h5 t mb-2">Nro: <span id="numeroCalle" name="numeroCalle"><?php echo $data['NumeroCalle'] ?></span> </p>
            </div>
            <div class="col-md-3 t">
                <p class="h4 t"> Datos de contacto<i class="fas fa-phone-square-alt ms-2 text-dark"></i>
                </p>
                <p class="h5 t mb-2">Nro telefono: <span id="telefono" name="telefono"><?php echo $data['Telefono'] ?></span></p>
                <p class="h5 t mb-2">Email: <span id="email" name="email"><?php echo $data['Email'] ?></span></p>
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
    </div>


    <!----modal para Editar Perfil------>
    <div class="modal fade " role="dialog" id="loginmodal4">
        <div class="modal-dialog modal-xl rounded">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="col-12 h3 text-white">Editar Perfil</div>
                </div>
                <form id="formAlumno" class="form"  enctype="multipart/form-data" method="post">
                    <div class="modal-body">
                        <div class=" form-row">
                            <div class="col-md-4">
                                <input type="text" class="form-control mt-3" name="Fnombre" id="Fnombre" placeholder="Nombre" value="<?php echo $data['Nombre'] ?>">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control mt-3" name="Fprovincia" id="Fprovincia" placeholder="Provincia">
                            </div>
                            <div class="col-md-4">
                                <input type="number" class="form-control mt-3" name="FnumeroTelefono" id="FnumeroTelefono" placeholder="Numero de Telefono" value="<?php echo $data['Telefono'] ?>">
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="col-md-4">
                                <input type="text" class="form-control mt-3" name="Fapellido" id="Fapellido" placeholder="Apellido" value="<?php echo $data['Apellido'] ?>">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control mt-3" name="Flocalidad" id="Flocalidad" placeholder="Localidad">
                            </div>
                            <div class="col-md-4">
                                <input type="file" class=" mt-3" name="Fimagen" id="Fimagen" accept=".jpg,.png,.jpeg" value="<?php echo $data['FotoPerfil']; ?>" >
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="col-md-4">
                                <input type="text" class="form-control mt-3" name="Fdni" id="Fdni" placeholder="Dni" value="<?php echo $data['DNI'] ?>">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control mt-3" name="Fcalle" id="Fcalle" placeholder="calle" value="<?php echo $data['NombreCalle'] ?>">
                            </div>
                            <div class="col-md-4">
                                <spam>Preferencia laboral: </spam>
                                <select class="form-select mt-3" name="Fpreferencia" id="Fpreferencia">
                                    <option value="1">Programador</option>
                                    <option value="2">Analista</option>
                                    <option value="3">Tester</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="col-md-4">
                                <spam>Estado Civil: </spam>
                                <select class="form-select mt-3" name="FestadoCivil" id="FestadoCivil">
                                    <option value="1">Soltero/a</option>
                                    <option value="2">Casado/a</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="number" class="form-control mt-3" id="FnumeroCalle" name="FnumeroCalle" placeholder="Numero" value="<?php echo $data['NumeroCalle'] ?>">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <input type="text" class="form-control mt-3" name="Fnacionalidad" id="Fnacionalidad" placeholder="Nacionalidad" value="<?php echo $data['Nacionalidad'] ?>">
                            </div>
                        </div>
                        <div class="form-row  mt-3">
                            <div class="col-md-4">
                                <input placeholder="Fecha Nacimiento" class="textbox-n" type="text" onfocus="(this.type='date')" name="Fdate" id="Fdate" value="<?php echo $data['FechaNacimiento'] ?>" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                            <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./js//perfil-alumno.js"></script>
</body>

</html>