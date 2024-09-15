<?php

class Ej8Cinema{
    private $edad;
    private $estudio;


    public function __construct($arregloDatos)
    {
        $this->edad = $arregloDatos["edad"];
        $this->estudio = $arregloDatos["estudio"];
    }

    public function getEdad(){
        return $this->edad;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function getEstudio(){
        return $this->estudio;
    }
    public function setEstudio($estudio){
        $this->estudio = $estudio;
    }


    /**
     * calcula y retorna la tarifa
     * @return int
     */
    public function calculaTarifa(){
        $edad = $this->getEdad();
        $estudia = $this->getEstudio();
        $tarifa = 300;

        if($edad < 12){
            $tarifa = 160;
        }if($estudia == 'si' && $edad >= 12){
            $tarifa = 180;
        }else if($estudia == 'si'){
            $tarifa = 160;
        }

        return $tarifa;
    }
}