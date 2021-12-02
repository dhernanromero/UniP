<?php
class Persona{
    private $IdUsuario;
    private $Nombre;
    private $Apellido;
    private $DNI;
    private $Nacionalidad;
    private $FechaNacimiento;
    private $Telefono;
    private $EstadoCivil;
    private $Provincia;
    private $Localidad;
    private $Calle;
    private $NumeroCalle;
    private $Email;
    private $ImagenPerfil;

    public function __construct($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$provincia,$localidad,$calle,$numeroCalle,$email,$imgPerfil)
    {
        // $this->IdUsuario = $idUsr;
        $this->Nombre = $nombre;
        $this->Apellido = $apellido;
        $this->DNI = $dni;
        $this->Nacionalidad = $nacionalidad;
        $this->FechaNacimiento = $fecNac;
        $this->Telefono = $telefono;
        $this->EstadoCivil = $estadoCivil;
        $this->Provincia = $provincia;
        $this->Localidad = $localidad;
        $this->Calle = $calle;
        $this->NumeroCalle = $numeroCalle;
        $this->Email = $email;  
        $this->ImagenPerfil = $imgPerfil;
    }

    public function setIdUsuario($idUsr)
    {
        $this->IdUsuario = $idUsr;
    }

    public function getIdUsuario()
    {
        return $this->IdUsuario;
    }

    public function setNombre($nombre)
    {
        $this->Nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function setApellido($apellido)
    {
        $this->Apellido = $apellido;
    }

    public function getApellido()
    {
        return $this->Apellido;
    }
    public function setNacionalidad($nacionalidad)
    {
        $this->Nacionalidad = $nacionalidad;
    }

    public function getNacionalidad()
    {
        return $this->Nacionalidad;
    }

    public function setTelefono($telefono)
    {
        $this->Telefono = $telefono;
    }

    public function getTelefono()
    {
        return $this->Telefono;
    }

    public function setEstadoCivil($estadoCivil)
    {
        $this->EstadoCivil = $estadoCivil;
    }

    public function getEstadoCivil()
    {
        return $this->EstadoCivil;
    }
    
    public function setDNI($dni)
    {
        $this->DNI = $dni;
    }

    public function getDNI()
    {
        return $this->DNI;
    }

    public function setFechaNacimiento($fecNac)
    {
        $this->FechaNacimiento = $fecNac;
    }

    public function getFechaNacimiento()
    {
        return $this->FechaNacimiento;
    }

    public function setEmail($email)
    {
        $this->Email = $email;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setImagenPerfil($imgPerfil)
    {
        $this->ImagenPerfil = $imgPerfil;
    }

    public function getImagenPerfil()
    {
        return $this->ImagenPerfil;
    }
    public function setProvincia($provincia)
    {
        $this->Provincia = $provincia;
    }

    public function getProvincia()
    {
        return $this->Provincia;
    }
    public function setLocalidad($localidad)
    {
        $this->Calle = $localidad;
    }

    public function getLocalidad()
    {
        return $this->Localidad;
    }
    public function setCalle($calle)
    {
        $this->Calle = $calle;
    }

    public function getCalle()
    {
        return $this->Calle;
    }

    public function setBNumeroCalle($numeroCalle)
    {
        $this->NumeroCalle = $numeroCalle;
    }

    public function getNumeroCalle()
    {
        return $this->NumeroCalle;
    }
}

?>