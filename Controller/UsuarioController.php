<?php
    require_once("Model/UsuarioModel.php");
    require_once("Clases/Usuario.php");
    class UsuarioController 
    {
        private $usuarioModel = new UsuarioModel();
        public function Listar()
        {
            $datos = $this->usuarioModel->Listar();
            return $datos; 
        }
    }
?>