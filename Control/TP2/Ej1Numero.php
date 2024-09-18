<?php
    class Ej1Numero{
        private $nro;

        public function __construct($numero){
            $this->nro = $numero;
        }

        public function getNro(){
            return $this->nro; 
        }

        /**
         * verificasigno
         * Indica si el nro es posotivo - negativo o cero 
         * @return string
         */
        public function verificaSigno(){
            $salida = "";

            if($this->getNro()<0){
                $salida = "Negativo";

            }elseif($this->getNro()>0){
                $salida = "Positivo";
            }else{
                $salida = "Cero";
            }
            return $salida; 
        }


    }
?>