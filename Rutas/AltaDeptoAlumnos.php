<?php
require_once("../dirs.php");
require_once (CLASES_PATH."DeptoAlumnos.php");
require_once (CONTROLLER_PATH."DeptoAlumnosController.php");
    
    $datos = json_decode( file_get_contents("php://input"));
    
    // print_r($datos);
    $pass = $datos-> contrasenia;
 
    $DeptoAlumnos = new DeptoAlumnos($datos->nombre, $datos->apellido,$datos->dni,$datos->nacionalidad,$datos->nacimiento,$datos->telefono,$datos->estadoCivil,$datos->calle,$datos->numerocalle,$datos->email,$datos->imagen,$datos->cuil,$datos->tipoent,$datos->resumen,$datos->urlEmpresa,$datos->pass,$datos->idprovincia,$datos->idlocalidad);

    $DeptoAlumnos = new DeptoAlumnosController();
    $DeptoAlumnos->Guardar($DeptoAlumnos);
 ?>