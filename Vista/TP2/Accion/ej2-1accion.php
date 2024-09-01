<?php

$titulo = "TP 2 - Ejercicio 2-1";

include_once "../../Estructura/header.php";

echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $recibido=data_submitted();
    $nro = ($recibido["numero"]);
    $obj = new Ej1Numero($nro);
    $tipoNumero=$obj->verificaSigno();
    ?>
    <div class="container-tp1-ej1">
        <h1 id="tituloAccion1">El numero seleccionado es: <?php echo $nro ?></h1>
        <?php 
    // var_dump($tipoNumero); 
            if($tipoNumero == "Positivo"){
                echo("<p>"."El numero es positivo"."</p>");

            }// fin if
            if($tipoNumero == "Negativo"){
                echo("<p>"."El numero es negativo"."</p>");

            }// fin if 
            if($tipoNumero == "Cero"){
                echo("<p>"."El numero es cero"."</p>");

            }// fin if 

        ?>
        <div class="volver-tp1-ej1"><a href="../Ejercicio/ejercicio2-1.php" class="volver-accion-ej1">Volver</a></div>
    </div>


<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio2-1.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>