<?php
    class Ej2Horas{
        private $cantHoras;

        public function __construct($cantidadDeHoras){
            $this->cantHoras=$cantidadDeHoras;
        }

        public function getCantHoras(){
            return $this->cantHoras; 
        }

        /**
         * Ingresa por parametro un arreglo de las horas de cursada de PWD en cada día de la semana.
         * Retorna la suma de las horas.
         * @param ARRAY $arregloHoras
         * @return INT $suma
        */
        public function sumarHoras($arregloHoras){
            $suma = 0;
            foreach ($arregloHoras as $hora) {
                $suma += $hora;
            }
            return $suma;
        }
    }
?>