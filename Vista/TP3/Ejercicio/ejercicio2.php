<?php
$titulo = "Ejercicio N 2";
include_once '../../Estructura/header.php';
?>

<script type="text/javascript" src="../../Js/tp3ej1.js"></script>
<div class="divtitulo">
    <h1><?php echo $titulo; ?></h1>
</div>
<div class="divform">
    <h1 class="p-3 mb-3 bg-primary">LECTURA DE UN ARCHIVO txt</h1>
    <form action="../Accion/eje2accion.php" id="form" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
        <p class="">Subir archivo</p>
        <input type="file"  name="archivo" id="archivo" class="form-control-file w-100" required>
        <div class="valid-feedback">¡Se ve bien!</div>
        <div class="invalid-feedback">Este campo es obligatorio</div>
        <input type="submit" class="btn btn-success" role="button">
    </form>
</div>


<?php
include_once '../../Estructura/footer.php';
?>