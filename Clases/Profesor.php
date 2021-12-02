<?php
require_once('Persona.php');
class Profesor extends Persona
{
    private $password;
    private $IdRol;

    public function __construct($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$provincia,$localidad,$calle,$numeroCalle,$email,$imgPerfil,$pass,$idprovincia,$idLocalidad)
    {   
        parent::__construct($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$provincia,$localidad,$calle,$numeroCalle,$email,$imgPerfil);  
        $this->Password = $pass;
        $this->IdRol = 3;
    }

    public function setPassword($pass)
    {
        $this->Password = $pass;
    }
    
    public function getPassword()
    {
        return $this->Password; 
    }

    
    public function getRol()
    {
        return $this->IdRol;
    }
}

?>