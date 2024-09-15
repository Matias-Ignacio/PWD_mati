<?php
$titulo = "TP 2 - Ejercicio 3-A";
include_once '../../Estructura/header.php';

echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $recibido = data_submitted();
    $objLogin = new Login($recibido);

    $aceptarUserPass = $objLogin->validarUsuario();
    ?>

    <div class="divform">
        <?php
        if($aceptarUserPass == -2){
            echo "Error en el arreglo de usuarios\nNo es un array o no se puede procesar";
        }else if($aceptarUserPass == -1){
            echo "Usuario o contraseña vacíos\n";
        }else if($aceptarUserPass == 0){
            echo "No se encontro el usuario\n";
        }else if($aceptarUserPass == 1){
            echo "Usuario y clave correctos\n";
        }else{
            echo "Contraseña incorrecta\n";
        }
        ?>
    </div>

    <div><a href="../Ejercicio/ej3-a-bootstrap.php" class="btn btn-success" role="button">Volver</a></div>

<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ej3-a-bootstrap.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>