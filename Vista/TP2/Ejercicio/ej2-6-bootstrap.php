<?php
$titulo = "TP 2 - Ejercicio 2-6";
include_once "../../Estructura/header.php";
?>

<!-- Incluyo el archivo JS con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-1.js"></script>

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
<!-- Contenedor del formulario -->
<div class="container">
    <div class="row">
        <!-- Formulario -->
        <form id="miFormulario" action="../Accion/ej2-6accion-bootstrap.php" method="get" class="row g-3 mt-3 needs-validation" novalidate>

            <!-- 1er fila - 1er columna -->
            <div class="col-4">
                <!-- Nombre -->
                <div class="mb-3 form-floating">
                    <input type="text" name="nombre" id="nombreInput" class="form-control" placeholder="Escribe tu nombre" pattern="^\s*[A-Za-z]+(\s[A-Za-z]+)*\s*$" required>
                    <label for="nombreInput" class="form-label">Nombre: </label>
                    <div class="valid-feedback">Ok!</div>
                    <div class="invalid-feedback">Sólo se permiten letras y espacios</div>
                </div>
            </div>

            <!-- 1er fila - 2da columna -->
            <div class="col-4">
                <!-- Apellido -->
                <div class="mb-3 form-floating">
                    <input type="text" name="apellido" id="apellidoInput" class="form-control" placeholder="Escribe tu apellido" pattern="^\s*[A-Za-z]+(\s[A-Za-z]+)*\s*$" required>
                    <label for="apellidoInput" class="form-label">Apellido: </label>
                    <div class="valid-feedback">Ok!</div>
                    <div class="invalid-feedback">Sólo se permiten letras y espacios</div>
                </div>
            </div>

            <!-- 1er fila - 3er columna -->
            <div class="col-4">
                <!-- Edad -->
                <div class="mb-3 form-floating">
                    <input type="number" name="edad" id="edadInput" class="form-control" placeholder="Escribe tu edad" min="0" required>
                    <label for="edadInput" class="form-label">Edad: </label>
                    <div class="valid-feedback">Ok!</div>
                    <div class="invalid-feedback">Sólo se permiten números enteros</div>
                </div>
            </div>

            <!-- 2da fila - 1er columna -->
            <div class="col-12">
                <!-- Direccion -->
                <div class="mb-3 form-floating">
                    <input type="text" name="direccion" id="direccionInput" class="form-control" placeholder="Nombre de la ciudad" pattern="^[A-Za-z0-9\s]*[A-Za-z0-9][A-Za-z0-9\s]*$" required>
                    <label for="direccionInput" class="form-label">Dirección: </label>
                    <div class="valid-feedback">Ok!</div>
                    <div class="invalid-feedback">Sólo se permiten letras, números y espacios</div>
                </div>
            </div>


            <!-- 3er fila - 1er columna -->
            <div class="col-4">
                <!-- Estudios -->
                <div class="mb-3">
                    <label class="form-label">Nivel de estudios</label>
                    <div class="form-check">
                        <input type="radio" id="radioInput1" name="estudio" class="form-check-input" required>
                        <label for="radioInput1" class="form-check-label">Sin estudios</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="radioInput2" name="estudio" class="form-check-input" required>
                        <label for="radioInput2" class="form-check-label">Nivel secundario</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="radioInput3" name="estudio" class="form-check-input" required>
                        <label for="radioInput3" class="form-check-label">Nivel terciario</label>
                    </div>
                </div>
            </div>

            <!-- 3er fila - 2da columna -->
            <div class="col-4">
                <!-- Sexo -->
                <div class="mb-3">
                    <label for="dataListInput" class="form-label">Sexo: </label>
                    <input list="sexo" name="sexo" id="sexoInput" class="form-control" placeholder="Selecciona tu sexo" required>
                    <datalist id="sexo">
                        <option value="Masculino">
                        <option value="Femenino">
                    </datalist>
                    <div class="invalid-feedback">Seleccione un sexo válido</div>
                </div>
            </div>


            <!-- 3er fila - 3er columna -->
            <div class="col-4">
                <!-- Deportes -->
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label" for="deportes-practica">Seleccione el/los deporte/s que practica:</label>
                        <div class="mb-3 form-check form-switch">
                            <input type="checkbox" id="futbol" name="deportes" class="form-check-input">
                            <label for="futbol" class="form-check-label">Fútbol</label>
                        </div>
                        <div class="mb-3 form-check form-switch">
                            <input type="checkbox" id="basquet" name="deportes" class="form-check-input">
                            <label for="basquet" class="form-check-label">Básquet</label>
                        </div>
                        <div class="mb-3 form-check form-switch">
                            <input type="checkbox" id="voley" name="deportes" class="form-check-input">
                            <label for="voley" class="form-check-label">Voley</label>
                        </div>
                        <div class="mb-3 form-check form-switch">
                            <input type="checkbox" id="otro" name="deportes" class="form-check-input">
                            <label for="otro" class="form-check-label">Otro</label>
                        </div>
                        <div class="mb-3 form-check form-switch">
                            <input type="checkbox" id="ninguno" name="deportes" class="form-check-input">
                            <label for="ninguno" class="form-check-label">Ninguno</label>
                        </div>
                        <div class="invalid-feedback">Debe seleccionar al menos un deporte.</div>
                    </div>
                </div>
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

<?php include_once '../../Estructura/footer.php'; ?>