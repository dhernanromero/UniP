<?php
require_once("./dirs.php");
require_once(MODEL_PATH."AlumnosModel.php");

class AlumnoController
{
    private $alumnoModel;
    
    function __construct()
    {
        $this->alumnoModel = new AlumnosModel();
    }

    public function ListarAlumnosResumido()
    {
        $datos = $this->alumnoModel->ListarAlumnosResumido();

        return $datos;
    }

    public function ConsultarPerfilAlumno($idAlumno)
    {
        $datos = $this->alumnoModel->ConsultarPerfilAlumno($idAlumno);
        return $datos;
    }
}

?>