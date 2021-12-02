<?php
//incluyendo archivos
include_once('../Model/ProfesorModel.php');
include_once('../Clases/Persona.php');
include_once('../Controller/ProfesorController.php');
include_once('../Clases/Profesor.php');

//expresiones regulares
$exp_nombre= '/^[a-zA-ZÀ-ÿ\s]{3,50}$/'; // Letras y espacios, pueden llevar acentos.
$exp_apellido='/^[a-zA-ZÀ-ÿ\s]{3,50}$/'; // Letras y espacios, pueden llevar acentos.
$exp_dni='/^[0-9]{8,8}$/';
$exp_nacionalidad= '/^[a-zA-ZÀ-ÿ\s]{3,50}$/'; 
$exp_localidad='/^[a-zA-ZÀ-ÿ\s]{3,40}$/'; // Letras y espacios, pueden llevar acentos.
$exp_provincia='/^[a-zA-ZÀ-ÿ\s]{3,40}$/';
$exp_barrio='/^[a-zA-ZÀ-ÿ\s]{3,40}$/'; // Letras y espacios, pueden llevar acentos.
$exp_nombrecalle='/^[a-zA-ZÀ-ÿ\s]{3,40}$/'; // Letras y espacios, pueden llevar acentos.
$exp_numerocalle='/^[0-9]{1,10}$/';
$exp_pisodepto='/^(piso|depto)$/i';
$exp_email='/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/';
$exp_contrasenia='/^.{12,25}$/';// 12 a 25 digitos.
$exp_telefono='/^[0-9]{10,10}$/';

//arrays de errores
$arrResult=[];
$arrErrores=[];

$valid=true;

