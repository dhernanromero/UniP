<?php
class Validaciones{
    private $valid_texto = "/ ^ ([a-zA-Z '] +) $ /";

    public function __construct()
    {
        
    }

    // public function validar_dato_existente($dato)
    // {
    //     // if(isset($_POST['nombre']))
    //     // {

    //     // }
        
    // }

    public function validar_texto($texto)
    {
        if($texto == null)
        {
            return "El dato ingresado no puede ser vacio";
        }
        if(!preg_match($this->valid_texto,$texto))
        {
            return "El dato ingresado es Invalido";
        }

        if(strlen($texto)>5)
        {
            return "El texto ingresado debe tener mas de 5 caracteres";
        }

    }

    public function validar_fecha($fecha)
    {
        $valores = explode('/', $fecha);
        if(count($valores) !=3)
        {
            return "Fecha ingresada no es valida";
        }
        if(!checkdate($valores[1], $valores[0], $valores[2]))
        {
            return "formato ingresado no es valido";
        }
        
    }
}
?>