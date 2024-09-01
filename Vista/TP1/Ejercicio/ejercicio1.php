<?php
$titulo = "Ejercicio 1";
include_once "../../Estructura/header.php";
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>

<div class="enunciado">
  <p>Enunciado: </p>
  <p>
    Confeccionar un formulario que solicite un n&uacute;mero. Al pulsar el botón de enviar debe llamar a un script -vernumero.php- y visualizar un mensaje que indique si el n&uacute;mero enviado fue: positivo, cero o negativo. Añadir un link, a la p&aacute;gina que visualiza la respuesta, que permita volver a la p&aacute;gina anterior.
  </p>
</div>
<div class="divform">
<form name="form1" method="post" action="../Accion/vernumero.php" onsubmit="return validar();">
  <label for="lnumero">Ingrese un n&uacute;mero:</label><br>
  <input type="number" name="numero" id="numero" value="0"><br>
  <input type="submit" id="enviar" name="enviar" value="Enviar" class="btn btn-success" role="button"><br>
</form>
</div>

<?php include_once '../../Estructura/footer.php';
?>