//validaciones
    if(isset($_POST['nombre'])){
        if(preg_match($exp_nombre,$_POST['nombre'])){
            $nombre = $_POST['nombre'];    
        }else{
            $arrErrores[]=['campo'=> 'nombre', 'descripcion' => 'Por favor, revise el nombre ingresado.'];
            $valid=false;
        }     
    }else{
        $valid=false;
        $arrErrores[]=['campo'=> 'nombre', 'descripcion' => 'Ingrese un valor.'];
    }

    if(isset($_POST['apellido'])){
        if(preg_match($exp_apellido,$_POST['apellido'])){
            $apellido = $_POST['apellido'];    
        }else{
            $arrErrores[]=['campo'=> 'apellido', 'descripcion' => 'Por favor, revise el apellido ingresado.'];
            $valid=false;
        }     
    }else{
        $valid=false;
        $arrErrores[]=['campo'=> 'apellido', 'descripcion' => 'Ingrese un valor.'];
    }

    if(isset($_POST['dni'])){
        if(preg_match($exp_dni,$_POST['dni'])){
            $dni = $_POST['dni'];   
        }else{
            $arrErrores[]=['campo'=> 'dni', 'descripcion' => 'Por favor, revise el DNI ingresado.'];
            $valid=false;
        }     
    }else{
        $valid=false;
        $arrErrores[]=['campo'=> 'dni', 'descripcion' => 'Ingrese un valor.'];
    }

    if(isset($_POST['nacionalidad'])){
        if(preg_match($exp_nacionalidad,$_POST['nacionalidad'])){
            $nacionalidad= $_POST['nacionalidad'];  
        }else{
            $arrErrores[]=['campo'=> 'nacionalidad', 'descripcion' => 'Por favor, revise la nacionalidad ingresada.'];
            $valid=false;
        }     
    }else{
        $valid=false;
        $arrErrores[]=['campo'=> 'nacionalidad', 'descripcion' => 'Ingrese un valor.'];
    }

    if(isset($_POST['estadoCivil'])){
        $estadoCivil = $_POST['estadoCivil'];     
    }else{
        $valid=false;
        $arrErrores[]=['campo'=> 'estadoCivil', 'descripcion' => 'Ingrese un valor.'];
    }

    if(isset($_POST['fecha_nac'])){
            $fecNac = $_POST['fecha_nac'];   
    }else{
        $valid=false;
        $arrErrores[]=['campo'=> 'fecha_nac', 'descripcion' => 'Ingrese un valor.'];
    }

    if(isset($_POST['provincia'])){
        $provincia= $_POST['provincia'];    
    }else{
        $valid=false;
        $arrErrores[]=['campo'=> 'provincia', 'descripcion' => 'Ingrese un valor.'];
    }


    if(isset($_POST['localidad'])){
        if(preg_match($exp_localidad,$_POST['localidad'])){
            $localidad= $_POST['localidad'];
        }else{
            $arrErrores[]=['campo'=> 'localidad', 'descripcion' => 'Por favor, revise la localidad ingresada.'];
            $valid=false;
        }     
    }else{
        $valid=false;
        $arrErrores[]=['campo'=> 'localidad', 'descripcion' => 'Ingrese un valor.'];
    }

    if(isset($_POST['nomcalle'])){
        if(preg_match($exp_nombrecalle,$_POST['nomcalle'])){
            $calle= $_POST['nomcalle'];
        }else{
            $arrErrores[]=['campo'=> 'nomcalle', 'descripcion' => 'Por favor, revise el nombre de la calle ingresado.'];
            $valid=false;
        }     
    }else{
        $valid=false;
        $arrErrores[]=['campo'=> 'nomcalle', 'descripcion' => 'Ingrese un valor.'];
    }

    if(isset($_POST['numcalle'])){
        if(preg_match($exp_numerocalle,$_POST['numcalle'])){
            $numeroCalle= $_POST['numcalle'];
        }else{
            $arrErrores[]=['campo'=> 'numcalle', 'descripcion' => 'Por favor, revise el numero de la calle ingresado.'];
            $valid=false;
        }     
    }else{
        $valid=false;
        $arrErrores[]=['campo'=> 'numcalle', 'descripcion' => 'Ingrese un valor.'];
    }

    if(isset($_POST['email'])){
        if(preg_match($exp_email,$_POST['email'])){
            $email= $_POST['email'];
        }else{
            $arrErrores[]=['campo'=> 'email', 'descripcion' => 'Por favor, revise el email ingresado.'];
            $valid=false;
        }     
    }else{
        $valid=false;
        $arrErrores[]=['campo'=> 'email', 'descripcion' => 'Ingrese un valor.'];
    }

    if(isset($_POST['telefono'])){
        if(preg_match($exp_telefono,$_POST['telefono'])){
            $telefono= $_POST['telefono'];
        }else{
            $arrErrores[]=['campo'=> 'telefono', 'descripcion' => 'Por favor, revise el telefono ingresado.'];
            $valid=false;
        }     
    }else{
        $valid=false;
        $arrErrores[]=['campo'=> 'telefono', 'descripcion' => 'Ingrese un valor.'];
    }

  

    if(isset($_POST['contrasenia'])){
        if(preg_match($exp_contrasenia,$_POST['contrasenia'])){
            $pass= sha1($_POST['contrasenia']);
        }else{
            $arrErrores[]=['campo'=> 'contrasenia', 'descripcion' => 'Por favor, revise la contrasenia ingresada.'];
            $valid=false;
        }     
    }else{
        $valid=false;
        $arrErrores[]=['campo'=> 'contrasenia', 'descripcion' => 'Ingrese un valor.'];
    }
    
    $idprovincia="";
    $idLocalidad="";
    $imgPerfil="rutaimagen";

    //si no hay errores de validacion creo objeto profesor
    if($valid==true){

        $profesor = new Profesor($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$provincia,$localidad,$calle,$numeroCalle,$email,$imgPerfil,$pass,$idprovincia,$idLocalidad);
        $profesorController = new ProfesorController();
        $respuesta=$profesorController->Guardar($profesor);

        $arrResult['resultado']='OK';


        
    }else{
        $arrResult['resultado']='ERROR';
        $arrResult['errores']=$arrErrores;
    }
    echo json_encode($arrResult);
 ?>