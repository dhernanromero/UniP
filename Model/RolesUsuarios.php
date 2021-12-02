<?php
 require_once ("C:/xampp/htdocs/Unip/Model/ConexionDB.php");
class RolesUsuariosModel extends ConexionDB
{
    public function Guardar($idUsuario,$idRol)
    {
        try
        {
            $this->query="INSERT INTO rolespersona(IdTipoUsuario,IdUsuario)
            VALUES(:idrol,:idusuario)";
            $this->ejecutar(array(
                ':idrol' => $idRol,
                ':idusuario' =>$idUsuario
            ));
        }
        catch(Exception $e)
        {
            $this->estado = "ERROR INSERTAR EN LA TABLA: ".$e->getMessage();
        }
    }
}
?>