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
         * verificasigno
         * Indica si el nro es posotivo - negativo o cero 
         * 
         * @return string
         */
        public function verificaSigno(){
            $salida="";

            if($this->getNro()<0){
                $salida="Negativo";

            }// fin if 
            elseif($this->getNro()>0){
                $salida="Positivo";
            }// fin elseif
            else{
                $salida="Cero";
            }// fin else

            return $salida; 

        }// fin function 
    }// fin clase 
?>