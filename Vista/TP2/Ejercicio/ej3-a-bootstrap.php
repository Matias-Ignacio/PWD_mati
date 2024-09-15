<?php
$titulo = "TP 2 - Ejercicio 3-A";
include_once "../../Estructura/header.php";
?>


<!-- Incluyo el archivo CSS con los estilos del error en los campos inválidos -->
<link rel="stylesheet" type="text/css" href="../../css/error.css">

<!-- Titulo -->
<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>

<!-- Enunciado -->
<div class="enunciado">
    <p class="h5 mb-4 text-primary">Enunciado: </p>
    <p> Crear una nueva p&aacute;gina php con un formulario HTML de login en la que solicitan el usuario y la password para loguearse. Los datos del formulario son enviados a un script verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo y en caso contrario un mensaje de error.     </p>
</div>


<!-- Contenedor de formulario -->
<div class="container">
    <div class="row">

    <!-- Formulario -->
        <form class="row g-3 mt-3 needs-validation" id="form1" name="form1" method="post" action="../Accion/ej3-a-accion-bootstrap.php" novalidate>

            <!-- 1er fila -->
            <div class="col-6">
                <!-- Ususario -->
                <div class="mb-3 form-floating">
                    <input type="text" name="usuario" id="usuarioInput" class="form-control" placeholder="Escribe tu nombre de usuario" pattern="^[^\s]+$" required>
                    <label for="usuarioInput" class="form-label">Nombre de ususario: </label>
                    <div class="valid-feedback">Ok!</div>
                    <div class="invalid-feedback">No se permite nombre de usuario de solo espacios</div>
                </div>
            </div>

            <!-- 2da fila -->
            <div class="col-6">
                <!-- Contraseña -->
                <div class="mb-3 form-floating">
                    <input type="text" name="password" id="contraseniaInput" class="form-control" placeholder="Escribe tu nombre de usuario" pattern="^[^\s]+$" required>
                    <label for="contraseniaInput" class="form-label">Contrase&ntilde;a: </label>
                    <div class="valid-feedback">Ok!</div>
                    <div class="invalid-feedback">No se permite contrase&ntilde;a de solo espacios</div>
                </div>
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
