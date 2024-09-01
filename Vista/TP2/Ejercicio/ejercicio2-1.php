<?php
$titulo = "TP 2 - Ejercicio 2-1";
include_once "../../Estructura/header.php";
?>

<!-- Incluyo el archivo JS con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-1.js"></script>

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
  <form id="form1" name="form1" method="post" action="../Accion/ej2-1accion.php">
    <label for="numero">Ingrese un n&uacute;mero:</label><br>
    <input type="text" name="numero" id="numero" oninput="validarNumero(this)"><br>
    <input type="submit" id="enviar" name="enviar" value="Enviar" class="btn btn-success mt-5" role="button"><br>
  </form>
</div>

<?php include_once '../../Estructura/footer.php'; ?>
