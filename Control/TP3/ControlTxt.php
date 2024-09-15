<?php
class ControlTxt{
    private $dir;

    public function __construct(){
        $this->dir = '../archivos/';

    } 

    public function getDir(){
        return $this->dir; 
    }
    public function setDir($dir){
        $this->dir = $dir; 
    }
    public function retornaContenidoArchivo($archivo){
        $nombreTemporalArchivo = $archivo["tmp_name"];
        $tipoArchivo = $archivo["type"];
        if ($tipoArchivo == "text/plain"){
            $contenidoArchivo = file_get_contents($nombreTemporalArchivo);
        } else {
            $contenidoArchivo = "-1";
        }
        return $contenidoArchivo;
    }
}