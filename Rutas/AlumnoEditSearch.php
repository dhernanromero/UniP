<?php
require_once('../Model/AlumnoModel.php');
$nom_encriptado;
if(isset($_POST['email'],$_POST['opcion'])){
    $email= $_POST['email'];   
    $nombre = $_POST['Fnombre'];
    $apellido = $_POST['Fapellido'];
    $dni = $_POST['Fdni'];
    $nacionalidad= $_POST['Fnacionalidad'];
    $fecha = $_POST['Fdate'];
    $calle= $_POST['Fcalle'];
    $numero= $_POST['FnumeroCalle'];
    $telefono= $_POST['FnumeroTelefono'];
    $foto=  $_FILES['Fimagen'];
    $opcion=$_POST['opcion'];
    switch($opcion){
        case 2:
            if($foto["type"] == "image/jpg" or $foto["type"] == "image/jpeg"){
                $nom_encriptado = $foto["name"];
                $ruta = "../img/".$nom_encriptado;
                move_uploaded_file($foto["tmp_name"], $ruta);
            }
            $alumno = new AlumnoModel();
            $resultado= $alumno->actualizarDatos($email,$nombre,$apellido,$dni,$nacionalidad,$fecha,$nom_encriptado,$calle,$numero,$telefono);
            
            $datos =  $resultado->fetch(PDO::FETCH_ASSOC);
            $json[] = array(
                'nombre' => $datos['Nombre'],
                'apellido' => $datos['Apellido'],
                'dni' => $datos['DNI'],
                'nacionalidad' => $datos['Nacionalidad'],
                'fecha' => $datos['FechaNacimiento'],
                'foto' => $datos['FotoPerfil'],
                'calle' => $datos['NombreCalle'],
                'numeroCalle' => $datos['NumeroCalle'],
                'telefono' => $datos['Telefono'],
            );
            $jsonstring =  json_encode($json);
            echo $jsonstring;
    }
}
 ?>