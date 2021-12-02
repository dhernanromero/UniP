<?php
require_once ("C:/xampp/htdocs/Unip/Controller/UsuarioController.php");



$usuariocontroller = new UsuarioController();

$param = $_POST["param"];
switch ($param) {
  case 'login':
    $email = $_POST["email"];
    $password = $_POST["password"];
    $usuario = $usuariocontroller->LogearUsuario($email,$password);
    if($usuario == 0){
      echo json_encode(array("error" => 1, "mensaje" => "No se encontro usuario","usuario" => null));
    }else{
      echo json_encode(array("error" => 0, "mensaje" => "Usuario encontrado","usuario" => $usuario));
    }
    break;

  default:
    # code...
    break;
}














/* 
if($usuario != "" || $usuario != null){
  session_start();
  $_SESSION["id"] = $usuario["tipodeusuario"];
  session_destroy();
}
echo($usuario); */
// print_r($listaReclutadores);

// require_once (VISTAS_PATH.".php");
?>