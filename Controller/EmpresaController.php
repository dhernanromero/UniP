<?php
require_once("../dirs.php");
require_once(CLASES_PATH."Empresa.php");
require_once(MODEL_PATH."EmpresaModel.php");

class EmpresaController
{
    private $empresaModel;

    function __construct()
    {
        $this->empresaModel = new EmpresaModel();
    }

    public function Listar()
    {
        $datos=$this->empresaModel->Listar();
        return $datos;
    }
}
?>