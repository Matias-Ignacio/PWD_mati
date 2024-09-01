<?php
$titulo = "Ejercicio N 1";
include_once '../../Estructura/header.php';
?>

<script type="text/javascript" src="../../Js/tp3ej1.js"></script>
<div class="divtitulo">
    <h1><?php echo $titulo; ?></h1>
</div>
<div class="divform">
    <form id="form" method="post" action="../Accion/eje1accion.php" enctype="multipart/form-data" class="needs-validation" novalidate>
        <h3>Ingrese un Archivo: </h3>
        <input name="archivo" id="archivo" type="file" class="form-control-file w-100" required><br><br>
        <div class="valid-feedback">¡Se ve bien!</div>
        <div class="invalid-feedback">Este campo es obligatorio</div>
        <input type="submit" name="submit" id="submit" value="Enviar" class="btn btn-success" role="button"/>
    </form>
</div>


<?php
include_once '../../Estructura/footer.php';
?>