<?php

class Ofertalaboral 
{
    private $IdOferta;
    private $Titulo;
    // private $IdEmpresa;
    private $NombreEmpresa;
    private $UbicacionOferta;
    private $DetallePuesto;
    private $FuncionesPuesto;
    private $IdTipoContrato;
    private $IdTipoJornada;
    private $IdReclutador;
    private $UrlEmpresa;
    private $detalleEmpresa;

    public function __construct($Titulo,$nombreEmpresa,$UrlEmpresa,$detalleEmpresa,$UbicacionOferta,$DetallePuesto,$FuncionesPuesto,$IdTipoContrato,$IdTipoJornada,$IdReclutador)
    {   
        // $this->IdOferta= $IdOferta;
        $this->Titulo = $Titulo;
        // $this->IdEmpresa = $IdEmpresa;
        $this->NombreEmpresa = $nombreEmpresa;
        $this->UrlEmpresa = $UrlEmpresa;
        $this->UbicacionOferta = $UbicacionOferta;
        $this->DetallePuesto = $DetallePuesto;   
        $this->FuncionesPuesto = $FuncionesPuesto;
        $this->IdTipoContrato = $IdTipoContrato;
        $this->IdTipoJornada = $IdTipoJornada;
        $this->IdReclutador = $IdReclutador;
        $this->detalleEmpresa = $detalleEmpresa;
    }

    // public function setIdReclutador($IdRecl)
    // {
    //     $this->IdReclutador = $IdRecl;
    // }

    // public function getIdReclutador()
    // {
    //     return $this->IdReclutador;
    // }

    public function setIdOferta($idOferta)
    {
        $this->IdOferta = $idOferta;
    }

    public function getIdOferta()
    {
        return $this->IdOferta;
    }

    public function setTitulo($titulo)
    {
        $this->Titulo = $titulo;
    }

    public function getTitulo()
    {
        return $this->Titulo;
    }

    // public function setIdEmpresa($idEmpresa)
    // {
    //     $this->IdEmpresa = $idEmpresa;
    // }

    // public function getIdEmpresa()
    // {
    //     return $this->IdEmpresa;
    // }

    public function setNombreEmpresa($nombreEmpresa)
    {
        $this->NombreEmpresa = $nombreEmpresa;
    }

    public function getNombreEmpresa()
    {
        return $this->NombreEmpresa;
    }

    public function setUrlEmpresa($urlEmpresa)
    {
        $this->UrlEmpresa = $urlEmpresa;
    }

    public function getUrlEmpresa()
    {
        return $this->UrlEmpresa;
    }
    public function setDetalleErmpresa($detalleEmpresa)
    {
        $this->detalleEmpresa = $detalleEmpresa;
    }

    public function getDetalleEmpresa()
    {
        return $this->detalleEmpresa;
    }


    public function setUbicacionOferta($ubicacionOferta)
    {
        $this->UbicacionOferta = $ubicacionOferta;
    }

    public function getUbicacionOferta()
    {
        return $this->UbicacionOferta;
    }

    public function setDetallePuesto($detallePuesto)
    {
        $this->DetallePuesto = $detallePuesto;
    }

    public function getDetallePuesto()
    {
        return $this->DetallePuesto;
    }
    
    public function setFuncionesPuesto($funcionesPuesto)
    {
        $this->FuncionesPuesto = $funcionesPuesto;
    }
    
    public function getFuncionesPuesto()
    {
        return $this->FuncionesPuesto; 
    }

    public function setIdTipoContrato($idTipoContrato)
    {
        $this->IdTipoContrato = $idTipoContrato;
    }
    
    public function getIdTipoContrato()
    {
        return $this->IdTipoContrato; 
    }

    public function setIdTipoJornada($idTipoJornada)
    {
        $this->IdTipoJornada = $idTipoJornada;
    }
    
    public function getIdTipoJornada()
    {
        return $this->IdTipoJornada; 
    }

    public function setIdReclutador($idReclutador)
    {
        $this->IdReclutador = $idReclutador;
    }
    
    public function getIdReclutador()
    {
        return $this->IdReclutador; 
    }
}

?>