<?php
    $titulo = "Ver Autos"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
    $objAbmAuto = new AbmAuto();
    $listaAuto = $objAbmAuto->buscar(null);
?>	

<!-- Titulo en la pagina -->
<div class="container mt-3">
    <h2 class="text-center">Listado de autos</h2>
    <p class="text-center">Listado de los autos incluidos en la base de datos</p>

    <!-- Tabla -->
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th colspan="2">Nombre Propietario</th>
                <th colspan="2">Menu</th>
            </tr>
        </thead>

        <tbody>
            <?php	
                if(!empty($listaAuto))
                {
                    if( count($listaAuto) > 0)
                    {
                        foreach ($listaAuto as $objAuto)
                        {    
                            echo '<tr><td>'.$objAuto->getPatente().'</td>';
                            echo '<td>'.$objAuto->getMarca().'</td>';
                            echo '<td>'.$objAuto->getModelo().'</td>';
                            echo '<td>'.$objAuto->getObjDuenio()->getNombre().'</td>';
                            echo '<td>'.$objAuto->getObjDuenio()->getApellido().'</td>';
                            echo '<td><a href="auto_editar.php?Patente='.$objAuto->getPatente().'"class="btn btn-color btn-sm" role="button">Editar</a></td>';
                            echo '<td><a href="../Accion/auto_accion.php?accion=borrar&Patente='.$objAuto->getPatente().'"class="btn btn-outline-danger btn-sm" role="button">Borrar</a></td></tr>'; 
                        }
                    }
                }else{
                    echo "<h2>No hay datos en la base de datos</h2>";
                }
            ?>
        </tbody>
    </table>


<!-- Boton atras -->
<div class="col-md-4">
    <button class="btn btn-info" onclick="history.back();">Atr&aacute;s</button>
    <a href="../Ejercicio/auto_index.php" class="btn btn-success" role="button">Principal</a>
</div>
</div>

<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-6-bootstrap-validation.js"></script>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>