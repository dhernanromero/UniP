<?php
    
  /*   require_once("../dirs.php"); */
    require_once ("ConexionDB.php");

    class ProfesorModel extends ConexionDB
    {
        public function Listar()
        {
            $this->query = "SELECT IdPersona,Nombre, Apellido, DNI, Email, FechaNacimiento, FotoPerfil, Nacionalidad, Telefono, IdEstadoCivil, NombreCalle, NumeroCalle, Password, IdProvincia, IdLocalidad,P.IdEstado, E.Descripcion AS Estado
            FROM Persona P
            INNER JOIN estadoprofesor E on P.IdEstado = E.IdEstado";
           
            $this->obtenerRows();
            return $this->rows;
        }

        public function LitarProfesorPorId($id)
        {
            $this->query ="SELECT IdPersona, Nombre, Apellido, DNI, Email, FechaNacimiento,FotoPerfil,Nacionalidad,Telefono,IdEstadoCivil, NombreCalle,NumeroCalle,IdProvincia,IdLocalidad
            From Persona
            WHERE IdPersona = :IdPersona";
            return $this->obtenerRows(array(
                ':IdPersona'=> intval($id)
            ));
        }

        public function ModificarEstado($id,$idestado)
        {
            $this->query = "UPDATE Persona
                            SET IdEstado = :idestado
                            WHERE IdPersona = :id";
            $this->ejecutar(array(
                                ':idestado' => $idestado,
                                ':id' => $id 
            ));
        }
        public function Guardar(Profesor $datos)
        {
            try
            {
                $this->query = "INSERT INTO persona (Nombre, Apellido, DNI, Email, FechaNacimiento, FotoPerfil, Nacionalidad, Telefono, IdEstadoCivil, NombreCalle, NumeroCalle, Password, IdProvincia, IdLocalidad)
                VALUES (:nombre, :apellido,:dni,:email,:fechaNacimiento,:fotoPerfil, :nacionalidad, :telefono, :idEstadoCivil, :nombreCalle, :numeroCalle, :pass,:idProvincia, :idLocalidad);";
                $this->ejecutar( array(
                        ':nombre' => $datos->getNombre(),
                        ':apellido' => $datos->getApellido(),
                        ':dni' => $datos->getDNI(),
                        ':email' => $datos->getEmail(),
                        ':fechaNacimiento' => $datos->getFechaNacimiento(),
                        ':fotoPerfil' => $datos->getImagenPerfil(),
                        ':nacionalidad'=> $datos->getNacionalidad(),
                        ':telefono' => $datos->getTelefono(),
                        ':idEstadoCivil' => $datos->getEstadoCivil(),
                        ':nombreCalle'=> $datos->getCalle(),
                        ':numeroCalle'=> $datos->getNumeroCalle(),
                        ':pass' => $datos->getPassword(),
                        ':idProvincia' => $datos->getProvincia(),
                        ':idLocalidad' => $datos->getLocalidad()
                    ));
                return $this->ultimoId();
            }
            catch(Exception $e)
            {
                $this->estado = "ERROR INSERTAR PROFESOR: " . $e->getMessage();
            }
        }
    }

?>