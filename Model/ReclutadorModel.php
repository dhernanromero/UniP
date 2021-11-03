<?php
    class ReclutadorModel extends ConexionDB
    {
        public function Listar(){
            $this->query = "SELECT R.IdReclutador,U.IdUsuario, U.Nombre, U.Apellido,U.Cuil, R.UrlReclutador
                            FROM Reclutadores R
                            INNER JOIN Usuario U ON U.IdUsuario = R.IdUsuario";
            $this->obtenerRows(array(
                ':inscripcionId' => $this->inscripcionId
            ));
            return $this->rows;
        }

        public function Guardar(){
            $this->query = "INSERT INTO Recultador(IdReclutador, IdUsuario, URL)
                            VALUES(:nombre, :url)";
            $this->ejecutar( array(
                    ':nombre' => $this->nombre,
                    ':url' => $this->url
                ));
            $this->documentoId = $this->ultimoId();
        }
    }

?>