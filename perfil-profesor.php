<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <title>Perfil Profesor</title>
</head>

<body>
<?php require_once("header.php"); ?>
    <?php
    require_once("dirs.php"); 
    require_once("Controller/ProfesorController.php");
    $profesor = New ProfesorController();
    $getData = $profesor->getDataId($_SESSION["IdPersona"]);
   
    ?>
    
    <div class="container container-reclutadores mt-4  border rounded ">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="h1  text-center mt-5 mb-1">Mi Perfil</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-1  ">
                <img class="rounded-circle" src="imagen.jpg" alt="" width="165">
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
                <button type="button" class="btn btn-primary btn-lg    mb-2" onclick="location.href='./formulario-perfil-alumno.php'">Editar Perfil</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p class=" h2"><?php echo $getData[0]["Nombre"] ?></p>
            </div>
            <div class="col-md-6">
                <p class=" h3">Universidad Provincial De Ezeiza</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4  ">
                <p class="h4  mb-2">Información Personal<i class="far fa-address-card ms-2 text-dark"></i>
                </p>
                <p class="h5 mb-2">Nacionalidad: <?php echo $getData[0]["Nacionalidad"] ?></p>
                <p class="h5 mb-2">Estado civil: <?php echo $getData[0]["IdEstadoCivil"] ?></p>
                <p class="h5 mb-2">D.N.I: <?php echo $getData[0]["DNI"] ?></p>
            </div>
            <div class="col-md-3 ">
                <p class="h4 mb-2">Dirección<i class="fas fa-home ms-2 text-dark"></i></p>
                <p class="h5 mb-2">Provincia: <?php echo $getData[0]["IdProvincia"] ?></p>
                <p class="h5 mb-2">Localidad: <?php echo $getData[0]["IdLocalidad"] ?></p>
                <p class="h5 mb-2">Calle : <?php echo $getData[0]["NombreCalle"] ?></p>
                <p class="h5 mb-2">Nro: <?php echo $getData[0]["NumeroCalle"] ?></p>

            </div>
            <div class="col-md-3 ">
                <p class="h4"> Datos de contacto<i class="fas fa-phone-square-alt ms-2 text-dark"></i>
                </p>
                <p class="h5 mb-2">Nro telefono: <?php echo $getData[0]["Telefono"] ?></p>
                <p class="h5 mb-2">Email: <?php echo $getData[0]["Email"] ?></p>
            </div>
        </div>
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