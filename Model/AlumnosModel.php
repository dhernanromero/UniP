<?php
    // require_once("../dirs.php");
    // require_once(MODEL_PATH."ConexionDB.php");
    require_once("ConexionDB.php");
    class AlumnosModel extends ConexionDB
    {
        public function ListarAlumnosResumido()
        {
            try
            {
                $this->query = "SELECT p.IdPersona as IdPersona, Nombre, Apellido, DNI, Email, FotoPerfil,r.IdRol as IdRol,r.Descripcion as Rol FROM persona p
                INNER JOIN rolespersona rp ON p.IdPersona = rp.IdUsuario
                INNER JOIN roles r ON r.IdRol = rp.IdTipoUsuario
                where r.IdRol = 3";
                $this->obtenerRows();
                return $this->rows;
            }
            catch (Exception $ex){
                echo $ex->getMessage();
            }
        }

        public function ConsultarPerfilAlumno($idAlumno)
        {
            $this->query = "SELECT * FROM persona WHERE IdPersona = :idAlumno";
            $this->obtenerRows(array(
                ':idAlumno'=>$idAlumno  
            ));
            return $this->rows;
        }
    }
?>




