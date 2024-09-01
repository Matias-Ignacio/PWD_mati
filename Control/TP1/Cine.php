<?php
class Cine{
    private $titulo;
    private $actores;
    private $director;
    private $guion;
    private $produccion;
    private $anio;
    private $nacionalidad;
    private $genero;
    private $duracion;
    private $restriccion;
    private $sinopsis;
    /*
    public function __construct($titulo,$actores,$director,$guion,$produccion,$anio,$nacionalidad,$genero,$duracion,$restriccion,$sinopsis){
        $this->titulo=$titulo;
        $this->actores=$actores;
        $this->director=$director; 
        $this->guion=$guion;
        $this->produccion=$produccion;
        $this->anio=$anio;
        $this->nacionalidad=$nacionalidad;
        $this->genero=$genero;
        $this->duracion=$duracion;
        $this->restriccion=$restriccion;
        $this->sinopsis=$sinopsis;
    }  */

    public function __construct($arregloDatos){
        $this->titulo = $arregloDatos["titulo"];
        $this->actores = $arregloDatos["actores"];
        $this->director = $arregloDatos["director"]; 
        $this->guion = $arregloDatos["guion"];
        $this->produccion = $arregloDatos["produccion"];
        $this->anio = $arregloDatos["anio"];
        $this->nacionalidad = $arregloDatos["nacionalidad"];
        $this->genero = $arregloDatos["genero"];
        $this->duracion = $arregloDatos["duracion"];
        $this->restriccion = $arregloDatos["restriccion"];
        $this->sinopsis = $arregloDatos["sinopsis"];
    }
    public function getNombre(){
        return $this->titulo;
    }
    public function getActores(){
        return $this->actores;
    }
    public function getDirector(){
        return $this->director;
    }
    public function getGuion(){
        return $this->guion;
    }
    public function getProduccion(){
        return $this->produccion;
    }
    public function getAnio(){
        return $this->anio;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function getDuracion(){
        return $this->duracion;
    }
    public function getRestriccion(){
        return $this->restriccion;
    }
    public function getSinopsis(){
        return $this->sinopsis;
    }
    public function getNacionalidad(){
        return $this->nacionalidad;
    }
}
?>