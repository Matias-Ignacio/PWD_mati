<?php
    class Numero{
        private $nro;
        private $nombre;

        public function __construct()
        {
            $this->nro = 0;
            $this->nombre = "";
        }// fin constructor

        public function getNro(){
            return $this->nro; 
        }// fin getNro

/**
 * Validar en el servidor 
 * @param array
 * @return array
 */


    public function vDD($param){

        $exito = false;
        $boolParam['NroDni']    = false;
        $boolParam['Nombre']    = false;
        $boolParam['fechaNac']  = false;
        $boolParam['Telefono']  = false;
        $boolParam['Domicilio'] = false;
        $boolParam['Email']     = false;

        $options['NroDni'] = array('options' => array('min_range' => 1000000,'max_range' => 99999999, ) );
        $options['Nombre'] = array('options' => array("regexp"=>"/[^A-z\s]/") );
        $options['Domicilio'] = array('options' => array("regexp"=>"/[^A-z0-9\s]/") );
        $options['Telefono'] = array('options' => array("regexp"=>"/[0-9]-[0-9]/") );

        if ($param <> NULL)
        {
            if (isset($param['NroDni'])){  
                $val = trim($param['NroDni']);
                if (filter_var($val, FILTER_VALIDATE_INT, $options['NroDni']) !== FALSE) {
                    $boolParam['NroDni'] = true;
                }
            }
            if (isset($param['Nombre'])){
                if (($param['Nombre'] != 'null') && (filter_var($param['Nombre'], FILTER_VALIDATE_REGEXP, $options['Nombre']) == FALSE)) {
                    $boolParam['Nombre'] = true;
                }
            }          
            if (isset($param['Domicilio'])){
                if (($param['Domicilio'] != 'null') && (filter_var($param['Domicilio'], FILTER_VALIDATE_REGEXP, $options['Domicilio']) == FALSE)) {
                    $boolParam['Domicilio'] = true;
                }
            }
            if (isset($param['Email'])){
                if(filter_var($param['Email'], FILTER_VALIDATE_EMAIL)){
                    $boolParam['Email'] = true;
                }
            }          
            if (isset($param['Telefono'])){
                if (($param['Telefono'] != 'null') && (filter_var($param['Telefono'], FILTER_VALIDATE_REGEXP, $options['Telefono']) !== FALSE)) {
                    $boolParam['Telefono'] = true;
                    $boolParam['fecha'] = $param['Telefono'];
                }
            }


 
            if (isset($param['fechaNac'])){
                if($boolParam['fecha'])
                {$boolParam['fecha'] = true;}
            }

        }
        
        return $boolParam;
    }





    }// fin clase 
?>