<?php
    class ConexionDB { 
        private $servername = "localhost";
        private $dbname = "unip";
        private $username = "root";
        private $password = "";
        private $objPDO;
        protected $query = "";
        protected $rows = array();
        public $estado = "";

        function  __construct(){
            $this->conectar();
        }

        private function conectar() {
            try{
                $this->objPDO = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password,
                                        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); // codificación de caracteres uft-8
                $this->objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $this->estado = "Conectado";
            } catch(PDOException $e){
                $this->estado = "ERROR-No se pudo conectar: " . $e->getMessage();
                $this->desconectar();
                echo( $e->getMessage() );
            }
        }

        public function desconectar(){
            $this->objPDO = null;
            $this->estado = "Desconectado";
        }


        public function ejecutar($parametros=""){
            try {
                if( is_array($parametros)){
                    $consulta =  $this->objPDO->prepare($this->query);
                  
                    $consulta->execute($parametros);
                    // $rts =   $consulta->fetchAll(PDO::FETCH_ASSOC);
                    // return $rts;
                } else {
                    $resultado =  $this->objPDO->prepare($this->query);
                    $resultado->execute();
                }
            } catch (PDOException $e) {
                $this->estado = "ERROR-No se pudo ejecutar: " . $e->getMessage();
                $this->desconectar();
            }
        }

        public function obtenerRows($parametros=""){
            try {
                if( is_array($parametros)){
                    $consulta =  $this->objPDO->prepare($this->query);
                    $consulta->execute($parametros);
                    // return $this->rows =  $consulta->fetchAll(PDO::FETCH_ASSOC);
                    $this->rows =  $consulta->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    $consulta =  $this->objPDO->prepare($this->query);
                    $consulta->execute();
                    $this->rows =  $consulta->fetchAll(PDO::FETCH_ASSOC);
                }
            } catch (PDOException $e) {
                $this->estado = "ERRO-No se pudo obtener Rows: " . $e->getMessage();
                $this->desconectar();
            }
        }

        public function ultimoId(){
            try {
                return $this->objPDO->lastInsertId();
            } catch (PDOException $e) {
                $this->estado = "ERROR-No se pudo obtener el ultimo Id: " . $e->getMessage();
                $this->desconectar();
            }
        }

    }

?>