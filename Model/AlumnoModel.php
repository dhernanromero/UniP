<?php
require_once('ConexionFacu.php');
class AlumnoModel 
{
    private $idAlumno;
    private $idRol;
    private $idPreferencia;
    public function guardar( $usr)
    {
        try {
            /*me conecto a la BD*/
            $objeto = new ConexionFacu();
            $conexion = $objeto->Conectar();
            /*query para insertar datos en tabla persona*/
            $sentenciaSQL = $conexion->prepare("INSERT INTO persona (Nombre, Apellido, DNI, Email, FechaNacimiento, FotoPerfil, Nacionalidad, Telefono, IdEstadoCivil, NombreCalle, NumeroCalle, Password, IdProvincia, IdLocalidad)
            VALUES (:Nombre, :Apellido, :DNI,:Email, :FechaNacimiento, :FotoPerfil, :Nacionalidad, :Telefono, :IdEstadoCivil,  :NombreCalle, :NumeroCalle, NULL,:IdProvincia, :IdLocalidad);");
            /* valores para los parametros */
            $sentenciaSQL->bindParam('Nombre', $usr->getNombre());
            $sentenciaSQL->bindParam('Apellido', $usr->getApellido());
            $sentenciaSQL->bindParam('DNI', $usr->getDNI());
            $sentenciaSQL->bindParam('Email', $usr->getEmail());
            $sentenciaSQL->bindParam('FechaNacimiento', $usr->getFechaNacimiento());
            $sentenciaSQL->bindParam('FotoPerfil', $usr->getImagenPerfil());
            $sentenciaSQL->bindParam('Nacionalidad', $usr->getNacionalidad());
            $sentenciaSQL->bindParam('Telefono', $usr->getTelefono());
            $sentenciaSQL->bindParam('IdEstadoCivil', $usr->getEstadoCivil());
            $sentenciaSQL->bindParam('NombreCalle', $usr->getCalle());
            $sentenciaSQL->bindParam('NumeroCalle', $usr->getNumeroCalle());
            $sentenciaSQL->bindParam('IdProvincia', $usr->getProvincia());
            $sentenciaSQL->bindParam('IdLocalidad', $usr->getLocalidad());
            $sentenciaSQL->execute();
            $this->idAlumno =  $conexion->lastInsertId();
            $this->idRol = $usr->getRol();
            $this->idPreferencia = $usr->getPreferencia();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    public function GuardarRol()
    {
        try {
            /*me conecto a la BD*/
            $objeto = new ConexionFacu();
            $conexion = $objeto->Conectar();
            /*query para insertar datos en tabla rolespersona*/
            $sentenciaSQL = $conexion->prepare("INSERT INTO rolespersona (IdUsuario, IdTipoUsuario) VALUES (:IdUsuario, :IdTipo);");
            /* valores para los parametros */
            $sentenciaSQL->bindParam('IdUsuario', $this->idAlumno);
            $sentenciaSQL->bindParam('IdTipo', $this->idRol);
            $sentenciaSQL->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }


    public function GuardarPreferencia()
    {
        try {
            /*me conecto a la BD*/
            $objeto = new ConexionFacu();
            $conexion = $objeto->Conectar();
            /*query para insertar datos en tabla alumno_preferencia*/
            $sentenciaSQL = $conexion->prepare("INSERT INTO `alumno_preferencias` (`IdAlumno`, `IdPreferencia`) VALUES ( :IdAlumno, :IdPreferencia);");
            /* valores para los parametros */
            $sentenciaSQL->bindParam('IdAlumno', $this->idAlumno);
            $sentenciaSQL->bindParam('IdPreferencia', $this->idPreferencia);
            $sentenciaSQL->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function datosAlumno($email)
    {
        try {
            /*me conecto a la BD*/
            $objeto = new ConexionFacu();
            $conexion = $objeto->Conectar();
            /*query para buscar alumno por email*/
            $sentenciaSQL = $conexion->prepare("SELECT * FROM persona WHERE Email = '$email'");
            $sentenciaSQL->execute();
           /* $json = array();
            while ($row = $sentenciaSQL->fetch(PDO::FETCH_BOTH)) {
                $json[] = array(
                    'nombre' => $row['Nombre'],
                    'apellido' => $row['Apellido'],
                    'dni' => $row['DNI'],
                    'email' => $row['Email'],
                    'fechaNacimiento' => $row['FechaNacimiento'],
                    'fotoPerfil' => $row['FotoPerfil'],
                    'nacionalidad' => $row['Nacionalidad'],
                    'telefono' => $row['Telefono'],
                    'idEstadoCivil' => $row['IdEstadoCivil'],
                    'nombreCalle' => $row['NombreCalle'],
                    'numeroCalle' => $row['NumeroCalle'],
                    'idProvincia' => $row['IdProvincia'],
                    'idLocalidad' => $row['IdLocalidad'],
                );
            }
            $jsonstring =  json_encode($json);*/
            return $sentenciaSQL;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    public function existeAlumno($email)
    {
        try {
            /*me conecto a la BD*/
            $objeto = new ConexionFacu();
            $conexion = $objeto->Conectar();
            /*query para buscar alumno por email*/
            $stmt = $conexion->prepare("SELECT * FROM persona WHERE Email = '$email'");
            $stmt->execute();
            $rows = $stmt->fetch(PDO::FETCH_BOTH);
            if ($rows > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }


    public function actualizarDatos( $email,$nombre,$apellido,$dni,$nacionalidad,$fecha,$foto,$calle,$numero,$telefono )
    {

        try{
            /*me conecto a la BD*/
            $objeto = new ConexionFacu();
            $conexion = $objeto->Conectar();
            /*query para buscar alumno por email*/
            $sentenciaSQL = $conexion->prepare("UPDATE Persona SET Nombre='$nombre', Apellido='$apellido', Dni='$dni',FechaNacimiento='$fecha', FotoPerfil='$foto', Nacionalidad='$nacionalidad',Telefono='$telefono',NombreCalle='$calle',NumeroCalle='$numero' WHERE Email='$email' ");
            $sentenciaSQL->execute();
            /*query para buscar alumno por email*/
            $sentenciaSQL = $conexion->prepare("SELECT * FROM persona WHERE Email = '$email'");
            $sentenciaSQL->execute();
            return $sentenciaSQL;
        }catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
    }

}
