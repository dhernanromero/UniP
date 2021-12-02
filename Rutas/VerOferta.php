<?php
require_once("../dirs.php");
require_once (CLASES_PATH."OfertaLaboral.php");
require_once (CONTROLLER_PATH."OfertaLaboralController.php");

// echo("entré a la ruta");
// $datos = json_decode( file_get_contents("php://input"));
session_start();
$datoId = $_SESSION['IdPersona'];
$id = $_GET["Id"];
$ofertaController = new OfertalaboralController();
$detalleOferta = $ofertaController->ListarOfertaLaboral($id);

// if($perfilReclutador == null)
// {
    
// }

require_once (VISTAS_PATH."DetalleOfertaLaboral.php");
?>