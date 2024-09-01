<?php

$titulo = "Ejercicio N 1";

include_once "../../estructura/header.php";

echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $recibido=data_submitted();
    $nro=intval($recibido["numero"]);
    $obj=new Numero($nro);
    $tipoNumero=$obj->verificaSigno();
    ?>
    <div class="divform">
        <h1 id="tituloAccion1">El numero seleccionado es: <?php echo $nro ?></h1>
        <?php 
            if($tipoNumero=="Positivo"){
                echo("<p>"."El numero es positivo"."</p>");

            }// fin if
            if($tipoNumero=="Negativo"){
                echo("<p>"."El numero es negativo"."</p>");

            }// fin if 
            if($tipoNumero=="Cero"){
                echo("<p>"."El numero es cero"."</p>");

            }// fin if 

        ?>
        <div class="volver-tp1-ej1"><a href="../Ejercicio/ejercicio1.php" class="btn btn-success" role="button">Volver</a></div>
    </div>

<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio1.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>