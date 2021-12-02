<?php
    require_once("ConexionDB.php");
    class UsuarioModel extends ConexionDB
    {
        public function Listar()
        {
            $this->query = "SELECT U.IdUsuario, U.Nombre, U.Apellido,U.DNI, U.Email
                            FROM Usuario U";
            $this->obtenerRows();
            return $this->rows;
            
        }

        public function Guardar(Persona $usr)
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

        public function BuscarUsuario($correo,$pass)
        {
            $this->query = "SELECT p.IdPersona as IdPersona, Nombre, Apellido, DNI, Email,r.IdRol as IdRol,r.Descripcion as Rol FROM persona p
            INNER JOIN rolespersona rp ON p.IdPersona = rp.IdUsuario
            INNER JOIN roles r ON r.IdRol = rp.IdTipoUsuario
            WHERE Email = :correo AND Password = :pass"; 
            
            $this->obtenerRows(array(
                ':correo' => $correo,
                // ':pass' => sha1($pass)
                ':pass' => $pass
            ));

            return $this->rows;
            
        }
    }
?>