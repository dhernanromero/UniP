
<?php
session_start();
if($_SESSION["IdRol"] != 2){
  header("Location: login.php"); 
}
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
  	<script type="text/javascript" src="js/js-abm-departamento-alumnos.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>ABM departamento de alumnos</title>
</head>

<body>
                    <!--INICIO DE NAVBAR-->
        <?php require_once("header.php"); ?>
    
                          <!--Tabla de ABM-->
    <div>
      <div class="container">
        <div class="row shadow">
          <div class="col-md-12">
            <h1 class="h1">Departamento de alumnos</h1>
            <table class="table table-dark">
              <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Acción</th>
                </tr>
              </thead>
              <tbody>
                <tr class="table-active">
                    <td>Mark</td>
                    <td>Zotta</td>
                    <td>    
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        Ver
                      </button>
                      <button type="button" class="borrar btn btn-primary" href="formularioDepartamentoAlumnos.html">
                          Editar
                      </button>
                      <button type="button" class="borrar btn btn-primary">Borrar</button>
                    </td>
                </tr>
                <tr class="table-active">
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        Ver
                      </button>
                      <button type="button" class="borrar btn btn-primary">
                          Editar
                      </button>
                      <button type="button" class="borrar btn btn-primary">Borrar</button>
                    </td>
                </tr>
                <tr class="table-active">
                  <td>María</td>
                  <td>Velasquez</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                      Ver
                    </button>
                    <button type="button" class="borrar btn btn-primary" href="formularioDepartamentoAlumnos.html">
                        Editar
                    </button>
                    <button type="button" class="borrar btn btn-primary">Borrar</button>
                  </td>
              </tr>
              </tbody>
            </table> 
            <a href="./formularioDepartamentoAlumnos.html" class="btn btn-primary" >
                Agregar
            </a>
          </div> 
        </div>    
      </div>                                 
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Departamento de alumnos</h5>
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
    <div>
      <a href="logout.php">Salir</a>
    </div>
</body>
</html>