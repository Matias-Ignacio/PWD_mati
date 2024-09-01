<?php
$titulo = "TP 2 - Ejercicio 2-8";
include_once '../../Estructura/header.php';

echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $recibido = data_submitted();
    $obj = new Ej8Cinema($recibido);

    $tarifa = $obj->calculaTarifa();
    ?>

    <div class="divform">
        <?php
        echo 'El precio de la entrada es de '.'$'.$tarifa;
        ?>
    </div>

    <div><a href="../Ejercicio/ejercicio2-8.php" class="btn btn-success" role="button">Volver</a></div>

<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio2-8.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>