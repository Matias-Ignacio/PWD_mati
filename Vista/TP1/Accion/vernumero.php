<?php

$titulo = "Ejercicio N 1";

include_once "../../estructura/header.php";
include_once "../../../Control/TP1/Numero.php";

echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $arrayan = array();
    $param = data_submitted();
    $obj = new Numero();
  


    ?>
    <div class="divform">
        <h1 id="tituloAccion1">El numero seleccionado es: <?php echo "Probando..."; ?></h1>
        <?php 

        $arrayan = $obj->vXc($param, 'Nombre');
        var_dump($arrayan);

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