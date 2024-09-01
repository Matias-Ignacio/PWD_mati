<?php
$titulo = "TP 2 - Ejercicio 2-7";
include_once '../../Estructura/header.php';

echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $recibido = data_submitted();
    $objCalculadora = new Ej7Calculadora($recibido);
    ?>
    <div class="divform">
        <?php
            echo $objCalculadora->getNro1()." ".$objCalculadora->signo()." ".$objCalculadora->getNro2()." = ".$objCalculadora->cuenta();
        ?>

        <div><a href="../Ejercicio/ejercicio2-7.php" class="btn btn-success" role="button">Volver</a></div>
    </div>
<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio2-7.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>