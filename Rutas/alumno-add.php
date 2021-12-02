<?php
/*este archivo  recibe el arreglo con los datos del formulario alumno y los envia a la BD*/
include_once('../Model/AlumnoModel.php');
include_once('../Clases/Alumno.php');
if(isset($_POST['nombre'])){
    $foto=  $_FILES['imagen'];
    $nombre = $_POST['nombre'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $nacionalidad= $_POST['nacionalidad'];
    $estadoCivil = $_POST['estadoCivil'];
    $nacimiento = $_POST['nacimiento'];
    $provincia= $_POST['provincia'];
    $localidad= $_POST['localidad'];
    $calle= $_POST['calle'];
    $numero= $_POST['numero'];
    $email= $_POST['email'];
    $telefono= $_POST['numeroTelefono'];
    $preferencia = $_POST['preferencia'];
    
    if($foto["type"] == "image/jpg" or $foto["type"] == "image/jpeg"){
        $nom_encriptado = $foto["name"];
        $ruta = "../img/".$nom_encriptado;
        move_uploaded_file($foto["tmp_name"], $ruta);
    }
}
    //Instancio un objeto de tipo alumno  con los datos que recibi del formulario */
    $alumno = new Alumno($nombre,$apellido,$dni,$nacionalidad,$nacimiento,$telefono,$estadoCivil,$provincia,$localidad,$calle,$numero, $email,$nom_encriptado,$preferencia);
    //Instancio un objeto de tipo Alumnomodel para usar su funcion de guardar en la bd */
    $alumnoModel = new AlumnoModel();
    $resultado = $alumnoModel->guardar($alumno);
    $alumnoModel->GuardarRol();
    $alumnoModel->GuardarPreferencia();
   
    

?>