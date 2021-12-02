<?php
require_once("../dirs.php");
require_once (CONTROLLER_PATH."ProfesorController.php");
    
$datos = json_decode( file_get_contents("php://input"));
$profesorController = new ProfesorController();
$profesorController->ModificarEstado($datos->idpersona,$datos->idestado);


?>