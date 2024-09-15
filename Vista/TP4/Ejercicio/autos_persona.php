<?php
	$titulo = "Autos x Persona"; //Titulo en la pestania
	include_once '../../Estructura/header.php';
	$objAbmPersona = new AbmPersona();
    $objAbmAuto = new AbmAuto();
	$datos = data_submitted();
	$objPersona = NULL;
	if (isset($datos['NroDni']))
    {
		$listaPersona = $objAbmPersona->buscar($datos);
        $enviar['DniDuenio'] = $datos['NroDni'];
        $listaAutos = $objAbmAuto->buscar($enviar);
		if (count($listaPersona) == 1)
        {
			$objPersona = $listaPersona[0];
		}
	}
?>	
<!-- Titulo en la pagina -->
<div class="container mt-3">
    <h2 class="text-center">Autos por Persona</h2>
    <p class="text-center">Listado de los autos incluidos en la base de datos</p>

<!-- Tabla 1 - Datos personas -->
    <table class="table table-hover table-striped">
        <tr>
            <th style="width:200px;">Dni</th>
            <th style="width:200px;">Apellido</th>
            <th style="width:200px;">Nombre</th>
            <th style="width:200px;">Fecha Nacimiento</th>
            <th style="width:200px;">Teléfono</th>
            <th style="width:200px;">Domicilio</th>
        </tr>

        <?php
            if ($objPersona != null)
            {

                echo '<tr><td style="width:200px;">'.$objPersona->getNroDni().'</td>';
                echo '<td style="width:200px;">'.$objPersona->getApellido().'</td>';
                echo '<td style="width:200px;">'.$objPersona->getNombre().'</td>';
                echo '<td style="width:200px;">'.$objPersona->getFechaNac().'</td>';
                echo '<td style="width:200px;">'.$objPersona->getTelefono().'</td>';
                echo '<td style="width:200px;">'.$objPersona->getDomicilio().'</td></tr>';
            }else{
                echo "<p>No se encontro la clave que desea modificar";
            }
        ?>
    </table>
    <br><br>

    <!-- Tabla 2 - Datos autos -->
    <div class="container mt-3">
        <h2 class="text-center">Lista de autos</h2>
        <p class="text-center">Listado de los autos pertenecientes a <?php echo $objPersona->getNombre(); ?> </p>
        <table class="table table-hover table-striped">
            <tr>
                <th style="width:200px;">Patente</th>
                <th style="width:200px;">Marca</th>
                <th style="width:200px;">Modelo</th>
            </tr>

            <?php	
                if( count($listaAutos) > 0)
                {
                    foreach ($listaAutos as $objAuto)
                    {
                        echo '<tr><td style="width:200px;">'.$objAuto->getPatente().'</td>';
                        echo '<td style="width:200px;">'.$objAuto->getMarca().'</td>';
                        echo '<td style="width:200px;">'.$objAuto->getModelo().'</td></tr>'; 
                    }
                }
            ?>
        </table>
    <br><br>
</div>
    <!-- Boton atras -->
    <div class="col-md-4">
        <button class="btn btn-info" onclick="history.back();">Atr&aacute;s</button>
    </div>
</div>
<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-6-bootstrap-validation.js"></script>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>