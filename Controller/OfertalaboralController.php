<?php
require_once("../dirs.php");
require_once (CLASES_PATH."Persona.php");
require_once (MODEL_PATH."OfertaLaboralModel.php");


class OfertalaboralController
{
    private $OfertaModel;


    function __construct(){
            $this->OfertaModel= new OfertaLaboralModel();
        }
    
    // private $OfertaModel = new ReclutadorModel();
    
    //Metodo para obtener todos los registros
    public function Listar()
    {
       $datos=$this->OfertaModel->Listar();

       return $datos;
    }

    public function ListarOfertaLaboral($idoferta) /*viejo nombre del metodo Listar Perfil*/
    {
        $datos = $this->OfertaModel->ListarOferta($idoferta);
        if($datos == null)
        {
            echo("no data");
        }
        return $datos;
    }
    
    //Metodo para guardar datos 
    public function Guardar(OfertaLaboral $ofertaLaboral)
    {
        // $recModel = new ReclutadorModel();
        
        try {

            $this->OfertaModel->Guardar($ofertaLaboral);
            // echo($idUsr);
            // echo($ofertaLaboral->getRol());
            // comentado Ruth $this->rolesUsuariosModel->Guardar($idOferta,$ofertaLaboral->getRol());//
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

}
?>