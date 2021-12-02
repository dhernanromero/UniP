<?php

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
  	<script type="text/javascript" src="js/js-abm-profesores.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>ABM Reclutadores</title>
</head>

<body>
  <?php require_once("header.php");  ?> 
                    <!--INICIO DE NAVBAR-->
        
                        <!--FIN DE NAVBAR-->

    
                          <!--Tabla de ABM-->
    <div>
      <div class="container">
        <div class="row shadow">
          <div class="col-md-12">
            <h1 class="h1">Lista de profesores</h1>
            <table class="table table-dark">
              <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Acción</th>
                </tr>
              </thead>
              <tbody id ="tbody" class="tb-profesores">
                <?php
                  foreach ($listaProfesores as $row) {
                    echo('
                    <tr class="table-active">
                      <td>'.$row['IdPersona'].'</td>
                      <td>'.$row['Nombre'].'</td>
                      <td>04/09/2021</td>
                      <td>fheredia@mercadolibre.com</td>
                      <td>11246687845</td>
                      <td>Profesores IT</td>
                      <td>'.$row['Estado'].'</td>
                      <td>
                        <button id="a1" class="btn btn-primary btn-sm btn-aceptar" data-id="'.$row['IdPersona'].'" data-toggle="modal" data-target="#mensajeModal"><span class="glyphicon glyphicon-edit" aria-hidden="true">Aceptar</span></button>
                        <button id="r1" class="btn btn-danger btn-sm btn-rechazar" data-toggle="modal" data-target="#mensajeModal"><span class="glyphicon glyphicon-trash" aria-hidden="true">Rechazar</span></button>
                      </td>
                  </tr>
                    ');
                  }
      
      
                ?>
              </tbody>
            </table> 
            <a href="FormularioCargaProfesor.html">
              <input class="btn btn-primary" type="button" value="Agregar Profesor">
            </a>
            <!-- <button class="btn btn-primary">
                Agregar profesor
            </button> -->
          </div> 
        </div>    
      </div>                                 
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nombre profesor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Aquí se mostrarían los datos de cada profesor levantandolo de la base de datos.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

</body>
</html>