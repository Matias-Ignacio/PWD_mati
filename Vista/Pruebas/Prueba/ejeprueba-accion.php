<?php

$titulo = "Probandolo";

include_once "../../Estructura/header.php";

echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $recibido=data_submitted();

    ?>
  
        <?php 


        ?>
        <div class="volver-tp1-ej1"><a href="../Ejercicio/ejeprueba.php" class="volver-accion-ej1">Volver</a></div>


<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio2-1.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>