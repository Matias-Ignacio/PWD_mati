<?php
$titulo = "TP 2 - Ejercicio 2-4";
include_once '../../Estructura/header.php';

echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $recibido = data_submitted();
    $objpersona = new Ej3456Persona($recibido);
    ?>
    <div class="divform">
        <?php
            echo "Hola, yo soy ".$objpersona->getNombre()." ".$objpersona->getApellido().", ".$objpersona->mayorEdad()." mayor de edad y vivo en la calle ".$objpersona->getDireccion();
        ?>

        <div><a href="../Ejercicio/ejercicio2-4.php" class="btn btn-success" role="button">Volver</a></div>
    </div>

<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio2-4.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>