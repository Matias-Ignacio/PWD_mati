<?php
	$titulo = "Auto nuevo"; //Titulo en la pestania
	include_once '../../Estructura/header.php';
    $objAbmPersona = new AbmPersona();
    $listaPersona = $objAbmPersona->buscar(null);
?>

<!-- Contenedor de formulario -->
<div class="container mt-5 p-4 border rounded shadow">
    <!-- Titulo en la pagina -->
    <h3 class="text-center">Ingresar nuevo auto</h3>
    <div class="row">

		<!-- Formulario -->
		<form method="post" action="../Accion/auto_accion_nuevo.php" id="formAutoNuevo" name="formAutoNuevo" class="row g-3 mt-3 needs-validation" novalidate>

			<!-- Patente a buscar -->
			<div class="mb-3 form-floating">
				<input class="form-control" type="text" id="Patente" name="Patente" placeholder="AAA 111 ó AA 111 AA" pattern="[A-z\s]{4}[0-9]{3}||[A-z]{2}[0-9]{3}[A-z]{2}" required>
				<label for="patente" class="form-label">Ingrese una patente con el siguiente formato: AAA 111 ó AA 111 AA</label>

				<!-- Mensajes aprobado y error -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">S&oacute;lo se permiten patentes con el formato especificado</div>
            </div>

            <!-- Marca -->
            <div class="mb-3 form-floating">
				<input class="form-control" id="Marca" name ="Marca" type="text" pattern="^[A-Za-z0-9\s]*[A-Za-z0-9][A-Za-z0-9\s]*$" placeholder="" required>
				<label for="Marca" class="form-label">Marca</label>

				<!-- Mensajes aprobado y error -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">S&oacute;lo se permiten letras, n&uacute;meros y espacios</div>
            </div>

            <!-- Modelo -->
            <div class="mb-3 form-floating">
				<input class="form-control" id="Modelo" name ="Modelo" type="number" min="1" placeholder="" required>
				<label for="Modelo" class="form-label">Modelo</label>

				<!-- Mensajes aprobado y error -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">S&oacute;lo se permiten n&uacute;meros enteros positivos</div>
            </div>

            <!-- Dni del Duenio -->
            <div class="mb-3 form-floating">
				<select name="DniDuenio" id="DniDuenio" class="form-control" required>
                    <option value="" selected disabled>Elija DNI</option>
                    <?php	
                    if( count($listaPersona) > 0){
                        foreach ($listaPersona as $objPersona) { 
                            echo '<option value="'.$objPersona->getNroDni().'">'.$objPersona->getNroDni().' - '.$objPersona->getApellido().' '.$objPersona->getNombre().'</option>';
                        }
                    }
                ?>
                </select>
				<label for="DniDuenio" class="form-label">Dni del Due&ntilde;o</label>

				<!-- Mensajes aprobado y error -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">S&oacute;lo se permiten n&uacute;meros enteros positivos</div>
            </div>


            <!-- Boton Guardar nuevo auto -->
            <div class="col-md-4">
                <button class="btn btn-primary" type="submit">Guardar nuevo auto</button>
            </div>
		</form>
	</div>
    <br><br>
    
    <!-- Boton atras -->
    <div class="col-md-4">
        <button class="btn btn-info" onclick="history.back();">Atr&aacute;s</button>
    </div>
</div>

<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-6-bootstrap-validation.js"></script>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>
