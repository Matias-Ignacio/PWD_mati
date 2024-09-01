<?php
$titulo = "TP 2 - Ejercicio 2-4";
include_once '../../Estructura/header.php';
?>

<!-- Incluyo el archivo JS con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-4.js"></script>

<!-- Incluyo el archivo CSS con los estilos del error en los campos inválidos -->
<link rel="stylesheet" type="text/css" href="../../css/error.css">

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
    <form id="form4" name="form4" action="../Accion/ej2-4accion.php" method="get">
      <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" class="nombreApellido" oninput="validarNombre(this)" ><br>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido" class="nombreApellido" oninput="validarNombre(this)"><br>
        <label for="ledad">Edad:</label><br>
        <input type="text" name="edad" id="edad" oninput="validarEdad(this)"><br>
        <label for="ldireccion">Direcci&oacute;n:</label><br>
        <input type="text" name="direccion" id="direccion" oninput="validarDireccion(this)"><br>
        <br>

        <!-- Campo oculto estudio -->
        <input type="hidden" name="estudio" value=""><br>
        <!-- Campo oculto sexo -->
        <input type="hidden" name="sexo" value=""><br>

        <input class="btn btn-success" role="button" type="submit" name="enviar" id="enviar" value="Enviar" onclick="return validar();">
    </form>
</div>


<?php
include_once '../../Estructura/footer.php';
?>