<?php
    require_once("../dirs.php");
    require_once (MODEL_PATH."ConexionDB.php");

    class OfertaLaboralModel extends ConexionDB
    {

        public function Listar()
        {
            $this->query = "SELECT IdOferta,Titulo, IdEmpresa, UbicacionOferta, DetallePuesto, FuncionesPuesto, IdTipoContrato, IdTipoJornada, E.Descripcion
             AS Estado
                            FROM Oferta o
                            INNER JOIN estadoreclutador E on P.IdEstado = E.IdEstado";
                           
            $this->obtenerRows();
            return $this->rows;
        }

        public function ListarOferta($id)
        {
            $this->query = "SELECT IdOferta,Titulo, NombreEmpresa, o.IdTipoContrato as IdTipoContrato,o.IdTipoJornada as IdTipoJornada,
            UbicacionOferta,tp.DetalleContrato, tj.Detalle, UrlEmpresa,DetallePuesto, FuncionesPuesto,AcercadeEmpresa
            FROM oferta o
            INNER JOIN tipocontrato tp on tp.IdTipoContrato = o.IdTipoContrato
            INNER JOIN tipojornada tj on tj.IdTipoJornada = o.IdTipoJornada
            WHERE IdOferta = :idoferta";

            $this->obtenerRows(array(
                ":idoferta" => $id
            ));
            return $this->rows;
        
        }
        /*
        public function ModificarEstado($id,$idestado)
        {
            $this->query = "UPDATE Persona
                            SET IdEstado = :idestado
                            WHERE IdPersona = :id";
            $this->ejecutar(array(
                                ':idestado' => $idestado,
                                ':id' => $id 
            ));
        }
        */
        public function Guardar(OfertaLaboral $datos)
        {
            echo("entre al model ");
            print_r($datos);
            // print_r($this);
            // echo($datos->getNombre()."NombreModel");
            try
            {
                $this->query = "INSERT INTO oferta (Titulo, UbicacionOferta, DetallePuesto,FuncionesPuesto, IdTipoContrato,IdTipoJornada,IdReclutador, AcercadeEmpresa, UrlEmpresa,NombreEmpresa) 
                VALUES (:titulo,:ubicacion,:lblDetalleEmpleo,:lblDetalleFunciones,:TipoDeContrato,:TipoDeJornada,:reclutador,:acercaDeEmpresa,:UrlEmpresa,:nombreEmpresa);";
                $this->ejecutar( array(
                        ':titulo' => $datos->getTitulo(),
                        ':ubicacion' => $datos->getUbicacionOferta(),
                        ':lblDetalleEmpleo' => $datos->getDetallePuesto(),
                        ':lblDetalleFunciones' => $datos->getFuncionesPuesto(),
                        ':TipoDeContrato' => $datos->getIdTipoContrato(),
                        ':TipoDeJornada'=> $datos->getIdTipoJornada(),
                        ':reclutador' => $datos->getIdReclutador(),
                        ':acercaDeEmpresa'=> $datos->getDetalleEmpresa(),
                        ':UrlEmpresa'=> $datos->getIdTipoJornada(),
                        ':nombreEmpresa' => $datos->getNombreEmpresa()
                    ));
                
                    return 'ok';
                // return $this->ultimoId();
           
            }
            catch(Exception $e)
            {
               return $this->estado = "ERROR INSERTAR OFERTA: " . $e->getMessage();
            }
        }

    }

?>