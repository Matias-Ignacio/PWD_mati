<?php
$titulo = "Ejercicio N 3";
include_once '../../Estructura/header.php';

// Recolectar datos del formulario y archivos
$datos_form = $_POST;
$array_img = $_FILES;

// Crear instancia del controlador
$archivos = new ControlCine();

// Llamar a la función y obtener la información
$informacion = $archivos->cinema($datos_form, $array_img);
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="container full-height">
    <div class="form-container rounded p-4 shadow bg-light">
        <h3 class="mb-4 text-primary">Cinem@s</h3>
        <?php
            echo "<strong>"."Titulo: "."</strong>".$informacion["titulo"]. "<br>";
            echo "<strong>"."Actores: "."</strong>".$informacion["actores"] . "<br>";
            echo "<strong>"."Director: "."</strong>".$informacion["director"] . "<br>";
            echo "<strong>"."Guion: "."</strong>".$informacion["guion"] . "<br>";
            echo "<strong>"."Producción: "."</strong>".$informacion["produccion"] . "<br>";
            echo "<strong>"."Año: "."</strong>".$informacion["anio"] . "<br>";
            echo "<strong>"."Nacionalidad: "."</strong>".$informacion["nacionalidad"] . "<br>";
            echo "<strong>"."Género: "."</strong>".$informacion["genero"] . "<br>";
            echo "<strong>"."Duración: "."</strong>".$informacion["duracion"] . "<br>";

            if ($informacion["restriccion"] == "a") {
                echo "<strong>"."Restricción de edad:"."</strong>"." Todo los públicos <br>";
            } elseif ($informacion["restriccion"] == "b") {
                echo "<strong>"."Restricción de edad:"."</strong>"." Mayores de 7 años <br>";
            } else {
                echo "<strong>"."Restricción de edad: "."</strong>"."Mayores de 18 años <br>";
            }

            echo "<strong>"."Sinopsis: "."</strong>".$informacion["sinopsis"]."<br>";

            // Mostrar imagen si se ha subido
            if ($informacion["imagen"] !== "error. No se ha subido ninguna foto") {
                // Definir la ruta donde se guardará la imagen
                $rutaDestino = '../archivos/' . $informacion["imagen"];
                // Intentar mover el archivo desde la carpeta temporal a la ruta de destino
                if (move_uploaded_file($array_img["imagen"]["tmp_name"], $rutaDestino)) {
                    echo "<img src='$rutaDestino' style='height:400px; width:300px'>" . "<br>";
                } else {
                    echo "<h3 align='center'>ERROR: no se pudo cargar el archivo</h3>";
                }
            } else {
                echo "<h3>" . $informacion["imagen"] . "</h3>";
            }
        ?>
        <div><a href="../Ejercicio/ejercicio3.php" class="boton">Volver</a></div>
    </div>
</div>

<?php
include_once '../../Estructura/footer.php';
?>
