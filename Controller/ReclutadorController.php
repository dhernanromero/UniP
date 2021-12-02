<?php
require_once("../dirs.php");
require_once (CLASES_PATH."Persona.php");
require_once (MODEL_PATH."ReclutadorModel.php");
require_once (MODEL_PATH."RolesUsuarios.php");

class ReclutadorController
{
    private $recModel;
    private $rolesUsuariosModel;

    function __construct(){
            $this->recModel= new ReclutadorModel();
            $this->rolesUsuariosModel = new RolesUsuariosModel();
        }
    
    // private $recModel = new ReclutadorModel();
    
    //Metodo para obtener todos los registros
    public function Listar()
    {
       $datos=$this->recModel->Listar();

       return $datos;
    }

    public function ListarPerfil($idreclutador)
    {
        $datos = $this->recModel->ListarPerfil($idreclutador);
        // if($datos == null)
        // {
            
        // }
        return $datos;
    }

    public function ModificarEstado($id,$idestado)
    {
        $this->recModel->ModificarEstado($id,$idestado);
        if($this->recModel->estado=='Conectado')
        {
            echo(json_encode(array('Estado'=> 'Ok' )));
            // echo('Ok');
        }
        else
        {
            echo(json_encode(array('Estado'=> 'Error'.$this->recModel->estado)));
            
        }
    }

    //Metodo para guardar datos 
    public function Guardar(Reclutador $reclutador)
    {
        
        // $recModel = new ReclutadorModel();
        
        try {
        
            $idUsr = $this->recModel->Guardar($reclutador);
            // echo($idUsr);
            // echo($reclutador->getRol());
            $this->rolesUsuariosModel->Guardar($idUsr,$reclutador->getRol());
            // print_r($this->rolesUsuariosModel);
            // $reclutador = new ReclutadorModel($idUsr,$datos->cuil,$datos->urlReclutador,$datos->tipoente,$datos->resumenEmpresa,$datos->estado);
            //obgtengo pk de usuario
            //uso la pk para el reclutador
            //inserto reclutador
            //agregar validaciones

            // $datos = $this->reclutadorModel->Guardar($reclutador);

            return 'OK';
        } 
        catch (Exception $e) {
            $e->getMessage();
        }

    }

    public function ListarOfertas($idReclutador)
    {
        $datos = $this->recModel->ListarOfertas($idReclutador);
        return $datos;
    }

}
?>