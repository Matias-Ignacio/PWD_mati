<?php
$titulo = "TP 2 - Ejercicio 2-1";
include_once "../../Estructura/header.php";
?>


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


<!-- Contenedor de formulario -->
<div class="container">
    <div class="row">
        <form class="row g-3 mt-3 needs-validation" id="form1" name="form1" method="post" action="../Accion/ej2-1accion-bootstrap.php" novalidate>

            <!-- Edad -->
            <div class="mb-3 form-floating">
                <input type="number" name="numero" id="numeroInput" class="form-control" placeholder="Escribe tu edad" required>
                <label for="numeroInput" class="form-label">N&uacute;mero:</label>
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">Sólo se permiten números enteros</div>
            </div>

            <!-- Boton -->
            <div class="col-md-4">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>


<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-6-bootstrap-validation.js"></script>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>
