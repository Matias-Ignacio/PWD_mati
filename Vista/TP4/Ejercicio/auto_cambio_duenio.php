<?php
$titulo = "Cambio de dueño";
include_once '../../Estructura/header.php';
$objAbmAuto = new AbmAuto();
$objAbmPersona = new AbmPersona();
$listaPersona = $objAbmPersona->buscar(null);
$datos = data_submitted();
$patente = "";
if (isset($datos['Patente']))
{
	$enviar['Patente'] = $datos['Patente'];
	$listaAuto = $objAbmAuto->buscar($enviar);
	if (count($listaAuto) == 1)
	{
		$patente= $listaAuto[0]->getPatente();
	}
}
?>

<h3 class="text-center text-primary mb-4">Auto - Cambio de due&ntilde;o</h3>

<div class="container mt-3">
	<form method="post" action="../Accion/auto_accion_cambio.php" class="container mt-5 p-4 border rounded shadow">

		<label>Patente  AAA 123 ó AA 456 AA</label><br>
		<input type="text" class="form-control" id="Patente" name="Patente" value="<?php echo $patente ?>" pattern="[A-z\s]{4}[0-9]{3}||[A-z]{2}[0-9]{3}[A-z]{2}" required><br/>

           <!-- Dni del Duenio -->
		   <div class="mb-3 form-floating">
				<select name="NroDni" id="NroDni" class="form-control" required>
                    <option value="" selected disabled>Elija DNI</option>
                    <?php	
                    if( count($listaPersona) > 0){
                        foreach ($listaPersona as $objPersona) { 
                            echo '<option value="'.$objPersona->getNroDni().'">'.$objPersona->getNroDni().' - '.$objPersona->getApellido().' '.$objPersona->getNombre().'</option>';
                        }
                    }
                ?>
                </select>
				<label for="NroDni" class="form-label">Dni del Due&ntilde;o</label>
		   </div>	

		
		<input type="submit" class="btn btn-primary">
	</form>
	<br><br>

	<a href="auto_index.php" class="btn btn-info">Volver</a>
</div>
<!-- JQUERY con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/validaciontp4.js"></script>