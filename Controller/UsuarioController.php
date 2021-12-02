<?php
    require_once("C:/xampp/htdocs/Unip/Model/UsuarioModel.php");
    require_once("C:/xampp/htdocs/Unip/Clases/Persona.php"); 
    class UsuarioController 
    {
        function __construct(){
            $this->usuarioModel = new UsuarioModel();
        }
        public function Listar()
        {
            $datos = $this->usuarioModel->Listar();
            return $datos; 
        }

        public function LogearUsuario($correo,$pass)
        {
            
            $datos = $this->usuarioModel->BuscarUsuario($correo,$pass);
            
            if(count($datos)==0){
                return 0;
            }else{
                session_start();
                $_SESSION["Email"] = $datos[0]["Email"];
                $_SESSION["IdRol"] = $datos[0]["IdRol"];
                $_SESSION["IdPersona"] = $datos[0]["IdPersona"];
                return $datos[0];
                
            }
        }
    }
?>