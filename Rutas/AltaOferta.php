<?php
require_once("../dirs.php");
require_once(CLASES_PATH."OfertaLaboral.php");
require_once(CONTROLLER_PATH."OfertaLaboralController.php");
    $datos = json_decode( file_get_contents("php://input"));

    session_start();
    $datoId = $_SESSION['IdPersona'];
    
 
    $oferta = new OfertaLaboral($datos->titulo,$datos->empresa,$datos->urlEmpresa,$datos->detalleempresa,$datos->ubicacion,$datos->detallepuesto,$datos->detallepuesto,$datos->tipocontrato,$datos->tipoJornada,$datoId);
    
    $ofertaLaboralController = new OfertalaboralController();
    try{
        $ofertaLaboralController->Guardar($oferta);
    }
    catch(Exception $e){
        return json_encode(array("error" => 1, "mensaje" => "No se pudo guardar la oferta","usuario" => null));
    }
?>