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
<form name="form1" method="post" action="../Accion/vernumero.php" >
  <label for="NroDni">Ingrese un n&uacute;mero:</label>
  <input type="text" name="NroDni" id="NroDni" ><br>

  <label for="Nombre">NOmbre</label>
  <input type="text" name="Nombre" id="Nombre" ><br>
  
  <label for="Domicilio">Domicilio</label>
  <input type="text" name="Domicilio" id="Domicilio" ><br>
    
  <label for="Email">Email</label>
  <input type="text" name="Email" id="Email" ><br>

  <label for="Telefono">Telefono</label>
  <input type="text" name="Telefono" id="Telefono" ><br>

  <label for="fechaNac">fechaNac</label>
  <input type="text" name="fechaNac" id="fechaNac" ><br>

  <input type="submit" id="enviar" name="enviar" value="Enviar" class="btn btn-success" role="button"><br>
</form>
</div>

<?php include_once '../../Estructura/footer.php';
?>
