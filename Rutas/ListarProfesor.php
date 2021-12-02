<?php
require_once("../dirs.php");
require_once (CLASES_PATH."Profesor.php");
require_once (CONTROLLER_PATH."ProfesorController.php");



$profesorcontroller = new ProfesorController();
$listaProfesores = $profesorcontroller->Listar();

require_once (VISTAS_PATH."ABMSolicitudProfesores.php");
?>