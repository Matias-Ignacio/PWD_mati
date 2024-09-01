<?php
$titulo = "Ejercicio 6";
include_once '../../Estructura/header.php';
?>

<!--Incluyo el archivo JS con las validaciones de los campos-->
<script src="../../Js/tp1eje6.js"></script>


<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
  <p>Enunciado: </p>
  <p>
    Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes deportes que practica (f&uacute;tbol, basket, tennis, voley) un alumno. Mostrar en la p&aacute;gina que procesa el formulario la cantidad de deportes que practica. 
  </p>
</div>
<div class="divform">
    <form id="form5" name="form4" action="../Accion/eje6accion.php" method="post">
        <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" oninput="validarNombre(event)" required><br>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido" oninput="validarNombre(event)" required><br>
        <label for="ledad">Edad:</label><br>
        <input type="number" name="edad" id="edad" oninput="validarEdad(event)" required min="0"><br>
        <label for="ldireccion">Direcci&oacute;n</label><br>
        <input type="text" name="direccion" id="direccion" required><br>
        <label for="lnivelestudio">Nivel de estudios:</label><br>
        <input type="radio" id="estudio" name="estudio" value="1" checked>
        <label for="lsin">Sin Estudios</label><br>
        <input type="radio" id="estudio" name="estudio" value="2">
        <label for="lsecundario">Secundarios</label><br>
        <input type="radio" id="estudio" name="estudio" value="3">
        <label for="lterciario">Terciarios</label><br>
        <select name="sexo" id="sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select><br>
        <br>
        <input type="checkbox" id="deporte" name="d1" value="futbol">
        <label for="lfutbol">Futbol</label><br>
        <input type="checkbox" id="basket" name="d2" value="basket">
        <label for="lbasket">Basket</label><br>
        <input type="checkbox" id="voley" name="d3" value="voley">
        <label for="lvoley">Voley</label><br>
        <input type="checkbox" id="tenis" name="d4" value="tenis">
        <label for="ltenis">Tenis</label><br>
        <input type="checkbox" id="handbol" name="d5" value="handbol">
        <label for="lhandbol">Handbol</label><br>
        <input type="checkbox" id="otros" name="d6" value="otros">
        <label for="lotros">Otros</label><br>

        <input class="btn btn-success" role="button" type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
</div>

<?php
include_once '../../Estructura/footer.php';
?>