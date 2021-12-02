<?php
require_once('Persona.php');
class Reclutador extends Persona
{
    private $Cuil;
    private $IdTipoEnte;
    private $ResumenEmpresa;
    private $UrlEmpresa;
    private $Estado;
    private $IdRol;
    private $Password;
    private $IdProvincia;
    private $IdLocalidad;

    public function __construct($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$calle,$numeroCalle,$email,$imgPerfil,$cuil,$tipoent,$resum,$url,$pass,$idprovincia,$idlocalidad)
    {   
        parent::__construct($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$idprovincia,$idlocalidad,$calle,$numeroCalle,$email,$imgPerfil);
        $this->Cuil = $cuil;
        $this->IdTipoEnte = $tipoent;
        $this->ResumenEmpresa = $resum;
        $this->UrlEmpresa = $url;
        $this->Estado = "Pendiente";
        $this->IdRol = 4;   
        $this->Password = $pass;
    }

    // public function setIdReclutador($IdRecl)
    // {
    //     $this->IdReclutador = $IdRecl;
    // }

    // public function getIdReclutador()
    // {
    //     return $this->IdReclutador;
    // }

    public function setCuil($cuil)
    {
        $this->Cuil = $cuil;
    }

    public function getCuil()
    {
        return $this->Cuil;
    }

    public function setIdTipoEnte($tipoent)
    {
        $this->IdReclutador = $tipoent;
    }

    public function getIdTipoEnte()
    {
        return $this->IdTipoEnte;
    }

    public function setResumenEmpresa($resum)
    {
        $this->ResumenEmpresa = $resum;
    }

    public function getResumenEmpresa()
    {
        return $this->ResumenEmpresa;
    }

    public function setUrlEmpresa($url)
    {
        $this->UrlEmpresa = $url;
    }

    public function getUrlEmpresa()
    {
        return $this->UrlEmpresa;
    }

    public function setEstado($est)
    {
        $this->Estado = $est;
    }

    public function getEstado()
    {
        return $this->Estado;
    }
    
    public function getRol()
    {
        return $this->IdRol;
    }

    public function setIdProvincia($idProv)
    {
        $this->IdProvincia = $idProv;
    }
    
    public function getIdProvincia()
    {
        return $this->IdProvincia; 
    }

    public function setIdLocalidad($idLoc)
    {
        $this->IdLocalidad = $idLoc;
    }
    
    public function getIdLocalidad()
    {
        return $this->IdLocalidad; 
    }

    public function setPassword($pass)
    {
        $this->Password = $pass;
    }
    
    public function getPassword()
    {
        return $this->Password; 
    }

}

?>