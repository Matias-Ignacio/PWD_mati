<?php
$titulo = "Ejercicio 4";
include_once '../../Estructura/header.php';
?>

<!--Incluyo el archivo JS con las validaciones de los campos-->
<script src="../../Js/tp1eje4.js"></script>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
  <p>Enunciado: </p>
  <p>
    Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar esos datos a otra p&aacute;gina en donde se muestren mensajes distintos dependiendo si la persona es mayor de edad o no; (si la edad es mayor o igual a 18). Enviar los datos usando el m&eacute;todo GET y luego probar de modificar los datos directamente en la url para ver los dos posibles mensajes. 
  </p>
</div>
<div class="divform">
    <form id="form4" name="form4" action="../Accion/eje4accion.php" method="get">
        <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" oninput="validarNombre(event)" required><br>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido" oninput="validarNombre(event)" required><br>
        <label for="ledad">Edad:</label><br>
        <input type="number" name="edad" id="edad" oninput="validarEdad(event)" required min="1" ><br>
        <label for="ldireccion">Direcci&oacute;n</label><br>
        <input type="text" name="direccion" id="direccion" required><br>
        <br>
        <input class="btn btn-success" role="button" type="submit" name="enviar" id="enviar" value="Enviar">
        
        <!-- Campo oculto estudio -->
        <input type="hidden" name="estudio" value=""><br>
        <!-- Campo oculto sexo -->
        <input type="hidden" name="sexo" value=""><br>
    </form>
</div>


<?php
include_once '../../Estructura/footer.php';
?>