<?php
$titulo = "TP 2 - Ejercicio 2-4";
include_once '../../Estructura/header.php';
?>

<!-- Incluyo el archivo JS con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2.js"></script>

<!-- Incluyo el archivo CSS con los estilos del error en los campos inválidos -->
<!-- <link rel="stylesheet" type="text/css" href="../../css/error.css"> -->

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
  <p class="h5 mb-4 text-primary">Enunciado: </p>
  <p>
    Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar esos datos a otra p&aacute;gina en donde se muestren mensajes distintos dependiendo si la persona es mayor de edad o no; (si la edad es mayor o igual a 18). Enviar los datos usando el m&eacute;todo GET y luego probar de modificar los datos directamente en la url para ver los dos posibles mensajes. 
  </p>
</div>
<div class="divform">
    <form id="miFormulario" name="form4" action="../Accion/ej2-4accion.php" method="get">
      <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" class="nombreApellido"><br>
        <div class="mensaje-error"></div>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido" class="nombreApellido"><br>
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
        <input class="btn btn-success" role="button" type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
</div>


<?php
include_once '../../Estructura/footer.php';
?>