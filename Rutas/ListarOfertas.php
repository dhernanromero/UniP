<?php
require_once("../dirs.php");
require_once (CLASES_PATH."Reclutador.php");
require_once (CONTROLLER_PATH."ReclutadorController.php");

session_start();
$datoId = $_SESSION['IdPersona'];

$reclutadorcontroller = new ReclutadorController();
$listaReclutadores = $reclutadorcontroller->ListarOfertas($datoId);

// print_r($listaReclutadores);

require_once (VISTAS_PATH."ReclutadorListarOfertas.php");
?>