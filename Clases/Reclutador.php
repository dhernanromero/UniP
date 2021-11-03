<?php
require_once("Usuario.php");
class Reclutador extends Usuario
{
    private $IdReclutador;
    private $Cuil;
    private $IdTipoEnte;
    private $ResumenEmpresa;
    private $UrlEmpresa;
    private $Estado;

    public function __construct($IdRecl,$cuil,$tipoent,$resum,$url,$est)
    {   
        $this->IdReclutador = $IdRecl;
        $this->Cuil = $cuil;
        $this->IdTipoEnte = $tipoent;
        $this->ResumenEmpresa = $resum;
        $this->UrlEmpresa = $url;
        $this->Estado = $est;        
    }

    public function setIdReclutador($IdRecl)
    {
        $this->IdReclutador = $IdRecl;
    }

    public function getIdReclutador()
    {
        return $this->IdReclutador;
    }

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


}

?>