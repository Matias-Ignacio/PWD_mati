<?php

$titulo = "TP 2 - Ejercicio 2-2";

include_once "../../Estructura/header.php";

echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $datos = data_submitted();
    $obj = new Ej2Horas($datos);
    $horasTotales=$obj->sumarHoras($datos);
    ?>

    <div class="container-tp1-ej2">
        <h1 id="tituloAccion2">Horas totales por semana:

    <?php echo $horasTotales ?></h1>

        <div class="volver-tp1-ej2"><a href="../Ejercicio/ej2-2-bootstrap.php" class="volver-accion-ej2">Volver</a></div>
    </div>

<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio2-2.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>