<?php
require_once("../dirs.php");
require_once (CONTROLLER_PATH."ReclutadorController.php");
    
$datos = json_decode( file_get_contents("php://input"));

// print_r($datos);
$reclutadorController = new ReclutadorController();
$reclutadorController->ModificarEstado($datos->idpersona,$datos->idestado);


?>