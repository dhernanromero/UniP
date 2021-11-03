<?php
require_once("../Model/ReclutadorModel.php");
require_once("../Model/UsuarioModel.php");
//require_once("Clases/Usuario.php");
//require_once("Clases/Reclutador.php");
class ReclutadorController
{
    private $reclutadorModel;
    private $usuarioModel;
    //Metodo para obtener todos los registros

    function __construct()
    {
        $this->reclutadorModel = new ReclutadorModel();
        $this->usuarioModel = new UsuarioModel();
    }
    public function Listar()
    {
       $datos=$this->reclutadorModel->Listar();

       return $datos;
    }

    //Metodo para guardar datos 
    public function Guardar()
    {
        //Obtengo los datos del jason
        $datos = json_decode( file_get_contents("php://input"));

        $usuario = new Usuario($datos->Nombre,$datos->apellidos,$datos->dni,$datos->fechaNac,$datos->email,$datos->imgPerfil);
        
        //Inserto usuario
        $idUsr = $this->usuarioModel->Guardar($usuario);
        $reclutador = new ReclutadorModel($idUsr,$datos->cuil,$datos->urlReclutador,$datos->tipoente,$datos->resumenEmpresa,$datos->estado);
        //obgtengo pk de usuario
        //uso la pk para el reclutador
        //inserto reclutador
        //agregar validaciones

        $datos = $this->reclutadorModel->Guardar($reclutador);

        return $datos;

    }

}

    if ( isset($_GET["method"]) ) {

        $action = $_GET["method"];
        echo($action);
        $reclutadorController = new ReclutadorController();

        switch ( $action ) {
            case 'listar':
                $reclutadorController->Listar();
                break;
            case 'guardar':
                $reclutadorController->Guardar();
                break;
        }
    }

?>