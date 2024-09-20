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

        $listaClaves = ['NroDni', 'SoloLetra', 'fechaNac', 'Telefono', 'Domicilio', 'Patente', 'Modelo', 'Email', 'Usuario', 'Password'];
        $boolParam   = array();

        $options['NroDni']      = array('options' => array("regexp"=>"/^[1-9][0-9]{5,6}[0-9]$/") );
        $options['SoloLetra']   = array('options' => array("regexp"=>"/^[A-Z][A-z\sáéíóúüñÁÉÍÓÚÜÑ']{1,40}[A-z]$/") );
        $options['fechaNac']    = array('options' => array("regexp"=>"/^[0-3][0-9]{1}-[0-9]{2}-[0-9]{3}[0-9]$/") );
        $options['Telefono']    = array('options' => array("regexp"=>"/^[1-9][0-9]{1,3}-[0-9]{4,9}[0-9]$/") );
        $options['Domicilio']   = array('options' => array("regexp"=>"/^[A-Z][A-z\sáéíóúüñÁÉÍÓÚÜÑ'°0-9]{1,40}[A-z0-9]$/") );
        $options['Patente']     = array('options' => array("regexp"=>"/^[A-Z][A-Z]{2}[0-9]{2}[0-9]$|^[A-Z][A-Z]{1}[0-9]{3}[A-Z]{1}[A-Z]$/") );
        $options['Modelo']      = array('options' => array("regexp"=>"/^[3-9][0-9]$|^[1][9]{1}[3-9]{1}[0-9]$|^[2][0]{1}[0-9]{1}[0-9]$/") );
        $options['Email']       = array('options' => array("regexp"=>"/^[a-z0-9][a-z0-9.-]{1,30}[@]{1}[a-z.]{1,10}[.]{1}[a-z]{1,2}[a-z]$/") );
        $options['Usuario']     = array('options' => array("regexp"=>"/^[A-z][A-z0-9]{1,28}[A-z0-9]$/") );
        $options['Password']    = array('options' => array("regexp"=>"/^[A-z0-9]([A-Z]+[A-Za-z0-9+*%&#\$\!]){4,8}[A-z0-9]$/") );

        if ($param <> NULL)
        {
            foreach ($listaClaves as $key){   
                if (isset($param[$key])){  
                    if (($param[$key] != 'null') && (filter_var($param[$key], FILTER_VALIDATE_REGEXP, $options[$key]) !== FALSE)) {
                        //exepciones
                        if(($key === 'SoloLetra') || ($key === 'Domicilio')){
                            $boolParam[$key] = ucwords($param[$key]);
                        }elseif(($key === 'fechaNac')){
                            $dia = substr($param[$key],0,2);
                            $mes = substr($param[$key],3,2);
                            $ani = substr($param[$key],6,4);
                            $boolParam[$key] = checkdate($mes,$dia,$ani) ? $param[$key] : false;
                        }elseif($key === 'Modelo'){
                            $boolParam[$key] = ($param[$key] <= date("Y")) ? $param[$key] : false;
                        }else{
                            $boolParam[$key] = $param[$key];
                        }
                    }else{
                        $boolParam[$key] = false;
                    }
                }
            }
        }
        return $boolParam;
    }





    }// fin clase 
?>