<?php
$titulo = "TP 2 - Ejercicio 2-7";
include_once '../../Estructura/header.php';
?>

<!--JQUERY con validaciones de los campos-->
<script src="../../Js/tp2.js"></script>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
  <p class="h5 mb-4 text-primary">Enunciado: </p>
  <p>
    Crear una p&aacute;gina con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán n&uacute;meros y el select debe dar la opci&oacute;n de una operaci&oacute;n matem&aacute;tica que podr&aacute; resolverse usando los n&uacute;meros ingresados. En la p&aacute;gina que procesa la informaci&oacute;n se debe mostrar por pantalla la operaci&oacute;n seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operaci&oacute;n. Ejemplo del formulario: 
  </p>
</div>

<div class="divform">
    <form id="miFormulario" name="form7" method="get" action="../Accion/ej2-7accion.php">
        <label>N&uacute;mero 1:</label>
        <input type="number" id="numero" name="numero1" min="1" step="1">
        <br><br>

        <label>N&uacute;mero 2:</label>
        <input type="number" id="numero" name="numero2" min="1" step="1">
        <div class="error-numero"></div>
        <br><br>
        

        <select name="operacion" id="operacion">
          <option value="">Seleccione una opci&oacute;n</option>
          <option value="suma">Suma</option>
          <option value="resta">Resta</option>
          <option value="multiplicacion">Multiplicaci&oacute;n</option>
          <option value="division">Divisi&oacute;n</option>
        </select>
        <div class="error-operacion"></div>
        <br><br>

        <input type="submit" value="Calcular" class="btn btn-success" role="button">
    </form>
</div>

<?php
include_once '../../Estructura/footer.php';
?>