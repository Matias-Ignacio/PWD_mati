<?php
$titulo = "TP 2 - Ejercicio 2-1";
include_once "../../Estructura/header.php";
?>

<!-- Incluyo el archivo JS con las validaciones de los campos -->

<!-- Incluyo el archivo CSS con los estilos del error en los campos inválidos -->
<link rel="stylesheet" type="text/css" href="../../css/error.css">

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>

<div class="enunciado">
  <p class="h5 mb-4 text-primary">Enunciado: </p>
  <p>
    Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script -vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.
  </p>
</div>
<div class="divform">
  <form id="miFormulario" name="miFormulario" method="post" action="../Accion/ej2-1accion.php">
    <label for="numero">Ingrese un n&uacute;mero:</label><br>
    <input type="text" name="numero" id="numeroNP" ><br>
    <div class="error-numero"></div>
    <input type="submit" id="enviar" name="enviar" value="Enviar" class="btn btn-success mt-5" ><br>
  </form>
</div>
<script type="text/javascript" src="../../Js/tp2.js"></script>


<?php include_once '../../Estructura/footer.php'; ?>
