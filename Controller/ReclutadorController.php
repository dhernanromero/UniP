<?php
require_once("Model/ReclutadorModel.php");
require_once("Model/UsuarioModel.php");
require_once("Clases/Usuario.php");
require_once("Clases/Reclutador.php");
class ReclutadorController
{
    private $reclutadorModel = new ReclutadorModel();
    private $usuarioModel = new UsuarioModel();
    //Metodo para obtener todos los registros
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
?>