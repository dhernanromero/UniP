<?php
    require_once("../dirs.php");
    require_once(MODEL_PATH."ConexionDB.php");

    class EmpresaModel extends ConexionDB
    {
        public function Listar()
        {
            $this ->query ="SELECT IdEmpresa,Nombre,Cuit,Url,Resumen FROM empresa";
            $this->obtenerRows();
            return $this->rows;
        }

        public function Guardar(Empresa $datos)
        {
            try
            {
                $this->query = "INSERT INTO empresa (Nombre,Cuit,Url,Resumen)
                VALUES(:nombreEmpresa,:cuit,:url,:resumen);";
                $this->ejecutar(array(
                    ':nombreEmpresa' => $datos->getNombre(),
                    ':cuit' => $datos->getCuit(),
                    ':url' => $datos->getUrl(),
                    ':resumen' => $datos->getResumen()
                ));
            }
            catch(Exception $e)
            {

            }
        }
    }
?>