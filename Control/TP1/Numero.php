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

        $listaClaves = ['NroDni', 'Nombre', 'fechaNac', 'Telefono', 'Domicilio', 'Patente', 'Email', 'Usuario', 'Password'];
        $boolParam   = array();

        $options['NroDni']      = array('options' => array("regexp"=>"/^[1-9][0-9]{5,6}[0-9]$/") );
        $options['Nombre']      = array('options' => array("regexp"=>"/^[A-Z][A-z\sáéíóúÁÉÍÓÚ']{1,40}[A-z]$/") );
        $options['fechaNac']    = array('options' => array("regexp"=>"/^[0-9][0-9]{2}-[0-9]{2}-[0-9]{3}[0-9]$/") );
        $options['Telefono']    = array('options' => array("regexp"=>"/^[1-9][0-9]{1,3}-[0-9]{4,9}[0-9]$/") );
        $options['Domicilio']   = array('options' => array("regexp"=>"/^[A-Z][A-z\sáéíóúÁÉÍÓÚ'°0-9]{1,40}[A-z0-9]$/") );
        $options['Patente']     = array('options' => array("regexp"=>"/^[A-Z][A-Z]{2}[0-9]{2}[0-9]$|^[A-Z][A-Z]{1}[0-9]{3}[A-Z]{1}[A-Z]$/") ); 
        $options['Email']       = array('options' => array("regexp"=>"/^[a-z0-9][a-z0-9.-]{1,30}[@]{1}[a-z.]{1,10}[.]{1}[a-z]{1,2}[a-z]$/") );
        $options['Usuario']     = array('options' => array("regexp"=>"/^[0-9][0-9]{2}-[0-9]{2}-[0-9]{3}[0-9]$/") );//Falta
        $options['Password']    = array('options' => array("regexp"=>"/^[0-9][0-9]{2}-[0-9]{2}-[0-9]{3}[0-9]$/") );//Falta


        if ($param <> NULL)
        {
            foreach ($listaClaves as $key){   
                if (isset($param[$key])){  
                    if (($param[$key] != 'null') && (filter_var($param[$key], FILTER_VALIDATE_REGEXP, $options[$key]) !== FALSE)) {
                        //exepciones
                        if(($key === 'Nombre') || ($key === 'Domicilio')){
                            $boolParam[$key] = ucwords($param[$key]);
                        }else{
                            $boolParam[$key] = $param[$key];
                        }
                    }
                }
            }
        }
        return $boolParam;
    }





    }// fin clase 
?>