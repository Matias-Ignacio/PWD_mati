<?php

$titulo = "Ejercicio N 3";
include_once "../../estructura/header.php";
echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $recibido=data_submitted();
    $obj=new Login($recibido['usuario'],$recibido['clave']);
    $respuesta = $obj->validarUsuario();
    ?>
    <div class="divform">
        <?php echo $respuesta ;  ?>
        <div><a href="../Ejercicio/ejercicio3.php" class="btn btn-success" role="button">Volver</a></div>
    </div>

<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio3.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>