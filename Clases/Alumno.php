<?php 
require_once('Persona.php');

class Alumno extends Persona{
    private $IdRol;
    private $Preferencia;
    private $Skills;

    public function __construct($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$idprovincia,$idlocalidad,$calle,$numeroCalle,$email,$imgPerfil,$preferencia)
    {   
        parent::__construct($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$idprovincia,$idlocalidad,$calle,$numeroCalle,$email,$imgPerfil);
        $this->IdRol = 3;
        $this->Preferencia = $preferencia;
    }


    public function getRol()
    {
        return $this->IdRol;
    }

    public function setPreferencia($preferencia)
    {
        $this->Preferencia = $preferencia;
    }

    public function getPreferencia()
    {
        return $this->Preferencia;
    }

    public function setSkills($skills)
    {
        $this->Skills = $skills;
    }

    public function getSkills(){
        return $this->Skills;
    }
}

?>