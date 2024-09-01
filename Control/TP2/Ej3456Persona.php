<?php

class Ej3456Persona{
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;
    private $estudio;
    private $sexo;
    private $colDeportes;


    public function __construct($ArregloDatos)
    {
        $this->nombre = $ArregloDatos["nombre"];
        $this->apellido = $ArregloDatos["apellido"];
        $this->edad = $ArregloDatos["edad"];
        $this->direccion = $ArregloDatos["direccion"];
        $this->estudio = $ArregloDatos["estudio"];
        $this->sexo = $ArregloDatos["sexo"];
        $this->colDeportes = Array();
    }


    //Setea el valor de $nombre
    public function setNombre($var){
        $this->nombre = $var;
    }
    //Setea el valor de $apellido
    public function setApellido($var){
        $this->apellido = $var;
    }
    //Setea el valor de $edad
    public function setEdad($var){
        $this->edad = $var;
    }
    //Setea el valor de $direccion
    public function setDireccion($var){
        $this->direccion = $var;
    }
    //Setea el valor de $estudio
    public function setEstudio($var){
        $this->estudio = $var;
    }
    //Setea el valor de $sexo
    public function setSexo($var){
        $this->sexo = $var;
    }
    //Setea el valor de $colDeportes
    public function setColDeportes($var){
        $this->colDeportes = $var;
    }

    //Obtiene el valor de $nombre
    public function getNombre(){
        return $this->nombre;
    }
    //Obtiene el valor de $apellido
    public function getApellido(){
        return $this->apellido;
    }
    //Obtiene el valor de $edad
    public function getEdad(){
        return $this->edad;
    }
    //Obtiene el valor de $direccion
    public function getDireccion(){
        return $this->direccion;
    }
    //Obtiene el valor de $estudio
    public function getEstudio(){
        return $this->estudio;
    }
    //Obtiene el valor de $sexo
    public function getSexo(){
        return $this->sexo;
    }
    //Obtiene el valor de $nombre
    public function getDeportes(){
        return $this->colDeportes;
    }


    /**
     * Retorna si es o no mayor de edad
     * @return STRING $rta
     */
    public function mayorEdad(){
        $rta = "No soy";
        if ($this->edad >= 18){
            $rta = "Soy";
        }
        return $rta;
    }

    
    /**
     * Retorna el nivel de estudios
     * @return STRING $rta
     */
    public function mostrarEstudios(){
        $rta = "";
        if ($this->getEstudio() == 1){
            $rta = "No tengo Estudios";
        }else if ($this->getEstudio() == 2){
            $rta = "Tengo Estudios Secundarios ";
        }else if ($this->getEstudio() == 3){
            $rta = "Tengo Estudios Terciarios ";
        }
        return $rta;
    }


    /**
     * Retorna Masculino o Femenino dependiendo del sexo de la persona
     * @return STRING $rta
     */
    public function mostrarSexo(){
        $rta = "";
        if ($this->getSexo() == "M" || $this->getSexo() == "m"){
            $rta = "Masculino";
        }else{
            $rta = "Femenino";
        }
        return $rta;
    }


    /**
     * Retorna los deportes que practica la persona
     * @return VOID
     */
    public function agregarDeporte($dep){
        array_push($this->colDeportes, $dep);
    }


    /**
     * Retorna los deportes que practica la persona
     * @return STRING $rta
     */
    public function mostrarDeportes(){
        $rta = "";
        for ($i = 0; $i < count($this->colDeportes); $i++){
            $rta .= $this->colDeportes[$i] . " ";
        }
        return $rta;
    }
}