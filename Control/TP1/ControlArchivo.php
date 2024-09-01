<?php

class ControlArchivo{
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

    // public function subirArchivo($array){
    //     $respuesta = '';
    //     if($array['archivo']['error'] <= 0){
    //         if(!copy($array['archivo']['tmp_name'],$this->getDir().$array['archivo']['name'])){
    //             $respuesta = '0';
    //         }else{
    //             $respuesta = '1';
    //         }
    //     }else{
    //         $respuesta = -1;
    //     }
    //     return $respuesta;
    // }
    public function subirArchivo($array){
        $respuesta = '';
        $extension = ['doc', 'pdf'];
        $tamanio = 2 * 1024 * 1024; // 2 MB
    
        if($array['archivo']['error'] <= 0){
            $archivoExtension = pathinfo($array['archivo']['name'], PATHINFO_EXTENSION);
            $archivoTamanio = $array['archivo']['size'];
    
            if(in_array($archivoExtension, $extension) && $archivoTamanio <= $tamanio){
                if(!copy($array['archivo']['tmp_name'], $this->getDir() . $array['archivo']['name'])){
                    $respuesta = '0'; // Error al copiar el archivo
                }else{
                    $respuesta = '1'; // Archivo subido con éxito
                }
            }else{
                if(!in_array($archivoExtension, $extension)) {
                    $respuesta = '-2'; //Tipo de archivo no permitido
                }else{
                    $respuesta = '-3'; //El archivo excede el tamaño máximo permitido de 2MB
                }
            }
        }else{
            $respuesta = '-1'; // Error en la subida del archivo
        }
        return $respuesta;
    }
    
}