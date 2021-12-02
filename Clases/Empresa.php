<?php
class Empresa
{
    private $IdEmpresa;
    private $Nombre;
    private $Cuit;
    private $Url;
    private $Resumen;

    public function __construct($nombre,$cuit,$url,$resumen)
    {
        $this->Nombre = $nombre;
        $this->Cuit = $cuit;
        $this->Url = $url;
        $this->Resumen = $resumen;
    }

    public function setIdEmpresa($idEmpresa)
    {
        $this->IdEmpresa=$idEmpresa;
    }
    public function getIdEmpresa()
    {
        return $this->IdEmpresa;
    }

    public function setNombre($nombre)
    {
        $this->Nombre=$nombre;
    }
    public function getNombre()
    {
        return $this->Nombre;
    }

    public function setCuit($cuit)
    {
        $this->Cuit=$cuit;
    }
    public function getCuit()
    {
        return $this->Cuit;
    }
    public function setUrl($url)
    {
        $this->Url = $url;
    }
    public function getUrl()
    {
        return $this->Url;
    }
    public function setResumen($resumen)
    {
        $this->Resumen = $resumen;
    }
    public function getResumen()
    {
        return $this->Resumen;
    }
}
?>