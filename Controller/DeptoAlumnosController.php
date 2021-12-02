<?php
require_once("../dirs.php");
require_once (CLASES_PATH."Persona.php");
require_once (MODEL_PATH."DeptoAlumnosModel.php");
require_once (MODEL_PATH."RolesUsuarios.php");

class DeptoAlumnosController
{
    private $DeptoAlumnosModel;
    private $rolesUsuariosModel;

    function __construct(){
        $this->DeptoAlumnosModel= new DeptoAlumnosModel();
        $this->rolesUsuariosModel = new RolesUsuariosModel();

    }

    public function Listar()
    {
       $datos=$this->DeptoAlumnosModel->Listar();

       return $datos;
    }

    public function ModificarEstado($id,$idestado)
    {
        $this->DeptoAlumnosModel->ModificarEstado($id,$idestado);
        if($this->DeptoAlumnosModel->estado=='Conectado')
        {
            echo(json_encode(array('Estado'=> 'Ok' )));
            // echo('Ok');
        }
        else
        {
            echo(json_encode(array('Estado'=> 'Error'.$this->DeptoAlumnosModel->estado)));
            
        }
    }
    //Metodo para guardar datos 
    public function Guardar(DeptoAlumnos $DeptoAlumnos)
    {
        $DeptoAlumnos = new DeptoAlumnosModel();
        try {
        
            $idUsr = $this->DeptoAlumnos->Guardar($DeptoAlumnos);
            echo($idUsr);
            echo($DeptoAlumnos->getRol());
            $this->rolesUsuariosModel->Guardar($idUsr,$DeptoAlumnos->getRol());
            print_r($this->rolesUsuariosModel);

            return 'OK';
        } 
        catch (Exception $e) {
            $e->getMessage();
        }
    }

}
?>