<?php

class Ej7Calculadora{
    private $nro1;
    private $nro2;
    private $operacion;


    public function __construct($ArregloDatos){
        $this->nro1 = $ArregloDatos["numero1"];
        $this->nro2 = $ArregloDatos["numero2"];
        $this->operacion = $ArregloDatos["operacion"];
    }


    //Setea el valor de $nro1
    public function setNro1($var){
        $this->nro1 = $var;
    }
     //Setea el valor de $nro2
    public function setNro2($var){
        $this->nro2 = $var;
    }
     //Setea el valor de $operacion
    public function setOperacion($var){
        $this->operacion = $var;
    }
    
    //Obtiene el valor de $nro1
    public function getNro1(){
        return $this->nro1;
    }
    //Obtiene el valor de $nro2
    public function getNro2(){
        return $this->nro2;
    }
    //Obtiene el valor de $operacion
    public function getOperacion(){
        return $this->operacion;
    }


    /**
      * Retorna el resultado
     * @return FLOAT $resultado
     */
    public function cuenta(){
        if($this->getOperacion() == "suma"){
            $resultado = $this->getNro1() + $this->getNro2();
        }elseif($this->getOperacion() == "resta"){
            $resultado = $this->getNro1() - $this->getNro2();
        }elseif($this->getOperacion() == "multiplicacion"){
            $resultado = $this->getNro1() * $this->getNro2();
        }elseif($this->getOperacion() == "division"){
            $resultado = $this->getNro1() / $this->getNro2();
        }
        $mensaje = $resultado;
        return $mensaje;
    }


    /**
      * Retorna el resultado
     * @return FLOAT $resultado
     */
    public function signo(){
        if($this->getOperacion() == "suma"){
            $resultado = "+";
        }elseif($this->getOperacion() == "resta"){
            $resultado = "-";
        }elseif($this->getOperacion() == "multiplicacion"){
            $resultado = "*";
        }elseif($this->getOperacion() == "division"){
            $resultado = "/";
        }
        return $resultado;
    }
}