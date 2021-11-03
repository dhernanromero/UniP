<?php
class Usuario{
    private $IdUsuario;
    private $Nombre;
    private $Apellido;
    private $DNI;
    private $FechaNacimiento;
    private $Email;
    private $ImagenPerfil;

    public function __construct($nombre, $apellido,$dni,$fecNac,$email,$imgPerfil)
    {
        // $this->IdUsuario = $idUsr;
        $this->Nombre = $nombre;
        $this->Apellido = $apellido;
        $this->DNI = $dni;
        $this->FechaNacimiento = $fecNac;
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
}

?>