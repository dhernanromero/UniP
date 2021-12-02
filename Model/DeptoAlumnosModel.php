<?php
    require_once("../dirs.php");
    require_once (MODEL_PATH."ConexionDB.php");

    class ProfesorModel extends ConexionDB
    {
        // public function __construct()
        // {
        //     parent::__construct();
        // }

        public function Listar()
        {
            $this->query = "SELECT A.IdAdministrador,U.IdUsuario, U.Nombre, U.Apellido
                            FROM Administradores P
                            INNER JOIN Usuario U ON U.IdUsuario = A.IdUsuario";
            $this->obtenerRows(array(
                ':inscripcionId' => $this->inscripcionId
            ));
            return $this->rows;
        }

        public function LitarProfesorPorId($id)
        {
            $this->query ="SELECT IdPersona, Nombre, Apellida, DNI, Email, FechaNacimiento,FotoPerfil,Nacionalidad,Telefono,IdEstadoCivil, NombreCalle,NumeroCalle,IdProvincia,IdLocal
            From Persona
            WHERE IdPersona = :IdPersona";
            return $this->obtenerRows(array(
                ':IdPersona'=> $id
            ));
        }

        public function Guardar(DeptoAlumnos $datos)
        {
            print_r($datos);
            print_r($this);
            echo($datos->getNombre()."NombreModel");
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
                
                echo($this->estado);
                $datos->setIdUsuario( $this->ultimoId());
                echo(strval($this->ultimoId()));
                echo($datos->getNombre());
                echo($this->estado);
                echo('Ok');
            }
            catch(Exception $e)
            {
                $this->estado = "ERROR INSERTAR ADMINISTRADOR: " . $e->getMessage();
            }
        }
    }

?>