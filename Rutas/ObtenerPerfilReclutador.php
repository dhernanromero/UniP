<?php
require_once("../dirs.php");
require_once (CLASES_PATH."Reclutador.php");
require_once (CONTROLLER_PATH."ReclutadorController.php");

// echo("entré a la ruta");
// $datos = json_decode( file_get_contents("php://input"));
session_start();
$datoId = $_SESSION['IdPersona'];

$reclutadorcontroller = new ReclutadorController();
$perfilReclutador = $reclutadorcontroller->ListarPerfil($datoId);

// if($perfilReclutador == null)
// {
    
// }

require_once (VISTAS_PATH."perfil-Reclutador.php");
?>