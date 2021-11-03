<?php
    require_once('ConexionDB.php');
    class UsuarioModel extends ConexionDB
    {
        public function Listar()
        {
            $this->query = "SELECT U.IdUsuario, U.Nombre, U.Apellido,U.DNI, U.Email
                            FROM Usuario U";
            $this->obtenerRows();
            return $this->rows;
            
        }

        public function Guardar(Usuario $usr)
        {
            $this->query="INSERT INTO Usuario(IdUsuario,Nombre, Apellido,DNI,Email,FechaNacimiento,FotoPerfil)
            VALUES(:idUsr,:nombre,:apellido,:dni,:email,:fechaNac,:fotoPrf)";
            $this->ejecutar( array(
                ':idUsr' => $usr->getIdUsuario(),
                ':nombre' => $usr->getNombre(),
                ':apellido' => $usr->getApellido(),
                ':dni' => $usr->getDNI(),
                ':email' => $usr->getEmail(),
                ':fechaNac' => $usr->getFechaNacimiento(),
                ':fotoPrf' => $usr->getImagenPerfil()
            ));
            return $this->ultimoId();
        }

    //     public function ObtenerId()
    //     {
    //         $this->query = "SELECT MAX(IdReclutador) From Reclutador";
    //         $this->$recutador;
    //     }
    }
?>