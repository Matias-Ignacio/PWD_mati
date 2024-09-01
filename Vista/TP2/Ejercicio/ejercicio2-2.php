<?php
$titulo = "TP 2 - Ejercicio 2-2";
include_once('../../Estructura/header.php');
?>

<!-- JQUERY con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-2.js"></script>

<!-- CSS con los estilos del error en los campos inválidos -->
<link rel="stylesheet" type="text/css" href="../../css/error.css">

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
  <p class="h5 mb-4 text-primary">Enunciado: </p>
  <p>
    Crear una p&aacute;gina php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programaci&oacute;n Web Din&aacute;mica, por cada d&iacute;a de la semana. Enviar los datos del formulario por el m&eacute;todo Get a otra p&aacute;gina php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana. 
  </p>
</div>

<!-- Formularo -->
<div class="divform">
  <form action="../Accion/ej2-2accion.php" method="get" id="form2" name="form2">
      Lunes:<input type="text" id="lunes" name="lunes" class="dia" oninput="validarNumero(this)"><br><br>

      Martes:<input type="text" id="martes" name="martes" class="dia" oninput="validarNumero(this)"><br><br>

      Mi&eacute;rcoles:<input type="text" id="miercoles" name="miercoles" class="dia" oninput="validarNumero(this)"><br><br>

      Jueves:<input type="text" id="jueves" name="jueves" class="dia" oninput="validarNumero(this)"><br><br>

      Viernes:<input type="text" id="viernes" name="viernes" class="dia" oninput="validarNumero(this)"><br><br>

  <button type="submit" class="btn btn-success" role="button">Calcular Horas Totales</button>
  </form>
</div>

<?php
include_once('../../Estructura/footer.php');
?>