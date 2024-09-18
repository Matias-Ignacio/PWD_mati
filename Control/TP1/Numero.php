<?php
    class Numero{
        private $nro;

        public function __construct($numero)
        {
            $this->nro=$numero;
        }// fin constructor

        public function getNro(){
            return $this->nro; 
        }// fin getNro

/**
 * Validar en el servidor 
 * @param Array
 * @return Array
 */


    public function vDD($param){

        $exito = false;
        $boolParam['NroDni']    = false;
        $boolParam['nombre']    = false;
        $boolParam['fecha']     = false;
        $boolParam['telefono']  = false;
        $boolParam['domicilio'] = false;
        $boolParam['email']     = false;

        $options['NroDni'] = array('options' => array('min_range' => 1000000,'max_range' => 99999999, ) );

        
        if (filter_var($param['NroDni'], FILTER_VALIDATE_INT, $options['NroDni']) !== FALSE) {
            $boolParam['NroDni'] = true;
            $boolParam['nombre'] = $param['NroDni'];
        }


        if ($param <> NULL)
        {
            if (isset($param['Apellido'])){
               // if(esLetra($param['Apellido']) && esLetra($param['Nombre']))
                //{$boolParam['nombre'] = true;}
            }
 
            if (isset($param['fechaNac'])){
                if($boolParam['fecha'])
                {$boolParam['fecha'] = true;}
            }
                 
            if (isset($param['Telefono'])){
                if($boolParam['telefono'])
                {$boolParam['telefono'] = true;}
            }

            if (isset($param['Domicilio'])){
                
                {$boolParam['domicilio'] = true;}
            }

            if (isset($param['email'])){
                if(filter_var($param['email'], FILTER_VALIDATE_EMAIL)){
                    $boolParam['email'] = true;
                }
            }

        }
        
        return $boolParam;
    }






    }// fin clase 
?>