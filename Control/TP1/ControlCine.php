<?php
class ControlCine {
    public function cinema($datos_form, $array_img){
        // Manejo del archivo de imagen
        if(isset($array_img["imagen"]) && $array_img["imagen"]["error"] === 0){
            $file_name = basename($array_img["imagen"]["name"]);
        }else{
            $file_name = "error. No se ha subido ninguna foto";
        }

        // Preparar los datos de la película
        $array = [
            "titulo" => $datos_form["titulo"] ?? "",
            "director" => $datos_form["director"] ?? "",
            "actores" => $datos_form["actores"] ?? "",
            "guion" => $datos_form["guion"] ?? "",
            "produccion" => $datos_form["produccion"] ?? "",
            "anio" => $datos_form["anio"] ?? "",
            "nacionalidad" => $datos_form["nacionalidad"] ?? "",
            "genero" => $datos_form["genero"] ?? "",
            "duracion" => $datos_form["duracion"] ?? "",
            "restriccion" => $datos_form["restriccion"] ?? "",
            "sinopsis" => $datos_form["sinopsis"] ?? "",
            "imagen" => $file_name // Guardar el nombre del archivo
        ];

        return $array;
    }
}


    
    
    
