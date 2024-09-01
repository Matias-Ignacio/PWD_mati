<?php
$titulo = "Ejercicio 2";
include_once('../../Estructura/header.php');
?>
<script type="text/javascript" src="./Vista/Js/funciones.js"></script>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
  <p>Enunciado: </p>
  <p>
    Crear una p&aacute;gina php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programaci&oacute;n Web Din&aacute;mica, por cada d&iacute;a de la semana. Enviar los datos del formulario por el m&eacute;todo Get a otra p&aacute;gina php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana. 
  </p>
</div>
<div class="divform">
<form action="../Accion/eje2accion.php" method="get" id="form2" name="form2" onsubmit="return validarej2();">
    Lunes:<input type="number" id="lunes" name="lunes" value="0" min="0" step="1" required><br><br>

    Martes:<input type="number" id="martes" name="martes" value="0" min="0" step="1" required><br><br>

    Miércoles:<input type="number" id="miércoles" name="miércoles" value="0" min="0" step="1" required><br><br>

    Jueves:<input type="number" id="jueves" name="jueves" value="0" min="0" step="1" required><br><br>

    Viernes:<input type="number" id="viernes" name="viernes" value="0" min="0" step="1" required><br><br>

<button type="submit" class="btn btn-success" role="button">Calcular Horas Totales</button>
</form>
</div>

<?php
include_once('../../Estructura/footer.php');
?>