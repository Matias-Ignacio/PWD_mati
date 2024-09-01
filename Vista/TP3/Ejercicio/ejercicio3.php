<?php
$titulo = "Ejercicio N 3";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1><?php echo $titulo; ?></h1>
</div>
<div class="container full-height">
    <div class="form-container rounded p-4 shadow-lg  mt-5">
        <h3 class="mb-4 text-primary"><i class="bi bi-pencil-square"></i>Cinem@s</h3>
        <form action="../Accion/eje3accion.php" method="post" enctype="multipart/form-data" id='cine' class="needs-validation" novalidate>           
        <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
                            <div class="valid-feedback">¡Se ve bien!</div>
                            <div class="invalid-feedback">Este campo es obligatorio</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="actores" class="form-label">Actores:</label>
                            <input type="text" class="form-control" id="actores" name="actores" placeholder="Actores" pattern="[A-Za-z\s]+" required>
                            <div class="valid-feedback">¡Se ve bien!</div>
                            <div class="invalid-feedback">Este campo es obligatorio</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="director" class="form-label">Director:</label>
                            <input type="text" class="form-control" id="director" name="director" placeholder="Director" pattern="[A-Za-z\s]+" required>
                            <div class="valid-feedback">¡Se ve bien!</div>
                            <div class="invalid-feedback">Este campo es obligatorio</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="guion" class="form-label">Guion:</label>
                            <input type="text" class="form-control" id="guion" name="guion" placeholder="Guion" required>
                            <div class="valid-feedback">¡Se ve bien!</div>
                            <div class="invalid-feedback">Este campo es obligatorio</div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="produccion" class="form-label">Producción:</label>
                            <input type="text" class="form-control" id="produccion" name="produccion" required>
                            <div class="valid-feedback">¡Se ve bien!</div>
                            <div class="invalid-feedback">Este campo es obligatorio</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="anio" class="form-label">Año:</label>
                            <input type="text" class="form-control" id="anio" name="anio" maxlength="4" pattern="\d{4}"   required>
                            <div class="valid-feedback">¡Se ve bien!</div>
                            <div class="invalid-feedback">Por favor, ingrese un año válido (4 dígitos).</div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" pattern="[A-Za-z\s]+" required>
                            <div class="valid-feedback">¡Se ve bien!</div>
                            <div class="invalid-feedback">Este campo es obligatorio</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="genero" class="form-label">Género:</label>
                            <select class="form-select" id="genero" name="genero" required>
                                <option value="" disabled selected>Seleccione un género</option>
                                <option value="drama">Drama</option>
                                <option value="comedia">Comedia</option>
                                <option value="terror">Terror</option>
                                <option value="romance">Romance</option>
                                <option value="suspenso">Suspenso</option>
                                <option value="otras">Otras</option>
                            </select>
                            <div class="valid-feedback">¡Se ve bien!</div>
                            <div class="invalid-feedback">Este campo es obligatorio</div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="duracion" class="form-label">Duración (minutos):</label>
                            <input type="text" class="form-control" id="duracion" name="duracion"  maxlength="3" pattern="\d{1,3}" required>
                            <div class="valid-feedback">¡Se ve bien!</div>
                            <div class="invalid-feedback">Este campo es obligatorio</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Restricción de edad:</strong><br>
                            <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restriccion" id="restriccion_a" value="a" required>
                        <label class="form-check-label" for="restriccion_a">Todos los públicos</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restriccion" id="restriccion_b" value="b">
                        <label class="form-check-label" for="restriccion_b">Mayores de 7 años</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restriccion" id="restriccion_c" value="c">
                        <label class="form-check-label" for="restriccion_c">Mayores de 18 años</label>
                    </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="sinopsis" class="form-label">Sinopsis:</label>
                    <textarea class="form-control" id="sinopsis" name="sinopsis" maxlength="100" required></textarea>
                    <div class="valid-feedback">¡Se ve bien!</div>
                    <div class="invalid-feedback">Este campo es obligatorio</div>
                </div>
                <div class="mb-3">
                    <label for="imagen" >Imagen de la película:</label>
                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                    <div class="valid-feedback">¡Se ve bien!</div>
                    <div class="invalid-feedback">Este campo es obligatorio</div>
                </div>
                <div id="botones" class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="enviar">Enviar</button>
                    <button type="reset" class="btn btn-success ms-2" name="reset" >Borrar</button>
                </div>
                
            </form>
            <script type="text/javascript" src="../../Js/tp2ej4.js"></script>
        </div>
    </div>

<?php
include_once '../../Estructura/footer.php';
?>