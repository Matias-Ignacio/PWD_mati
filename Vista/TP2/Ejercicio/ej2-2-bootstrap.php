<?php
$titulo = "TP 2 - Ejercicio 2-2";
include_once('../../Estructura/header.php');
?>


<!-- CSS con los estilos del error en los campos inválidos -->
<link rel="stylesheet" type="text/css" href="../../css/error.css">

<!-- Titulo -->
<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>

<!-- Enunciado -->
<div class="enunciado">
    <p class="h5 mb-4 text-primary">Enunciado: </p>
    <p>
    Crear una p&aacute;gina php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programaci&oacute;n Web Din&aacute;mica, por cada d&iacute;a de la semana. Enviar los datos del formulario por el m&eacute;todo Get a otra p&aacute;gina php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana. 
    </p>
</div>

<!-- Contenedor del formularo -->
<div class="container">
    <div class="row">
        <!-- Formulario -->
        <form action="../Accion/ej2-6accion-bootstrap.php" method="get" id="form2" name="form2" class="row g-3 mt-3 needs-validation" novalidate>

            <!-- Lunes -->
            <div class="mb-3 form-floating">
                <input type="number" min="0" max="5" id="lunesInput" name="lunes" class="form-control" required>
                <label for="lunesInput" class="form-label">Lunes: </label>
                
                <!-- Mensajes si es valido o no -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">Sólo se permiten números del 0 al 5, ya que no hay clases de más de 5 horas</div>

            </div>

            <!-- Martes -->
            <div class="mb-3 form-floating">
                <input type="number" min="0" max="5" id="martesInput" name="lunes" class="form-control" required>
                <label for="martesInput" class="form-label">Martes: </label>
                
                <!-- Mensajes si es valido o no -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">Sólo se permiten números del 0 al 5, ya que no hay clases de más de 5 horas</div>

            </div>


            <!-- Miercoles -->
            <div class="mb-3 form-floating">
                <input type="number" min="0" max="5" id="miercolesInput" name="lunes" class="form-control" required>
                <label for="miercolesInput" class="form-label">Mi&eacute;rcoles: </label>
                
                <!-- Mensajes si es valido o no -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">Sólo se permiten números del 0 al 5, ya que no hay clases de más de 5 horas</div>

            </div>


            <!-- Jueves -->
            <div class="mb-3 form-floating">
                <input type="number" min="0" max="5" id="juevesInput" name="lunes" class="form-control" required>
                <label for="juevesInput" class="form-label">Jueves: </label>

                <!-- Mensajes si es valido o no -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">Sólo se permiten números del 0 al 5, ya que no hay clases de más de 5 horas</div>

            </div>


            <!-- Viernes -->
            <div class="mb-3 form-floating">
                <input type="number" min="0" max="5" id="viernesInput" name="lunes" class="form-control" required>
                <label for="viernesInput" class="form-label">Viernes: </label>
                
                <!-- Mensajes si es valido o no -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">Sólo se permiten números del 0 al 5, ya que no hay clases de más de 5 horas</div>

            </div>

            <!-- Boton enviar -->
            <div class="col-md-4">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>

<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-6-bootstrap-validation.js"></script>

<!-- Footer -->
<?php
include_once('../../Estructura/footer.php');
?>