<?php

$titulo = "Ejercicio 2";
include_once "../../estructura/header.php";
echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $datos = data_submitted();
    $obj = new Horas($datos);
    $horasTotales=$obj->sumarHoras($datos);
    ?>

    <div class="divform">
        <div class="container-tp1-ej2">
            <h1 id="tituloAccion2">Horas totales por semana:

        <?php echo $horasTotales ?></h1>

            <div class="volver-tp1-ej2"><a href="../Ejercicio/ejercicio2.php" class="btn btn-success" role="button">Volver</a></div>
        </div>
    </div>

<?php
}else{
    echo '<div class="divform"><p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio2.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>