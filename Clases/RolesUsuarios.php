<?php
class RolesUsuarios{
    public $IdUsuario;
    public $IdRol;

    public function __construct($idusr,$idrol)
    {
        $this->IdUsuario = $idusr;
        $this->IdRol = $idrol;
        
    }
}

?>