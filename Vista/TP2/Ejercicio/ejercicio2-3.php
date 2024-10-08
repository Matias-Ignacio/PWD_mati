<?php
    $titulo = "TP 2 - Ejercicio 2-3";
    include_once '../../Estructura/header.php';
?>

<!--Incluyo el archivo JS con las validaciones de los campos-->
<script type="text/javascript" src="../../Js/tp2.js"></script>

<!--Incluyo el archivo CSS con los estilos del error en los campos invalidos-->
<!-- <link rel="stylesheet" type="text/css" href="../../css/error.css"> -->

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
    <p class="h5 mb-4 text-primary">Enunciado: </p>
    <p>
    Crear una p&aacute;gina php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el m&eacute;todo Post a otra p&aacute;gina php que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy nombre , apellido tengo edad años y vivo en direcci&oacute;n”, usando la informaci&aacute;o recibida. Cambiar el m&eacute;todo Post por Get y analizar las diferencias 
    </p>
</div>
<div class="divform">
    <form id="miFormulario" name="form3" action="../Accion/ej2-3accion.php" method="post">
        <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" class="nombreApellido" ><br>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido" class="nombreApellido" ><br>
        <div class="mensaje-error"></div>
        <label for="ledad">Edad:</label><br>
        <input type="text" name="edad" id="edad" ><br>
        <div class="error-numero"></div>
        <label for="ldireccion">Direcci&oacute;n:</label><br>
        <input type="text" name="direccion" id="direccion"><br>
        <div class="error-direccion"></div>
        <br>

        <!-- Campo oculto estudio -->
        <input type="radio" name="estudio" value="" checked style="display: none;"><br>
        <!-- Campo oculto sexo -->
        <input type="radio" name="sexo" value="" checked style="display: none;"><br>

        <input class="btn btn-success" role="button" type="submit" name="enviar" id="enviar" value="Enviar" onclick="return validar();">
    </form>
</div>


<?php
include_once '../../Estructura/footer.php';
?>