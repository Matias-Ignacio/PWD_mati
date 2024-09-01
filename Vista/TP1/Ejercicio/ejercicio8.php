<?php
$titulo = "Ejercicio 8";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
    <p>Enunciado: </p>
    <p>
    La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en funci&oacute;n de la edad y de la condici&oacute;n de estudiante del cliente.
    Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una p&aacute;gina web. Si es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un bot&oacute;n enviar los datos a un script encargado de realizar el c&aacute;lculo y visualizarlo. 
    Agregar un bot&oacute;n para limpiar el formulario y volver a consultar. 
    </p>
</div>

<div class="divform">
    <form method="get" action="../Accion/eje8accion.php">
        <label>Ingrese sus datos para calcular la tarifa:</label><br><br>
        <label>Edad:</label><br>
        <input type="number" name="edad" id='edad'><br><br>

        <label>Estudia:</label><br>
        <input type="radio" name="estudia" value="si" required>Estudio<br>
        <input type="radio" name="estudia" value="no" required>No estudio<br><br>

        <input type="submit" name="submit" value="Enviar" class="btn btn-success" role="button">
        <input type="reset" value="Limpiar Formulario" class="btn btn-success" role="button">

    </form>
</div>

<?php
include_once '../../Estructura/footer.php';
?>