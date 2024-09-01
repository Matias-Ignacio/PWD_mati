<?php
$titulo = "Ejercicio N 2";
include_once '../../Estructura/header.php';
echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $datos = data_submitted();
    $archivos = new ControlTxt();
    $informacion = $archivos->retornaContenidoArchivo($datos["archivo"]);
    if($informacion === '-1'){
        $mensaje = '<p>ERROR: El archivo subido no fue txt, por lo que no se podrá mostrar.</p>';
    }elseif($informacion != ''){
        $mensaje = "<textarea name='muestraInformacion' rows='25' cols='70'>" . $informacion . "</textarea>";
    }else{
        $mensaje = '<p>ERROR: Ocurrió un error desconocido.</p>';
    }
    ?>
    <h1><?php echo $mensaje; ?></h1>
    <div><a href="../Ejercicio/ejercicio2.php" class="btn btn-success" role="button">Volver</a></div>

<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio2.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>