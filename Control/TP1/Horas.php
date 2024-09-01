<?php
class Horas{
    private $hora;

    public function __construct($horas)
    {
        $this->hora = $horas;
    }

    public function getHora(){
        return $this->hora; 
    }

    //Esta función obtiene un arreglo de las horas de cursada de pwd en cada día de la semana y devuelve la suma
    public function sumarHoras($arregloHoras){
        $suma = 0;
        foreach ($arregloHoras as $hora) {
            $suma += $hora;
        }
        return $suma;
    }
}

?>